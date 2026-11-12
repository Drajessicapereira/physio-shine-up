/* Menu móvel, dúvidas, vídeo automático e formulário do WhatsApp. */
(function () {
  'use strict';

  // Menu do celular.
  var btn = document.querySelector('.dj-menu-btn');
  var nav = document.getElementById('dj-mobile-nav');
  if (btn && nav) {
    var setOpen = function (open) {
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
      btn.setAttribute('aria-label', open ? 'Fechar menu' : 'Abrir menu');
      nav.hidden = !open;
    };
    btn.addEventListener('click', function () {
      setOpen(btn.getAttribute('aria-expanded') !== 'true');
    });
    nav.addEventListener('click', function (e) {
      if (e.target.closest('a')) setOpen(false);
    });
  }

  // Dúvidas frequentes: uma aberta por vez.
  var faqBtns = document.querySelectorAll('.dj-faq__btn');
  faqBtns.forEach(function (b) {
    b.addEventListener('click', function () {
      var open = b.getAttribute('aria-expanded') === 'true';
      faqBtns.forEach(function (o) {
        o.setAttribute('aria-expanded', 'false');
        document.getElementById(o.getAttribute('aria-controls')).hidden = true;
      });
      if (!open) {
        b.setAttribute('aria-expanded', 'true');
        document.getElementById(b.getAttribute('aria-controls')).hidden = false;
      }
    });
  });

  // Vídeo: toca sem som ao aparecer na tela e pausa ao sair.
  var video = document.querySelector('video[data-autoplay]');
  if (video && 'IntersectionObserver' in window) {
    video.muted = true;
    new IntersectionObserver(function (entries) {
      var entry = entries[0];
      if (entry.isIntersecting) {
        var p = video.play();
        if (p && p.catch) p.catch(function () {});
      } else {
        video.pause();
      }
    }, { threshold: 0.5 }).observe(video);
  }

  // Formulário: abre o WhatsApp com a mensagem pronta (nada é salvo no site).
  var form = document.querySelector('.dj-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var nome = form.nome.value.trim();
      var para = form.para.value;
      var motivo = form.motivo.value.trim();
      var texto = 'Olá, Dra. Jéssica! Meu nome é ' + (nome || '(nome)') +
        '. Gostaria de agendar uma avaliação de fisioterapia domiciliar' +
        (para ? ' para ' + para : '') + '.' + (motivo ? ' Motivo: ' + motivo + '.' : '');
      var url = 'https://wa.me/' + form.getAttribute('data-wa') + '?text=' + encodeURIComponent(texto);
      window.open(url, '_blank', 'noopener,noreferrer');
    });
  }
})();
