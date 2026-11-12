<?php
/**
 * Conteúdo padrão do site. Tudo aqui pode ser alterado em
 * Aparência > Personalizar > Conteúdo do site, sem mexer no código.
 *
 * Listas usam uma linha por item, com campos separados por " | ".
 */
defined( 'ABSPATH' ) || exit;

function dj_defaults() {
	return array(
		// Contato e perfis.
		'whatsapp_number'     => '5519998900329',
		'phone_display'       => '(19) 99890-0329',
		'email'               => 'fisiojessicamacpereira@gmail.com',
		'instagram_url'       => 'https://www.instagram.com/drajessicapereirafisio',
		'instagram_handle'    => '@drajessicapereirafisio',
		'city'                => 'Hortolândia/SP e região',
		'google_profile'      => 'https://www.google.com/search?kgmid=/g/11zgc_bz98&q=Dra.+Jessica+Pereira+-+Fisioterapeuta+Domiciliar',
		'google_rating'       => '5',
		'google_review_count' => '10',
		'wa_msg_agendar'      => 'Olá, Dra. Jéssica! Gostaria de agendar uma avaliação de fisioterapia domiciliar.',
		'wa_msg_profissional' => 'Olá, Dra. Jéssica. Sou profissional da saúde e gostaria de encaminhar um paciente para avaliação fisioterapêutica domiciliar.',
		'wa_msg_geral'        => 'Olá, Dra. Jéssica!',

		// SEO e Google.
		'seo_title'           => 'Fisioterapia Domiciliar em Hortolândia | Dra. Jéssica Pereira',
		'seo_description'     => 'Fisioterapia domiciliar em Hortolândia/SP para crianças, adultos e idosos: reabilitação motora, neurológica, geriátrica e paralisia de Bell. Agende sua avaliação.',
		'gsc_verification'    => 'hbQVpphGmbH13RB5OHZy9hUZBA0kC0Mg_MHleJcHUXI',
		'google_ads_id'       => 'AW-18294774608',
		'google_ads_wa_label' => '',

		// Início.
		'hero_title'          => 'Fisioterapia domiciliar para crianças, adultos e idosos',
		'hero_text'           => 'Atendimento individualizado na sua casa: mais movimento, mais autonomia e menos deslocamentos. Avaliação funcional e plano de tratamento feitos para o seu caso.',
		'hero_cta'            => 'Agende sua avaliação',
		'hero_cta2'           => 'Sou profissional da saúde',
		'hero_badges'         => "Horários flexíveis | clock\nAtendimento no seu lar | map-pin",
		'hero_image'          => '',
		'hero_image_alt'      => 'Dra. Jéssica Macedo Pereira, fisioterapeuta, durante atendimento domiciliar',

		// Sobre.
		'sobre_title'         => 'Conheça a Dra. Jéssica',
		'sobre_p1'            => 'Fisioterapeuta, educadora física, psicomotricista, especialista em ABA e pós-graduada em Gerontologia. Atende crianças, adultos e idosos em casa, com plano terapêutico individual e cuidado humanizado baseado em evidências científicas.',
		'sobre_p2'            => 'O foco está em prevenir complicações, recuperar a funcionalidade, estimular o desenvolvimento motor e devolver independência — sempre respeitando o ritmo de cada pessoa e com a família participando do processo.',
		'sobre_video'         => '',
		'sobre_formacao'      => "Graduação em Fisioterapia\nGraduação em Educação Física\nPós-graduação em Psicomotricidade\nEspecialização em ABA (Análise do Comportamento Aplicada)\nPós-graduação em Gerontologia",
		'sobre_compromisso'   => 'Meu propósito é oferecer um atendimento de excelência, pautado na humanização, no respeito e na individualidade de cada paciente, contribuindo para mais saúde, funcionalidade, independência e qualidade de vida.',

		// Serviços.
		'servicos_title'      => 'Áreas de atuação',
		'servicos_intro'      => 'Atendimento domiciliar em Hortolândia e região, com plano de tratamento definido após avaliação funcional.',
		'servicos_list'       => "Fisioterapia infantil | Desenvolvimento motor, coordenação, equilíbrio e funcionalidade da criança. | baby\nFisioterapia geriátrica | Prevenção de quedas, mobilidade, fortalecimento e autonomia do idoso. | person-standing\nReabilitação motora | Dores, limitação de movimento, fraqueza muscular e recuperação funcional. | activity\nPsicomotricidade | Coordenação, lateralidade, percepção corporal e planejamento motor. | puzzle\nFisioterapia neurológica | Acompanhamento de alterações neurológicas com foco em independência. | brain\nParalisia de Bell | Reabilitação facial para recuperar movimento, simetria e funcionalidade. | smile\nBandagem funcional | Aplicação de bandagem funcional na gestação, pós-parto e reabilitação ortopédica. | bandage",

		// Como funciona.
		'como_title'          => 'Como funciona o atendimento',
		'como_intro'          => 'Três etapas simples para começar a reabilitação com segurança e sem sair de casa.',
		'como_list'           => "Avaliação funcional em casa | Análise detalhada de mobilidade, força, equilíbrio e histórico de saúde, no conforto do lar do paciente. | clipboard-check\nPlano de tratamento personalizado | Objetivos claros, frequência de sessões e exercícios adaptados à rotina da família e às necessidades do paciente. | file-text\nAcompanhamento da evolução | Reavaliações periódicas para ajustar o plano, documentar a melhora e manter a família e a equipe médica informadas. | trending-up",

		// Benefícios.
		'beneficios_title'    => 'Por que escolher o atendimento em casa?',
		'beneficios_list'     => "Mais conforto e comodidade para o paciente. | home\nAtendimento adaptado à rotina da família. | calendar-check\nMaior segurança para crianças, adultos e idosos. | shield-check\nTratamento individualizado e humanizado. | heart-handshake\nAcompanhamento próximo da família e dos responsáveis. | users\nSem deslocamentos: mais continuidade no tratamento. | car",

		// Resultados.
		'resultados_title'    => 'Resultados: antes e depois',
		'resultados_intro'    => 'Evolução funcional real acompanhada ao longo do processo de reabilitação.',
		'resultados_case'     => 'Caso clínico — Paralisia de Bell',
		'antes_image'         => '',
		'antes_caption'       => 'Antes — 1ª sessão',
		'antes_alt'           => 'Paciente com paralisia de Bell antes do tratamento, com assimetria facial evidente',
		'depois_image'        => '',
		'depois_caption'      => 'Depois — 10ª sessão',
		'depois_alt'          => 'Mesmo paciente após dez sessões de fisioterapia, com maior simetria facial',
		'resultados_steps'    => "Avaliação inicial | Assimetria facial evidente, redução da mobilidade voluntária e dificuldade nos movimentos do lado acometido.\nDurante o tratamento | Melhora progressiva da ativação e do controle da musculatura facial, com exercícios lentos e precisos, evitando compensações.\nResultado — 10ª sessão | Maior controle e amplitude dos movimentos faciais e redução da assimetria, priorizando qualidade em vez de repetições.",
		'resultados_note'     => 'Resultados variam conforme as características e a evolução individual de cada paciente. Imagens de casos clínicos publicadas somente mediante autorização.',

		// Avaliações (cópia verificada do perfil no Google, com a data original de publicação).
		'depo_title'          => 'O que dizem sobre o atendimento',
		'depo_intro'          => 'Avaliações reais de pacientes e familiares publicadas no perfil do Google.',
		'depo_list'           => "Pedro Ferreira | 11/11/2026 | Quero deixar registrada minha enorme satisfação com o trabalho dessa profissional! Ela foi, sem dúvidas, a melhor escolha que eu poderia ter feito para cuidar do meu pai que tem 93 anos. Meu pai sofreu uma queda, já apresentava dificuldades de equilíbrio e também sentia muitas dores relacionadas ao nervo ciático. Isso comprometia sua segurança e sua qualidade de vida. Desde que iniciou o acompanhamento com ela, tivemos uma evolução maravilhosa! Hoje, meu pai não precisa mais andar se apoiando e também não reclama mais das dores no ciático. Além dos excelentes resultados, destaco o profissionalismo, a dedicação, o carinho e a atenção com que ela conduz cada atendimento. É muito gratificante encontrar uma profissional que realmente ama o que faz e se preocupa com a evolução de seus pacientes. Sou imensamente grato por todo o cuidado e por tudo que ela proporcionou ao meu pai. Recomendo de olhos fechados! Uma profissional excepcional!\nMichele Ferreira dos Santos | 04/11/2026 | A Jéssica cuidou dos joelhos da minha mãe, uma profissional super atenciosa, cuidadosa, eficiente, sabe o que faz com muita dedicação. Muito obrigada pelo cuidado e com o zelo, minha mãe está muito melhor. Indico de olhos fechados.\nAlcineia Pereira | 03/11/2026 | Quero deixar aqui o meu agradecimento mais sincero a essa profissional maravilhosa! A dedicação, o carinho e a paciência dela durante todo o meu tratamento foram fundamentais para a minha recuperação. Eu sentia muita dor no joelho e, graças ao cuidado e à competência dela, hoje estou completamente sem dor. Mais do que uma fisioterapeuta incrível, ela se mostrou uma pessoa humana e iluminada. Sou muito grato por toda a ajuda e recomendo o seu trabalho de todo o coração!\nSergio | 03/11/2026 | Excelente profissional! Uma fisioterapeuta extremamente dedicada, atenciosa e cuidadosa. Sempre cuidou de mim e da minha esposa com muito carinho, competência e profissionalismo. Transmite confiança em cada atendimento e demonstra um verdadeiro amor pelo que faz. Super recomendo seu trabalho! Uma profissional que faz a diferença! ❤️\nSergio Pereira | 03/11/2026 | Excelente profissional, recomendo de olhos fechados. Atendimento rápido, tirou todas as minhas dúvidas, além de olha para mim de forma individualizada. Sem dúvidas um dos melhores atendimentos que já tive.\nAdv. Ingrid Reis | 28/10/2026 | A melhor fisioterapeuta de Hortolândia e região... Eu estou gestante e estava com uma dor absurda na lombar, a Dra. Jéssica colocou o Taping em mim e hoje me sinto outra pessoa, recomendo de olhos fechados!!!\nDébora Caroline | 30/06/2026 | Excelente profissional! Muito atenciosa, cuidadosa e extremamente competente. Desde a primeira consulta me senti acolhida e segura. Explica tudo com clareza, respeita o tempo do paciente e demonstra um conhecimento incrível. O atendimento é humanizado e faz toda a diferença no tratamento. Sou muito grata pelo cuidado, dedicação e carinho. Recomendo de olhos fechados!\nLetícia Anitelli | 30/06/2026 | Excelente profissional, muito dedicada e atenciosa com os pacientes! Recomendo de olhos fechados!!!\nMarcos Cesar Severnini | 02/07/2026 | Foi uma experiência muito boa: nunca mais senti aquela dor insuportável na lombar! Recomendo com 5 estrelas!!!\nKhaue Ribeiro | 18/08/2026 | Sem palavras pra agradecer a Dra. Jessica Pereira! Estava com Paralisia de Bell e em 2 semanas de fisioterapia já vi resultado. Com 1 mês estou praticamente 100% recuperado. Profissional excelente, atenciosa e muito competente. Recomendo de olhos fechados p/ quem precisar de fisioterapia em Hortolândia e Região",

		// Profissionais.
		'prof_title'          => 'Parceria com profissionais da saúde',
		'prof_text'           => 'Seu paciente precisa de fisioterapia, mas tem dificuldade para se deslocar até a clínica? Ofereço atendimento domiciliar com avaliação funcional, plano terapêutico personalizado e acompanhamento da evolução — com retorno sobre a evolução funcional sempre que pertinente, facilitando a comunicação entre a equipe de cuidado.',
		'prof_cta'            => 'Encaminhar paciente pelo WhatsApp',

		// Dúvidas.
		'faq_title'           => 'Dúvidas frequentes',
		'faq_list'            => "Quais cidades são atendidas? | Hortolândia/SP e cidades da região. Envie sua localização pelo WhatsApp para confirmar a disponibilidade de agenda.\nComo funciona a primeira consulta? | A primeira visita é uma avaliação funcional: histórico de saúde, exames, testes de mobilidade, força e equilíbrio. A partir disso é definido o plano de tratamento, a frequência das sessões e os objetivos.\nQuanto tempo dura cada sessão? | Em média de 45 a 60 minutos, ajustados à tolerância e aos objetivos do paciente.\nPreciso de pedido médico? | Não é obrigatório. Se você tiver encaminhamento, laudos ou exames, leve-os: eles ajudam a personalizar o tratamento.\nÉ necessário algum equipamento em casa? | Não. Os materiais necessários são levados pela fisioterapeuta. Basta um espaço livre, como a cama ou o chão da sala.\nAtende convênio? | O atendimento é particular, com recibo para solicitar reembolso ao seu plano de saúde, quando previsto em contrato.",

		// Contato.
		'contato_title'       => 'Agende sua avaliação',
		'contato_text'        => 'Resposta pelo WhatsApp em horário comercial. Conte um pouco do caso para agilizar o agendamento.',
		'form_options'        => "Criança | uma criança\nAdulto | um adulto\nIdoso | uma pessoa idosa\nGestante | uma gestante",
		'form_note'           => 'Ao enviar, o WhatsApp abre com a mensagem já preenchida. Nenhum dado é armazenado neste site.',

		// Rodapé.
		'footer_name'         => 'Dra. Jéssica Macedo Pereira',
		'footer_roles'        => 'Fisioterapeuta · Psicomotricista · Educadora Física',
		'footer_registro'     => 'CREFITO 422201-F · CREF 152902-G/SP',
		'footer_tagline'      => 'Fisioterapia domiciliar para crianças, adultos e idosos',
		'footer_note'         => 'Conteúdo informativo — não substitui avaliação profissional.',
	);
}
