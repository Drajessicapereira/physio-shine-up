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
		<p class="dj-footer__links"><a href="<?php echo esc_url( dj_privacy_url() ); ?>">Política de privacidade</a> · <button type="button" class="dj-linkbtn" data-dj-cookie-settings>Configurações de cookies</button></p>
	</div>
</footer>
<a class="dj-wa-float" href="<?php echo esc_url( dj_wa_link( dj_get( 'wa_msg_agendar' ) ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="Falar no WhatsApp com a Dra. Jéssica">
	<?php echo dj_icon( 'message-circle' ); // phpcs:ignore ?> WhatsApp
</a>
<div class="dj-cookie" id="dj-cookie" role="region" aria-label="Aviso de cookies" tabindex="-1" hidden>
	<div class="dj-cookie__main">
		<p class="dj-cookie__title">Sua privacidade</p>
		<p>Usamos cookies necessários para o site funcionar. Se você aceitar, também usamos cookies de publicidade para medir os resultados dos nossos anúncios, como os contatos pelo WhatsApp. Saiba mais na <a href="<?php echo esc_url( dj_privacy_url() ); ?>">Política de privacidade</a>.</p>
		<div class="dj-cookie__actions">
			<button type="button" class="dj-btn dj-btn--primary dj-btn--sm" data-dj-accept>Aceitar todos</button>
			<button type="button" class="dj-btn dj-btn--primary dj-btn--sm" data-dj-reject>Rejeitar todos</button>
			<button type="button" class="dj-linkbtn" data-dj-cookie-settings>Configurações de cookies</button>
		</div>
	</div>
	<div class="dj-cookie__settings" hidden>
		<p class="dj-cookie__title">Configurações de cookies</p>
		<p class="dj-cookie__gpc" hidden>Seu navegador envia um sinal de privacidade (Global Privacy Control). Por isso, a publicidade fica desligada.</p>
		<div class="dj-cookie__row"><div><strong>Necessários</strong><br><span>Guardam sua escolha sobre cookies. Sempre ativos.</span></div><span class="dj-cookie__always">Sempre ativos</span></div>
		<label class="dj-cookie__row"><div><strong>Publicidade, fornecida pelo Google</strong><br><span>Mede visitas e contatos vindos dos anúncios do Google Ads.</span></div><input type="checkbox" class="dj-switch" data-dj-ads-switch></label>
		<div class="dj-cookie__actions"><button type="button" class="dj-btn dj-btn--primary dj-btn--sm" data-dj-save>Salvar escolhas</button></div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
