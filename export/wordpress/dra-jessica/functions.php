<?php
/**
 * Tema Dra. Jéssica Macedo Pereira — Fisioterapia Domiciliar.
 * Tema WordPress nativo: PHP, Personalizador e arquivos locais.
 */
defined( 'ABSPATH' ) || exit;

define( 'DJ_VERSION', '1.1.0' );

require_once get_template_directory() . '/inc/defaults.php';
require_once get_template_directory() . '/inc/icons.php';
require_once get_template_directory() . '/inc/customizer.php';

/* ---------- Ajudantes ---------- */

/** Valor de um campo do Personalizador, com o padrão do tema. */
function dj_get( $key ) {
	$defaults = dj_defaults();
	$default  = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
	$value    = get_theme_mod( $key, $default );
	return ( '' === $value || null === $value ) ? $default : $value;
}

/** Lista "campo | campo" (uma linha por item) em array. */
function dj_list( $key ) {
	$items = array();
	foreach ( preg_split( '/\r\n|\r|\n/', (string) dj_get( $key ) ) as $line ) {
		$line = trim( $line );
		if ( '' === $line ) {
			continue;
		}
		$items[] = array_map( 'trim', explode( '|', $line ) );
	}
	return $items;
}

function dj_icon( $name ) {
	$icons = dj_icons();
	return isset( $icons[ $name ] ) ? $icons[ $name ] : $icons['heart'];
}

function dj_asset( $path ) {
	return get_template_directory_uri() . '/assets/' . ltrim( $path, '/' );
}

/** URL de mídia: a enviada pelo Personalizador ou a do tema. */
function dj_media( $key, $fallback ) {
	$value = get_theme_mod( $key, '' );
	return $value ? $value : dj_asset( $fallback );
}

function dj_wa_link( $text ) {
	$number = preg_replace( '/\D/', '', dj_get( 'whatsapp_number' ) );
	return 'https://wa.me/' . $number . '?text=' . rawurlencode( $text );
}

/* ---------- Configuração ---------- */

add_action( 'after_setup_theme', function () {
	load_theme_textdomain( 'dra-jessica', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'script', 'style', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
} );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'dj-fonts', dj_asset( 'css/fonts.css' ), array(), DJ_VERSION );
	wp_enqueue_style( 'dj-main', dj_asset( 'css/main.css' ), array( 'dj-fonts' ), DJ_VERSION );
	wp_enqueue_script( 'dj-consent', dj_asset( 'js/consent.js' ), array(), DJ_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	wp_enqueue_script( 'dj-main', dj_asset( 'js/main.js' ), array( 'dj-consent' ), DJ_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
} );

// Remove extras que o site não usa (deixa a página mais leve).
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_generator' );
add_action( 'wp_enqueue_scripts', function () {
	if ( is_front_page() ) {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'global-styles' );
		wp_dequeue_style( 'classic-theme-styles' );
	}
}, 100 );

/* ---------- Título e SEO ---------- */

add_filter( 'pre_get_document_title', function ( $title ) {
	return is_front_page() ? dj_get( 'seo_title' ) : $title;
} );

