import { Baby, PersonStanding, Activity, Brain, Puzzle, Smile } from "lucide-react";

const servicos = [
  {
    icon: Baby,
    title: "Fisioterapia infantil",
    text: "Desenvolvimento motor, coordenação, equilíbrio e funcionalidade da criança.",
  },
  {
    icon: PersonStanding,
    title: "Fisioterapia geriátrica",
    text: "Prevenção de quedas, mobilidade, fortalecimento e autonomia do idoso.",
  },
  {
    icon: Activity,
    title: "Reabilitação motora",
    text: "Dores, limitação de movimento, fraqueza muscular e recuperação funcional.",
  },
  {
    icon: Puzzle,
    title: "Psicomotricidade",
    text: "Coordenação, lateralidade, percepção corporal e planejamento motor.",
  },
  {
    icon: Brain,
    title: "Fisioterapia neurológica",
    text: "Acompanhamento de alterações neurológicas com foco em independência.",
  },
  {
    icon: Smile,
    title: "Paralisia de Bell",
    text: "Reabilitação facial para recuperar movimento, simetria e funcionalidade.",
  },
];

export function Servicos() {
  return (
    <section id="servicos" className="bg-brand-tint">
      <div className="mx-auto max-w-6xl px-4 py-16">
        <h2 className="text-2xl text-primary sm:text-3xl">Áreas de atuação</h2>
        <p className="mt-3 max-w-2xl text-base text-muted-foreground">
          Atendimento domiciliar em Hortolândia e região, com plano de tratamento definido após
          avaliação funcional.
        </p>

        <ul className="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
          {servicos.map(({ icon: Icon, title, text }) => (
            <li
              key={title}
              className="rounded-2xl border border-border bg-card p-6 shadow-sm transition-shadow hover:shadow-md"
            >
              <span className="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-secondary">
                <Icon className="h-5 w-5 text-primary" aria-hidden="true" />
              </span>
              <h3 className="mt-4 text-lg text-foreground">{title}</h3>
              <p className="mt-2 text-sm text-muted-foreground">{text}</p>
            </li>
          ))}
        </ul>
      </div>
    </section>
  );
}