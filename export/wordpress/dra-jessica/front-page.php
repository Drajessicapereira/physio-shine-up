<?php
/** Página inicial: todas as seções vêm do Personalizador (inc/defaults.php). */
defined( 'ABSPATH' ) || exit;
get_header();

$wa_agendar = dj_wa_link( dj_get( 'wa_msg_agendar' ) );
$wa_prof    = dj_wa_link( dj_get( 'wa_msg_profissional' ) );
$rating     = (float) str_replace( ',', '.', dj_get( 'google_rating' ) );
$stars      = str_repeat( dj_icon( 'star' ), 5 );
?>
<main id="conteudo">

<section id="inicio" class="dj-tint">
	<div class="dj-container dj-hero">
		<div>
			<p class="dj-pill"><?php echo dj_icon( 'map-pin' ); // phpcs:ignore ?> <?php echo esc_html( dj_get( 'city' ) ); ?></p>
			<h1><?php echo esc_html( dj_get( 'hero_title' ) ); ?></h1>
			<p class="dj-lead"><?php echo esc_html( dj_get( 'hero_text' ) ); ?></p>
			<div class="dj-actions">
				<a class="dj-btn dj-btn--primary" href="<?php echo esc_url( $wa_agendar ); ?>" target="_blank" rel="noopener noreferrer"><?php echo dj_icon( 'message-circle' ); // phpcs:ignore ?> <?php echo esc_html( dj_get( 'hero_cta' ) ); ?></a>
				<a class="dj-btn dj-btn--outline" href="<?php echo esc_url( $wa_prof ); ?>" target="_blank" rel="noopener noreferrer"><?php echo dj_icon( 'stethoscope' ); // phpcs:ignore ?> <?php echo esc_html( dj_get( 'hero_cta2' ) ); ?></a>
			</div>
			<ul class="dj-badges">
				<?php foreach ( dj_list( 'hero_badges' ) as $b ) : ?>
					<li><?php echo dj_icon( isset( $b[1] ) ? $b[1] : 'heart' ); // phpcs:ignore ?> <?php echo esc_html( $b[0] ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div>
			<img class="dj-hero__img" src="<?php echo esc_url( dj_media( 'hero_image', 'images/jessica-faixa.jpeg' ) ); ?>" width="1200" height="1500" alt="<?php echo esc_attr( dj_get( 'hero_image_alt' ) ); ?>" fetchpriority="high">
		</div>
	</div>
</section>

