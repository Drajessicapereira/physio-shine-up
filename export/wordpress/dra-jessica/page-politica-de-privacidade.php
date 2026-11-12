<?php
/** Política de Privacidade (texto do tema, com os dados do Personalizador). */
defined( 'ABSPATH' ) || exit;
get_header();
$dj_nome  = dj_get( 'footer_name' );
$dj_email = dj_get( 'email' );
?>
<main id="conteudo" class="dj-container dj-page">
	<article>
		<h1>Política de Privacidade</h1>
		<div class="dj-prose">
			<p>Esta política explica como o site de <?php echo esc_html( $dj_nome ); ?> trata informações de quem o visita, de acordo com a Lei Geral de Proteção de Dados (Lei nº 13.709/2018 — LGPD).</p>

			<h2>Quem é responsável</h2>
			<p><?php echo esc_html( $dj_nome ); ?>, fisioterapeuta, com atendimento domiciliar em <?php echo esc_html( dj_get( 'city' ) ); ?>. Contato: <a href="<?php echo esc_url( 'mailto:' . $dj_email ); ?>"><?php echo esc_html( $dj_email ); ?></a>.</p>

			<h2>Formulário e WhatsApp</h2>
			<p>O formulário "Agende sua avaliação" não guarda nada neste site. Ao enviar, ele apenas abre o WhatsApp com a mensagem pronta (nome, para quem é o atendimento e o motivo). A conversa acontece no WhatsApp, serviço da Meta, que segue a própria política de privacidade. As informações que você enviar por lá são usadas somente para responder e organizar o seu atendimento.</p>

			<h2>Cookies</h2>
			<ul>
				<li><strong>Necessários:</strong> guardam no seu navegador a sua escolha sobre cookies. Sempre ativos.</li>
				<li><strong>Publicidade (Google Ads):</strong> só são usados se você aceitar no aviso de cookies. Servem para saber quantas visitas e quantos cliques no WhatsApp vieram dos anúncios do Google. O Google recebe dados como as páginas vistas, o clique, o navegador e um identificador do anúncio. Veja <a href="https://business.safety.google/privacy/" target="_blank" rel="noopener noreferrer">como o Google usa esses dados</a>.</li>
			</ul>
			<p>Sem a sua aceitação, a tag do Google não é carregada. Você pode mudar sua escolha quando quiser em <button type="button" class="dj-linkbtn" data-dj-cookie-settings>Configurações de cookies</button>. Se o seu navegador enviar o sinal Global Privacy Control, a publicidade fica desligada.</p>

			<h2>Links externos</h2>
			<p>Os links para Instagram, WhatsApp, Google e e-mail levam a serviços de outras empresas, com políticas próprias.</p>

			<h2>Seus direitos</h2>
			<p>Você pode pedir acesso, correção ou exclusão dos seus dados, e tirar dúvidas sobre esta política, pelo e-mail <a href="<?php echo esc_url( 'mailto:' . $dj_email ); ?>"><?php echo esc_html( $dj_email ); ?></a>.</p>

			<p><em>Última atualização: <?php echo esc_html( date_i18n( 'd/m/Y', filemtime( __FILE__ ) ) ); ?>.</em></p>
		</div>
	</article>
</main>
<?php
get_footer();
