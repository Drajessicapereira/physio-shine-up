<?php
/**
 * Aparência > Personalizar > Conteúdo do site.
 */
defined( 'ABSPATH' ) || exit;

function dj_customizer_sections() {
	return array(
		'dj_contato_dados' => array( 'Contato, WhatsApp e Google', array(
			'whatsapp_number' => array( 'WhatsApp (só números, com 55 e DDD)', 'text' ),
			'phone_display' => array( 'Telefone exibido', 'text' ),
			'email' => array( 'E-mail', 'email' ),
			'instagram_url' => array( 'Link do Instagram', 'url' ),
			'instagram_handle' => array( 'Nome do Instagram exibido', 'text' ),
			'city' => array( 'Cidade/região atendida', 'text' ),
			'wa_msg_agendar' => array( 'Mensagem do botão "Agendar"', 'textarea' ),
			'wa_msg_profissional' => array( 'Mensagem do botão "Sou profissional da saúde"', 'textarea' ),
			'wa_msg_geral' => array( 'Mensagem do telefone e rodapé', 'text' ),
			'google_profile' => array( 'Link do perfil no Google', 'url' ),
			'google_rating' => array( 'Nota no Google (ex.: 5)', 'text' ),
			'google_review_count' => array( 'Quantidade de avaliações no Google', 'text' ),
		) ),
		'dj_seo' => array( 'SEO e Google Ads', array(
			'seo_title' => array( 'Título na aba e no Google', 'text' ),
			'seo_description' => array( 'Descrição no Google', 'textarea' ),
			'gsc_verification' => array( 'Código de verificação do Google Search Console', 'text' ),
			'google_ads_id' => array( 'ID da tag do Google Ads (ex.: AW-18294774608)', 'text' ),
		) ),
		'dj_hero' => array( 'Início', array(
			'hero_title' => array( 'Título principal', 'textarea' ),
			'hero_text' => array( 'Texto de apresentação', 'textarea' ),
			'hero_cta' => array( 'Botão principal', 'text' ),
			'hero_cta2' => array( 'Botão secundário', 'text' ),
			'hero_badges' => array( 'Destaques (Texto | ícone, um por linha)', 'textarea' ),
			'hero_image' => array( 'Foto principal', 'image' ),
			'hero_image_alt' => array( 'Descrição da foto (acessibilidade)', 'text' ),
		) ),
		'dj_sobre' => array( 'Conheça a Dra. Jéssica', array(
			'sobre_title' => array( 'Título', 'text' ),
			'sobre_p1' => array( 'Primeiro parágrafo', 'textarea' ),
			'sobre_p2' => array( 'Segundo parágrafo', 'textarea' ),
			'sobre_video' => array( 'Vídeo (MP4)', 'video' ),
			'sobre_formacao' => array( 'Formação (uma por linha)', 'textarea' ),
			'sobre_compromisso' => array( 'Frase de compromisso', 'textarea' ),
		) ),
		'dj_servicos' => array( 'Áreas de atuação', array(
			'servicos_title' => array( 'Título', 'text' ),
			'servicos_intro' => array( 'Introdução', 'textarea' ),
			'servicos_list' => array( 'Serviços (Título | Texto | ícone, um por linha)', 'textarea' ),
		) ),
		'dj_como' => array( 'Como funciona', array(
			'como_title' => array( 'Título', 'text' ),
			'como_intro' => array( 'Introdução', 'textarea' ),
			'como_list' => array( 'Etapas (Título | Texto | ícone, uma por linha)', 'textarea' ),
		) ),
		'dj_beneficios' => array( 'Benefícios', array(
			'beneficios_title' => array( 'Título', 'text' ),
			'beneficios_list' => array( 'Benefícios (Texto | ícone, um por linha)', 'textarea' ),
		) ),
		'dj_resultados' => array( 'Resultados: antes e depois', array(
			'resultados_title' => array( 'Título', 'text' ),
			'resultados_intro' => array( 'Introdução', 'textarea' ),
			'resultados_case' => array( 'Nome do caso', 'text' ),
			'antes_image' => array( 'Foto "antes"', 'image' ),
			'antes_caption' => array( 'Legenda "antes"', 'text' ),
			'antes_alt' => array( 'Descrição da foto "antes"', 'text' ),
			'depois_image' => array( 'Foto "depois"', 'image' ),
			'depois_caption' => array( 'Legenda "depois"', 'text' ),
			'depois_alt' => array( 'Descrição da foto "depois"', 'text' ),
			'resultados_steps' => array( 'Etapas (Título | Texto, uma por linha)', 'textarea' ),
			'resultados_note' => array( 'Observação', 'textarea' ),
		) ),
		'dj_depo' => array( 'Avaliações', array(
			'depo_title' => array( 'Título', 'text' ),
			'depo_intro' => array( 'Introdução', 'textarea' ),
			'depo_list' => array( 'Avaliações (Nome | Data de publicação | Texto, uma por linha)', 'textarea' ),
		) ),
		'dj_prof' => array( 'Profissionais da saúde', array(
			'prof_title' => array( 'Título', 'text' ),
			'prof_text' => array( 'Texto', 'textarea' ),
			'prof_cta' => array( 'Botão', 'text' ),
		) ),
		'dj_faq' => array( 'Dúvidas frequentes', array(
			'faq_title' => array( 'Título', 'text' ),
			'faq_list' => array( 'Dúvidas (Pergunta | Resposta, uma por linha)', 'textarea' ),
		) ),
		'dj_contato' => array( 'Agende sua avaliação', array(
			'contato_title' => array( 'Título', 'text' ),
			'contato_text' => array( 'Texto', 'textarea' ),
			'form_options' => array( 'Opções de "Atendimento para" (Opção | texto na mensagem)', 'textarea' ),
			'form_note' => array( 'Aviso abaixo do botão', 'textarea' ),
		) ),
		'dj_footer' => array( 'Rodapé', array(
			'footer_name' => array( 'Nome', 'text' ),
			'footer_roles' => array( 'Profissões', 'text' ),
			'footer_registro' => array( 'Registros profissionais', 'text' ),
			'footer_tagline' => array( 'Frase de atendimento', 'text' ),
			'footer_note' => array( 'Aviso final', 'text' ),
		) ),
	);
}

