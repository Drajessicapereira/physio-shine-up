import { Baby, PersonStanding, Activity, Brain, Puzzle, Smile, Bandage } from "lucide-react";

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
  {
    icon: Bandage,
    title: "Bandagem funcional",
    text: "Aplicação de bandagem funcional na gestação, pós-parto e reabilitação ortopédica.",
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

        <div className="mt-12 grid items-center gap-8 rounded-2xl border border-border bg-card p-6 shadow-sm sm:p-8 lg:grid-cols-[minmax(0,340px)_1fr]">
          <video
            className="w-full rounded-xl shadow-md"
            style={{ aspectRatio: "9 / 16" }}
            src={bandagemVideo.url}
            poster={bandagemPoster.url}
            controls
            playsInline
            preload="none"
            aria-label="Vídeo demonstrando aplicação de bandagem funcional"
          />
          <div>
            <span className="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-secondary">
              <Bandage className="h-5 w-5 text-primary" aria-hidden="true" />
            </span>
            <h3 className="mt-4 text-xl text-foreground">Bandagem funcional na prática</h3>
            <p className="mt-3 text-sm text-muted-foreground sm:text-base">
              A bandagem funcional é uma técnica que oferece suporte e alívio sem restringir os
              movimentos do dia a dia. Ela pode ser aplicada em diferentes fases do cuidado:
            </p>
            <ul className="mt-4 space-y-2 text-sm text-muted-foreground sm:text-base">
              <li className="flex gap-2">
                <span className="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-primary" aria-hidden="true" />
                Gestação — alívio de dores lombar e pélvica e suporte à postura.
              </li>
              <li className="flex gap-2">
                <span className="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-primary" aria-hidden="true" />
                Pós-parto — reeducação postural e apoio à recuperação do corpo.
              </li>
              <li className="flex gap-2">
                <span className="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-primary" aria-hidden="true" />
                Reabilitação ortopédica — estabilidade, redução de edema e retorno às atividades.
              </li>
            </ul>
            <p className="mt-4 text-sm text-muted-foreground">
              A técnica é indicada após avaliação individual, dentro do plano de tratamento de cada
              paciente.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}