<section id="sobre" class="dj-container dj-section">
	<h2><?php echo esc_html( dj_get( 'sobre_title' ) ); ?></h2>
	<div class="dj-sobre__text">
		<p><?php echo esc_html( dj_get( 'sobre_p1' ) ); ?></p>
		<p><?php echo esc_html( dj_get( 'sobre_p2' ) ); ?></p>
	</div>
	<video class="dj-video" src="<?php echo esc_url( dj_media( 'sobre_video', 'video/bandagem-funcional.mp4' ) ); ?>" poster="<?php echo esc_url( dj_asset( 'images/bandagem-funcional-poster.jpg' ) ); ?>" controls playsinline muted preload="metadata" aria-label="Vídeo da Dra. Jéssica apresentando seu trabalho" data-autoplay></video>
	<div class="dj-grid dj-grid--2 dj-mt">
		<div class="dj-card">
			<h3 class="dj-card__title"><?php echo dj_icon( 'graduation-cap' ); // phpcs:ignore ?> Formação e especializações</h3>
			<ul class="dj-bullets">
				<?php foreach ( dj_list( 'sobre_formacao' ) as $f ) : ?>
					<li><?php echo esc_html( $f[0] ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="dj-card">
			<h3 class="dj-card__title"><?php echo dj_icon( 'heart-handshake' ); // phpcs:ignore ?> Compromisso com o cuidado</h3>
			<blockquote class="dj-quote">“<?php echo esc_html( dj_get( 'sobre_compromisso' ) ); ?>”</blockquote>
		</div>
	</div>
</section>

<section id="servicos" class="dj-tint">
	<div class="dj-container dj-section">
		<h2><?php echo esc_html( dj_get( 'servicos_title' ) ); ?></h2>
		<p class="dj-intro"><?php echo esc_html( dj_get( 'servicos_intro' ) ); ?></p>
		<ul class="dj-grid dj-grid--3 dj-mt">
			<?php foreach ( dj_list( 'servicos_list' ) as $s ) : ?>
				<li class="dj-card">
					<span class="dj-icon-box"><?php echo dj_icon( isset( $s[2] ) ? $s[2] : 'heart' ); // phpcs:ignore ?></span>
					<h3><?php echo esc_html( $s[0] ); ?></h3>
					<p><?php echo esc_html( isset( $s[1] ) ? $s[1] : '' ); ?></p>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

<section id="como-funciona" class="dj-container dj-section">
	<h2><?php echo esc_html( dj_get( 'como_title' ) ); ?></h2>
	<p class="dj-intro"><?php echo esc_html( dj_get( 'como_intro' ) ); ?></p>
	<ol class="dj-grid dj-grid--3 dj-mt dj-steps">
		<?php $n = 1; foreach ( dj_list( 'como_list' ) as $c ) : ?>
			<li class="dj-card">
				<div class="dj-step__head">
					<span class="dj-icon-box"><?php echo dj_icon( isset( $c[2] ) ? $c[2] : 'heart' ); // phpcs:ignore ?></span>
					<span class="dj-step__num"><?php echo esc_html( sprintf( '%02d', $n++ ) ); ?></span>
				</div>
				<h3><?php echo esc_html( $c[0] ); ?></h3>
				<p><?php echo esc_html( isset( $c[1] ) ? $c[1] : '' ); ?></p>
			</li>
		<?php endforeach; ?>
	</ol>
</section>

<section id="beneficios" class="dj-container dj-section dj-section--tight">
	<div>
		<h2><?php echo esc_html( dj_get( 'beneficios_title' ) ); ?></h2>
		<ul class="dj-grid dj-grid--3 dj-mt dj-benefits">
			<?php foreach ( dj_list( 'beneficios_list' ) as $b ) : ?>
				<li><?php echo dj_icon( isset( $b[1] ) ? $b[1] : 'heart' ); // phpcs:ignore ?> <span><?php echo esc_html( $b[0] ); ?></span></li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

<section id="resultados" class="dj-tint">
	<div class="dj-container dj-section">
		<h2><?php echo esc_html( dj_get( 'resultados_title' ) ); ?></h2>
		<p class="dj-intro"><?php echo esc_html( dj_get( 'resultados_intro' ) ); ?></p>
		<article class="dj-card dj-card--lg dj-mt">
			<h3><?php echo esc_html( dj_get( 'resultados_case' ) ); ?></h3>
			<div class="dj-grid dj-grid--2 dj-mt-sm">
				<figure>
					<img src="<?php echo esc_url( dj_media( 'antes_image', 'images/antes-1.jpeg' ) ); ?>" width="900" height="1200" loading="lazy" alt="<?php echo esc_attr( dj_get( 'antes_alt' ) ); ?>">
					<figcaption><?php echo esc_html( dj_get( 'antes_caption' ) ); ?></figcaption>
				</figure>
				<figure>
					<img src="<?php echo esc_url( dj_media( 'depois_image', 'images/depois-1.jpeg' ) ); ?>" width="900" height="1200" loading="lazy" alt="<?php echo esc_attr( dj_get( 'depois_alt' ) ); ?>">
					<figcaption><?php echo esc_html( dj_get( 'depois_caption' ) ); ?></figcaption>
				</figure>
			</div>
			<dl class="dj-grid dj-grid--3 dj-mt-sm">
				<?php foreach ( dj_list( 'resultados_steps' ) as $r ) : ?>
					<div><dt><?php echo esc_html( $r[0] ); ?></dt><dd><?php echo esc_html( isset( $r[1] ) ? $r[1] : '' ); ?></dd></div>
				<?php endforeach; ?>
			</dl>
			<p class="dj-small dj-mt-sm"><?php echo esc_html( dj_get( 'resultados_note' ) ); ?></p>
		</article>
	</div>
</section>

<section id="depoimentos" class="dj-container dj-section">
	<h2 class="dj-h-icon"><?php echo dj_icon( 'quote' ); // phpcs:ignore ?> <?php echo esc_html( dj_get( 'depo_title' ) ); ?></h2>
	<p class="dj-intro"><?php echo esc_html( dj_get( 'depo_intro' ) ); ?></p>
	<div class="dj-card dj-rating dj-mt">
		<div class="dj-rating__score">
			<p class="dj-rating__value"><?php echo esc_html( number_format( $rating, 1, ',', '' ) ); ?></p>
			<div>
				<div class="dj-stars" role="img" aria-label="<?php echo esc_attr( 'Nota ' . dj_get( 'google_rating' ) . ' de 5 no Google' ); ?>"><?php echo $stars; // phpcs:ignore ?></div>
				<p class="dj-small"><?php echo esc_html( dj_get( 'google_review_count' ) ); ?> avaliações no Google</p>
			</div>
		</div>
		<a class="dj-btn dj-btn--outline" href="<?php echo esc_url( dj_get( 'google_profile' ) ); ?>" target="_blank" rel="noopener noreferrer">Ver avaliações no Google <?php echo dj_icon( 'external-link' ); // phpcs:ignore ?></a>
	</div>
	<ul class="dj-grid dj-grid--3 dj-mt-sm">
		<?php foreach ( dj_list( 'depo_list' ) as $d ) : ?>
			<li class="dj-card dj-review">
				<div class="dj-stars" role="img" aria-label="5 de 5 estrelas"><?php echo $stars; // phpcs:ignore ?></div>
				<blockquote>“<?php echo esc_html( isset( $d[2] ) ? $d[2] : '' ); ?>”</blockquote>
				<p class="dj-review__name"><?php echo esc_html( $d[0] ); ?></p>
				<p class="dj-small">Avaliação no Google<?php echo ! empty( $d[1] ) ? ' · ' . esc_html( $d[1] ) : ''; ?></p>
			</li>
		<?php endforeach; ?>
	</ul>
</section>

<section id="profissionais" class="dj-container dj-section dj-section--tight">
	<div class="dj-card dj-card--lg">
		<h2><?php echo esc_html( dj_get( 'prof_title' ) ); ?></h2>
		<p class="dj-intro"><?php echo esc_html( dj_get( 'prof_text' ) ); ?></p>
		<a class="dj-btn dj-btn--primary dj-mt-sm" href="<?php echo esc_url( $wa_prof ); ?>" target="_blank" rel="noopener noreferrer"><?php echo dj_icon( 'stethoscope' ); // phpcs:ignore ?> <?php echo esc_html( dj_get( 'prof_cta' ) ); ?></a>
	</div>
</section>

<section id="duvidas" class="dj-tint">
	<div class="dj-container dj-container--narrow dj-section">
		<h2><?php echo esc_html( dj_get( 'faq_title' ) ); ?></h2>
		<div class="dj-faq dj-mt-sm">
			<?php $i = 0; foreach ( dj_list( 'faq_list' ) as $f ) : if ( count( $f ) < 2 ) { continue; } $i++; ?>
				<div class="dj-faq__item">
					<h3>
						<button type="button" class="dj-faq__btn" aria-expanded="false" aria-controls="dj-faq-<?php echo (int) $i; ?>" id="dj-faq-b<?php echo (int) $i; ?>">
							<span><?php echo esc_html( $f[0] ); ?></span><?php echo dj_icon( 'chevron-down' ); // phpcs:ignore ?>
						</button>
					</h3>
					<div class="dj-faq__panel" id="dj-faq-<?php echo (int) $i; ?>" role="region" aria-labelledby="dj-faq-b<?php echo (int) $i; ?>" hidden>
						<p><?php echo esc_html( $f[1] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="contato" class="dj-container dj-section">
	<div class="dj-grid dj-grid--2">
		<div>
			<h2><?php echo esc_html( dj_get( 'contato_title' ) ); ?></h2>
			<p class="dj-intro"><?php echo esc_html( dj_get( 'contato_text' ) ); ?></p>
			<ul class="dj-contact">
				<li><?php echo dj_icon( 'phone' ); // phpcs:ignore ?> <a href="<?php echo esc_url( dj_wa_link( dj_get( 'wa_msg_geral' ) ) ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( dj_get( 'phone_display' ) ); ?></a></li>
				<li><?php echo dj_icon( 'instagram' ); // phpcs:ignore ?> <a href="<?php echo esc_url( dj_get( 'instagram_url' ) ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( dj_get( 'instagram_handle' ) ); ?></a></li>
				<li><?php echo dj_icon( 'mail' ); // phpcs:ignore ?> <a href="<?php echo esc_url( 'mailto:' . dj_get( 'email' ) ); ?>"><?php echo esc_html( dj_get( 'email' ) ); ?></a></li>
				<li><?php echo dj_icon( 'map-pin' ); // phpcs:ignore ?> <span><?php echo esc_html( dj_get( 'city' ) ); ?></span></li>
			</ul>
		</div>
		<form class="dj-card dj-card--lg dj-form" data-wa="<?php echo esc_attr( preg_replace( '/\D/', '', dj_get( 'whatsapp_number' ) ) ); ?>">
			<label for="dj-nome">Seu nome</label>
			<input id="dj-nome" name="nome" required placeholder="Maria Silva" autocomplete="name">
			<label for="dj-para">Atendimento para</label>
			<select id="dj-para" name="para">
				<option value="">Selecione</option>
				<?php foreach ( dj_list( 'form_options' ) as $o ) : ?>
					<option value="<?php echo esc_attr( isset( $o[1] ) ? $o[1] : $o[0] ); ?>"><?php echo esc_html( $o[0] ); ?></option>
				<?php endforeach; ?>
			</select>
			<label for="dj-motivo">Como podemos ajudar?</label>
			<textarea id="dj-motivo" name="motivo" rows="3" placeholder="Ex.: recuperação após AVC, dores no joelho, atraso motor..."></textarea>
			<button type="submit" class="dj-btn dj-btn--primary"><?php echo dj_icon( 'message-circle' ); // phpcs:ignore ?> Enviar pelo WhatsApp</button>
			<p class="dj-small"><?php echo esc_html( dj_get( 'form_note' ) ); ?></p>
		</form>
	</div>
</section>

</main>
<?php
get_footer();