add_action( 'customize_register', function ( $wp_customize ) {
	$defaults = dj_defaults();
	$wp_customize->add_panel( 'dj_conteudo', array(
		'title'    => 'Conteúdo do site',
		'priority' => 20,
	) );
	$priority = 1;
	foreach ( dj_customizer_sections() as $section_id => $section ) {
		$wp_customize->add_section( $section_id, array(
			'title'    => $section[0],
			'panel'    => 'dj_conteudo',
			'priority' => $priority++,
		) );
		foreach ( $section[1] as $key => $field ) {
			list( $label, $type ) = $field;
			$sanitize = 'sanitize_text_field';
			if ( 'textarea' === $type ) {
				$sanitize = 'sanitize_textarea_field';
			} elseif ( in_array( $type, array( 'url', 'image', 'video' ), true ) ) {
				$sanitize = 'esc_url_raw';
			} elseif ( 'email' === $type ) {
				$sanitize = 'sanitize_email';
			}
			$wp_customize->add_setting( $key, array(
				'default'           => in_array( $type, array( 'image', 'video' ), true ) ? '' : ( isset( $defaults[ $key ] ) ? $defaults[ $key ] : '' ),
				'sanitize_callback' => $sanitize,
				'transport'         => 'refresh',
			) );
			$args = array( 'label' => $label, 'section' => $section_id );
			if ( 'image' === $type ) {
				$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $key, $args + array( 'description' => 'Deixe vazio para usar a foto que já vem no tema.' ) ) );
			} elseif ( 'video' === $type ) {
				$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, $key, $args + array( 'mime_type' => 'video', 'description' => 'Deixe vazio para usar o vídeo que já vem no tema.' ) ) );
			} else {
				$wp_customize->add_control( $key, $args + array( 'type' => $type ) );
			}
		}
	}
} );
