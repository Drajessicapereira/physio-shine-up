<?php defined( 'ABSPATH' ) || exit; ?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<?php dj_google_tag(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#5b8a78">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="dj-skip" href="#conteudo">Pular para o conteúdo</a>
<?php
$dj_links = array(
	'#sobre'         => 'Sobre',
	'#servicos'      => 'Serviços',
	'#resultados'    => 'Resultados',
	'#duvidas'       => 'Dúvidas',
	'#profissionais' => 'Profissionais',
	'#contato'       => 'Contato',
);
$dj_home = is_front_page() ? '' : home_url( '/' );
?>
<header class="dj-header">
	<div class="dj-container dj-header__bar">
		<a href="<?php echo esc_url( $dj_home . '#inicio' ); ?>" class="dj-logo">
			<img src="<?php echo esc_url( dj_asset( 'images/logo-jessica.png' ) ); ?>" alt="Logotipo da Dra. Jéssica Macedo Pereira, fisioterapeuta domiciliar" width="160" height="48">
			<span class="dj-sr"><?php echo esc_html( dj_get( 'footer_name' ) ); ?></span>
		</a>
		<nav class="dj-nav" aria-label="Navegação principal">
			<?php foreach ( $dj_links as $href => $label ) : ?>
				<a href="<?php echo esc_url( $dj_home . $href ); ?>"><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
		</nav>
		<div class="dj-header__actions">
			<a class="dj-btn dj-btn--primary dj-btn--sm dj-hide-xs" href="<?php echo esc_url( dj_wa_link( dj_get( 'wa_msg_agendar' ) ) ); ?>" target="_blank" rel="noopener noreferrer">
				<?php echo dj_icon( 'message-circle' ); // phpcs:ignore ?> Agendar avaliação
			</a>
			<button type="button" class="dj-menu-btn" aria-expanded="false" aria-controls="dj-mobile-nav" aria-label="Abrir menu">
				<span class="dj-menu-btn__open"><?php echo dj_icon( 'menu' ); // phpcs:ignore ?></span>
				<span class="dj-menu-btn__close"><?php echo dj_icon( 'x' ); // phpcs:ignore ?></span>
			</button>
		</div>
	</div>
	<nav id="dj-mobile-nav" class="dj-mobile-nav" aria-label="Navegação móvel" hidden>
		<ul class="dj-container">
			<?php foreach ( $dj_links as $href => $label ) : ?>
				<li><a href="<?php echo esc_url( $dj_home . $href ); ?>"><?php echo esc_html( $label ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</nav>
</header>