add_action( 'wp_head', function () {
	echo '<link rel="icon" href="' . esc_url( dj_asset( 'images/favicon.png' ) ) . '" type="image/png">' . "\n";
	echo '<link rel="preload" href="' . esc_url( dj_asset( 'fonts/fraunces.woff2' ) ) . '" as="font" type="font/woff2" crossorigin>' . "\n";

	$gsc = dj_get( 'gsc_verification' );
	if ( $gsc ) {
		echo '<meta name="google-site-verification" content="' . esc_attr( $gsc ) . '">' . "\n";
	}
	if ( ! is_front_page() ) {
		return;
	}
	$title = dj_get( 'seo_title' );
	$desc  = dj_get( 'seo_description' );
	$url   = home_url( '/' );
	$img   = dj_media( 'hero_image', 'images/jessica-faixa.jpeg' );
	$meta  = array(
		array( 'name', 'description', $desc ),
		array( 'name', 'author', dj_get( 'footer_name' ) ),
		array( 'property', 'og:site_name', dj_get( 'footer_name' ) . ' — Fisioterapia Domiciliar' ),
		array( 'property', 'og:title', $title ),
		array( 'property', 'og:description', $desc ),
		array( 'property', 'og:type', 'website' ),
		array( 'property', 'og:url', $url ),
		array( 'property', 'og:locale', 'pt_BR' ),
		array( 'property', 'og:image', $img ),
		array( 'name', 'twitter:card', 'summary_large_image' ),
		array( 'name', 'twitter:title', $title ),
		array( 'name', 'twitter:description', $desc ),
		array( 'name', 'twitter:image', $img ),
	);
	foreach ( $meta as $m ) {
		printf( '<meta %s="%s" content="%s">' . "\n", $m[0], esc_attr( $m[1] ), esc_attr( $m[2] ) );
	}
	echo '<link rel="canonical" href="' . esc_url( $url ) . '">' . "\n";

	$services = array();
	foreach ( dj_list( 'servicos_list' ) as $s ) {
		$services[] = array( '@type' => 'MedicalTherapy', 'name' => $s[0] );
	}
	$schema = array(
		'@context'          => 'https://schema.org',
		'@type'             => 'MedicalBusiness',
		'@id'               => $url . '#business',
		'name'              => dj_get( 'footer_name' ) . ' — Fisioterapia Domiciliar',
		'url'               => $url,
		'description'       => $desc,
		'image'             => $img,
		'telephone'         => '+' . preg_replace( '/\D/', '', dj_get( 'whatsapp_number' ) ),
		'email'             => dj_get( 'email' ),
		'sameAs'            => array( dj_get( 'instagram_url' ) ),
		'medicalSpecialty'  => 'Physiotherapy',
		'aggregateRating'   => array(
			'@type'       => 'AggregateRating',
			'ratingValue' => (float) dj_get( 'google_rating' ),
			'reviewCount' => (int) dj_get( 'google_review_count' ),
			'bestRating'  => 5,
			'worstRating' => 1,
		),
		'areaServed'        => array(
			array( '@type' => 'City', 'name' => 'Hortolândia' ),
			array( '@type' => 'AdministrativeArea', 'name' => 'Região Metropolitana de Campinas' ),
		),
		'address'           => array(
			'@type'           => 'PostalAddress',
			'addressLocality' => 'Hortolândia',
			'addressRegion'   => 'SP',
			'addressCountry'  => 'BR',
		),
		'availableService'  => $services,
		'founder'           => array( '@type' => 'Person', 'name' => 'Jéssica Macedo Pereira', 'jobTitle' => 'Fisioterapeuta' ),
	);
	$faq = array( '@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => array() );
	foreach ( dj_list( 'faq_list' ) as $f ) {
		if ( count( $f ) < 2 ) {
			continue;
		}
		$faq['mainEntity'][] = array(
			'@type'          => 'Question',
			'name'           => $f[0],
			'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $f[1] ),
		);
	}
	$flags = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG;
	echo '<script type="application/ld+json">' . wp_json_encode( $schema, $flags ) . "</script>\n";
	echo '<script type="application/ld+json">' . wp_json_encode( $faq, $flags ) . "</script>\n";
}, 1 );

/** Endereço da Política de Privacidade (página criada pelo tema). */
function dj_privacy_url() {
	$id = (int) get_option( 'wp_page_for_privacy_policy' );
	if ( $id && 'publish' === get_post_status( $id ) ) {
		return get_permalink( $id );
	}
	return home_url( '/politica-de-privacidade/' );
}

/** Cria a página "Política de Privacidade" uma vez (o texto vem do tema). */
function dj_ensure_privacy_page() {
	$page = get_page_by_path( 'politica-de-privacidade' );
	if ( ! $page ) {
		$id = wp_insert_post( array(
			'post_title'   => 'Política de Privacidade',
			'post_name'    => 'politica-de-privacidade',
			'post_status'  => 'publish',
			'post_type'    => 'page',
			'post_content' => '',
		) );
	} else {
		$id = $page->ID;
	}
	if ( $id && ! is_wp_error( $id ) ) {
		update_option( 'wp_page_for_privacy_policy', (int) $id );
	}
	update_option( 'dj_privacy_page_v', 1 );
}
add_action( 'after_switch_theme', 'dj_ensure_privacy_page' );
add_action( 'init', function () {
	if ( ! get_option( 'dj_privacy_page_v' ) ) {
		dj_ensure_privacy_page();
	}
} );

/**
 * Tag do Google com consentimento: tudo começa negado e o gtag.js só é
 * carregado depois que o visitante aceita publicidade no aviso de cookies.
 */
function dj_google_tag() {
	$id = trim( dj_get( 'google_ads_id' ) );
	if ( ! $id || ! preg_match( '/^[A-Z]{1,3}-[A-Z0-9]+$/', $id ) ) {
		return;
	}
	$label = trim( (string) dj_get( 'google_ads_wa_label' ) );
	if ( ! preg_match( '/^[A-Za-z0-9_-]+$/', $label ) ) {
		$label = '';
	}
	$cfg = array( 'id' => $id, 'waLabel' => $label );
	?>
<script>
window.djAds = <?php echo wp_json_encode( $cfg ); ?>;
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('consent', 'default', { ad_storage: 'denied', ad_user_data: 'denied', ad_personalization: 'denied' });
(function () {
  var ok = false;
  try {
    var s = JSON.parse(localStorage.getItem('cookie_consent_advertising') || 'null');
    ok = !!(s && s.choice === 'granted' && Date.now() - s.at < 365 * 86400000);
  } catch (e) {}
  if (navigator.globalPrivacyControl === true) ok = false;
  window.djAdsGranted = ok;
  if (ok) {
    gtag('consent', 'update', { ad_storage: 'granted', ad_user_data: 'granted', ad_personalization: 'granted' });
    var t = document.createElement('script');
    t.async = true;
    t.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(window.djAds.id);
    document.head.appendChild(t);
    window.djAdsLoaded = true;
  }
})();
gtag('set', 'developer_id.dZjgwMW', true);
gtag('js', new Date());
gtag('config', '<?php echo esc_js( $id ); ?>');
</script>
	<?php
}
