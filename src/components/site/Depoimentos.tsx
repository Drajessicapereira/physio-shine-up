import { Star, Quote, ExternalLink } from "lucide-react";

import { GOOGLE_PROFILE, GOOGLE_RATING, GOOGLE_REVIEW_COUNT } from "@/lib/site";

/**
 * Avaliações reais do perfil da empresa no Google.
 * Para adicionar/atualizar, cole aqui o nome e o texto de cada avaliação.
 */
const avaliacoes: { nome: string; texto: string; subtitulo: string; nota?: number }[] = [
  {
    nome: "Pedro Ferreira",
    subtitulo: "Avaliação no Google · 11/11/2026",
    nota: 5,
    texto:
      "Quero deixar registrada minha enorme satisfação com o trabalho dessa profissional! Ela foi, sem dúvidas, a melhor escolha que eu poderia ter feito para cuidar do meu pai que tem 93 anos. Meu pai sofreu uma queda, já apresentava dificuldades de equilíbrio e também sentia muitas dores relacionadas ao nervo ciático. Isso comprometia sua segurança e sua qualidade de vida. Desde que iniciou o acompanhamento com ela, tivemos uma evolução maravilhosa! Hoje, meu pai não precisa mais andar se apoiando e também não reclama mais das dores no ciático. Além dos excelentes resultados, destaco o profissionalismo, a dedicação, o carinho e a atenção com que ela conduz cada atendimento. É muito gratificante encontrar uma profissional que realmente ama o que faz e se preocupa com a evolução de seus pacientes. Sou imensamente grato por todo o cuidado e por tudo que ela proporcionou ao meu pai. Recomendo de olhos fechados! Uma profissional excepcional!",
  },
  {
    nome: "Michele Ferreira dos Santos",
    subtitulo: "Avaliação no Google · 04/11/2026",
    nota: 5,
    texto:
      "A Jéssica cuidou dos joelhos da minha mãe, uma profissional super atenciosa, cuidadosa, eficiente, sabe o que faz com muita dedicação. Muito obrigada pelo cuidado e com o zelo, minha mãe está muito melhor. Indico de olhos fechados.",
  },
  {
    nome: "Alcineia Pereira",
    subtitulo: "Avaliação no Google · 03/11/2026",
    nota: 5,
    texto:
      "Quero deixar aqui o meu agradecimento mais sincero a essa profissional maravilhosa! A dedicação, o carinho e a paciência dela durante todo o meu tratamento foram fundamentais para a minha recuperação. Eu sentia muita dor no joelho e, graças ao cuidado e à competência dela, hoje estou completamente sem dor. Mais do que uma fisioterapeuta incrível, ela se mostrou uma pessoa humana e iluminada. Sou muito grato por toda a ajuda e recomendo o seu trabalho de todo o coração!",
  },
  {
    nome: "Sergio",
    subtitulo: "Avaliação no Google · 03/11/2026",
    nota: 5,
    texto:
      "Excelente profissional! Uma fisioterapeuta extremamente dedicada, atenciosa e cuidadosa. Sempre cuidou de mim e da minha esposa com muito carinho, competência e profissionalismo. Transmite confiança em cada atendimento e demonstra um verdadeiro amor pelo que faz. Super recomendo seu trabalho! Uma profissional que faz a diferença! ❤️",
  },
  {
    nome: "Sergio Pereira",
    subtitulo: "Avaliação no Google · 03/11/2026",
    nota: 5,
    texto:
      "Excelente profissional, recomendo de olhos fechados. Atendimento rápido, tirou todas as minhas dúvidas, além de olha para mim de forma individualizada. Sem dúvidas um dos melhores atendimentos que já tive.",
  },
  {
    nome: "Adv. Ingrid Reis",
    subtitulo: "Avaliação no Google · 28/10/2026",
    nota: 5,
    texto:
      "A melhor fisioterapeuta de Hortolândia e região... Eu estou gestante e estava com uma dor absurda na lombar, a Dra. Jéssica colocou o Taping em mim e hoje me sinto outra pessoa, recomendo de olhos fechados!!!",
  },
  {
    nome: "Débora Caroline",
    subtitulo: "Avaliação no Google · 30/06/2026",
    nota: 5,
    texto:
      "Excelente profissional! Muito atenciosa, cuidadosa e extremamente competente. Desde a primeira consulta me senti acolhida e segura. Explica tudo com clareza, respeita o tempo do paciente e demonstra um conhecimento incrível. O atendimento é humanizado e faz toda a diferença no tratamento. Sou muito grata pelo cuidado, dedicação e carinho. Recomendo de olhos fechados!",
  },
  {
    nome: "Letícia Anitelli",
    subtitulo: "Avaliação no Google · 30/06/2026",
    nota: 5,
    texto:
      "Excelente profissional, muito dedicada e atenciosa com os pacientes! Recomendo de olhos fechados!!!",
  },
  {
    nome: "Marcos Cesar Severnini",
    subtitulo: "Avaliação no Google · 02/07/2026",
    nota: 5,
    texto:
      "Foi uma experiência muito boa: nunca mais senti aquela dor insuportável na lombar! Recomendo com 5 estrelas!!!",
  },
  {
    nome: "Khaue Ribeiro",
    subtitulo: "Avaliação no Google · 18/08/2026",
    nota: 5,
    texto:
      "Sem palavras pra agradecer a Dra. Jessica Pereira! Estava com Paralisia de Bell e em 2 semanas de fisioterapia já vi resultado. Com 1 mês estou praticamente 100% recuperado. Profissional excelente, atenciosa e muito competente. Recomendo de olhos fechados p/ quem precisar de fisioterapia em Hortolândia e Região",
  },
];

