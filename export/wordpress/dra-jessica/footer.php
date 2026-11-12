<?php defined( 'ABSPATH' ) || exit; ?>
<footer class="dj-footer">
	<div class="dj-container dj-footer__grid">
		<div>
			<p class="dj-footer__name"><?php echo esc_html( dj_get( 'footer_name' ) ); ?></p>
			<p><?php echo esc_html( dj_get( 'footer_roles' ) ); ?></p>
			<p><?php echo esc_html( dj_get( 'footer_registro' ) ); ?></p>
		</div>
		<div>
			<p class="dj-footer__title">Atendimento</p>
			<p><?php echo esc_html( dj_get( 'city' ) ); ?></p>
			<p><?php echo esc_html( dj_get( 'footer_tagline' ) ); ?></p>
		</div>
		<div>
			<p class="dj-footer__title">Contato</p>
			<a href="<?php echo esc_url( dj_wa_link( dj_get( 'wa_msg_geral' ) ) ); ?>" target="_blank" rel="noopener noreferrer"><?php echo dj_icon( 'message-circle' ); // phpcs:ignore ?> <?php echo esc_html( dj_get( 'phone_display' ) ); ?></a>
			<a href="<?php echo esc_url( dj_get( 'instagram_url' ) ); ?>" target="_blank" rel="noopener noreferrer"><?php echo dj_icon( 'instagram' ); // phpcs:ignore ?> <?php echo esc_html( dj_get( 'instagram_handle' ) ); ?></a>
			<a href="<?php echo esc_url( 'mailto:' . dj_get( 'email' ) ); ?>"><?php echo dj_icon( 'mail' ); // phpcs:ignore ?> <?php echo esc_html( dj_get( 'email' ) ); ?></a>
		</div>
	</div>
	<div class="dj-footer__bottom">
		© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( dj_get( 'footer_name' ) ); ?> · <?php echo esc_html( dj_get( 'footer_note' ) ); ?>
	</div>
</footer>
<a class="dj-wa-float" href="<?php echo esc_url( dj_wa_link( dj_get( 'wa_msg_agendar' ) ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Falar no WhatsApp com a Dra. Jéssica">
	<?php echo dj_icon( 'message-circle' ); // phpcs:ignore ?> WhatsApp
</a>
<?php wp_footer(); ?>
</body>
</html>
