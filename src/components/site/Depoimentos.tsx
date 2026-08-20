import { Star, Quote } from "lucide-react";

const depoimentos = [
  {
    nome: "Maria S.",
    perfil: "Mãe de paciente pediátrico",
    texto:
      "A Dra. Jéssica transformou a rotina do meu filho. Em poucas sessões vimos melhora na coordenação e no equilíbrio. O atendimento em casa fez toda a diferença.",
  },
  {
    nome: "Seu Antônio",
    perfil: "Paciente geriátrico",
    texto:
      "Depois da queda, eu tinha medo de andar sozinho. Com as sessões domiciliares recuperei confiança e mobilidade. Profissional atenciosa e dedicada.",
  },
  {
    nome: "Dra. Fernanda L.",
    perfil: "Médica da família",
    texto:
      "Encaminho pacientes com frequência. O retorno sobre a evolução funcional é claro e ajuda muito no acompanhamento da equipe multidisciplinar.",
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
          Relatos de pacientes e profissionais que acompanharam a evolução do tratamento.
        </p>

        <ul className="mt-8 grid gap-5 sm:grid-cols-3">
          {depoimentos.map(({ nome, perfil, texto }) => (
            <li
              key={nome}
              className="rounded-2xl border border-border bg-card p-6 shadow-sm"
            >
              <div className="flex gap-0.5 text-primary" aria-label="5 estrelas">
                {Array.from({ length: 5 }).map((_, i) => (
                  <Star key={i} className="h-4 w-4 fill-current" aria-hidden="true" />
                ))}
              </div>
              <blockquote className="mt-4 text-sm leading-relaxed text-foreground">
                “{texto}”
              </blockquote>
              <p className="mt-4 text-sm font-semibold text-foreground">{nome}</p>
              <p className="text-xs text-muted-foreground">{perfil}</p>
            </li>
          ))}
        </ul>

        <p className="mt-6 text-xs text-muted-foreground">
          * Depoimentos ilustrativos. Substitua por relatos reais de pacientes e responsáveis, com
          autorização para divulgação.
        </p>
      </div>
    </section>
  );
}
