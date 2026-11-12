/* Aviso de cookies (publicidade) e conversão de cliques no WhatsApp. */
(function () {
  'use strict';
  var KEY = 'cookie_consent_advertising';
  var AGE = { granted: 365, denied: 183 };
  var ads = window.djAds || null;
  var gpc = navigator.globalPrivacyControl === true;

  function stored() {
    try {
      var s = JSON.parse(localStorage.getItem(KEY) || 'null');
      if (!s || (s.choice !== 'granted' && s.choice !== 'denied') || typeof s.at !== 'number') return null;
      return { choice: s.choice, stale: Date.now() - s.at >= AGE[s.choice] * 86400000 };
    } catch (e) { return null; }
  }
  function granted() {
    if (gpc) return false;
    var s = stored();
    return !!(s && s.choice === 'granted' && !s.stale);
  }
  function loadTag() {
    if (!ads || window.djAdsLoaded) return;
    var t = document.createElement('script');
    t.async = true;
    t.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(ads.id);
    document.head.appendChild(t);
    window.djAdsLoaded = true;
  }
  function apply() {
    var ok = granted();
    if (typeof window.gtag === 'function') {
      var v = ok ? 'granted' : 'denied';
      if (!ok) window.gtag('set', 'user_data', null);
      window.gtag('consent', 'update', { ad_storage: v, ad_user_data: v, ad_personalization: v });
    }
    if (ok) loadTag();
  }
  function save(choice) {
    try { localStorage.setItem(KEY, JSON.stringify({ choice: choice, at: Date.now() })); } catch (e) {}
    apply();
  }

  // Conversão: clique em qualquer link do WhatsApp (só com publicidade aceita).
  function reportWhatsApp() {
    if (!ads || !ads.waLabel || !granted() || typeof window.gtag !== 'function') return;
    window.gtag('event', 'conversion', { send_to: ads.id + '/' + ads.waLabel, transport_type: 'beacon' });
  }
  window.djReportWhatsApp = reportWhatsApp;
  document.addEventListener('click', function (e) {
    var a = e.target.closest && e.target.closest('a[href^="https://wa.me/"]');
    if (a) reportWhatsApp();
  });

  // Aviso.
  var box = document.getElementById('dj-cookie');
  if (!box) return;
  var main = box.querySelector('.dj-cookie__main');
  var settings = box.querySelector('.dj-cookie__settings');
  var sw = box.querySelector('[data-dj-ads-switch]');
  var gpcNote = box.querySelector('.dj-cookie__gpc');

  function close() { box.hidden = true; }
  function open(showSettings) {
    main.hidden = !!showSettings;
    settings.hidden = !showSettings;
    sw.checked = granted();
    sw.disabled = gpc;
    gpcNote.hidden = !gpc;
    box.hidden = false;
    box.focus();
  }
  box.querySelector('[data-dj-accept]').addEventListener('click', function () { save('granted'); close(); });
  box.querySelector('[data-dj-reject]').addEventListener('click', function () { save('denied'); close(); });
  box.querySelector('[data-dj-save]').addEventListener('click', function () { save(sw.checked && !gpc ? 'granted' : 'denied'); close(); });
  document.querySelectorAll('[data-dj-cookie-settings]').forEach(function (b) {
    b.addEventListener('click', function () { open(true); });
  });
  window.addEventListener('storage', function (e) { if (e.key === KEY || e.key === null) apply(); });

  var s = stored();
  if (!gpc && (!s || s.stale)) open(false);
})();