export function Depoimentos() {
  return (
    <section id="depoimentos" className="bg-brand-tint">
      <div className="mx-auto max-w-6xl px-4 py-16">
        <div className="flex items-center gap-2">
          <Quote className="h-6 w-6 text-primary" aria-hidden="true" />
          <h2 className="text-2xl text-primary sm:text-3xl">O que dizem sobre o atendimento</h2>
        </div>
        <p className="mt-3 max-w-2xl text-base text-muted-foreground">
          Avaliações reais de pacientes e familiares publicadas no perfil do Google.
        </p>

        <div className="mt-8 flex flex-col gap-4 rounded-2xl border border-border bg-card p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
          <div className="flex items-center gap-4">
            <p className="text-4xl font-semibold text-primary">
              {GOOGLE_RATING.toLocaleString("pt-BR", { minimumFractionDigits: 1 })}
            </p>
            <div>
              <div
                className="flex gap-0.5 text-primary"
                aria-label={`Nota ${GOOGLE_RATING} de 5 no Google`}
              >
                {Array.from({ length: 5 }).map((_, i) => (
                  <Star key={i} className="h-4 w-4 fill-current" aria-hidden="true" />
                ))}
              </div>
              <p className="mt-1 text-sm text-muted-foreground">
                {GOOGLE_REVIEW_COUNT} avaliações no Google
              </p>
            </div>
          </div>
          <a
            href={GOOGLE_PROFILE}
            target="_blank"
            rel="noopener noreferrer"
            className="inline-flex items-center justify-center gap-2 rounded-full border border-primary px-5 py-2.5 text-sm font-semibold text-primary transition-colors hover:bg-primary hover:text-primary-foreground"
          >
            Ver avaliações no Google
            <ExternalLink className="h-4 w-4" aria-hidden="true" />
          </a>
        </div>

        {avaliacoes.length > 0 && (
          <ul className="mt-6 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            {avaliacoes.map(({ nome, subtitulo, texto, nota = 5 }) => (
              <li key={nome} className="rounded-2xl border border-border bg-card p-6 shadow-sm">
                <div className="flex gap-0.5 text-primary" aria-label={`${nota} de 5 estrelas`}>
                  {Array.from({ length: nota }).map((_, i) => (
                    <Star key={i} className="h-4 w-4 fill-current" aria-hidden="true" />
                  ))}
                </div>
                <blockquote className="mt-4 text-sm leading-relaxed text-foreground">
                  "{texto}"
                </blockquote>
                <p className="mt-4 text-sm font-semibold text-foreground">{nome}</p>
                <p className="text-xs text-muted-foreground">{subtitulo}</p>
              </li>
            ))}
          </ul>
        )}
      </div>
    </section>
  );
}
