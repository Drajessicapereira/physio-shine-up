import { ClipboardCheck, FileText, TrendingUp } from "lucide-react";

const passos = [
  {
    icon: ClipboardCheck,
    numero: "1",
    title: "Avaliação funcional em casa",
    text: "Análise detalhada de mobilidade, força, equilíbrio e histórico de saúde, no conforto do lar do paciente.",
  },
  {
    icon: FileText,
    numero: "2",
    title: "Plano de tratamento personalizado",
    text: "Objetivos claros, frequência de sessões e exercícios adaptados à rotina da família e às necessidades do paciente.",
  },
  {
    icon: TrendingUp,
    numero: "3",
    title: "Acompanhamento da evolução",
    text: "Reavaliações periódicas para ajustar o plano, documentar a melhora e manter a família e a equipe médica informadas.",
  },
];

export function ComoFunciona() {
  return (
    <section id="como-funciona" className="mx-auto max-w-6xl px-4 py-16">
      <h2 className="text-2xl text-primary sm:text-3xl">Como funciona o atendimento</h2>
      <p className="mt-3 max-w-2xl text-base text-muted-foreground">
        Três etapas simples para começar a reabilitação com segurança e sem sair de casa.
      </p>

      <ol className="mt-8 grid gap-6 sm:grid-cols-3">
        {passos.map(({ icon: Icon, numero, title, text }) => (
          <li
            key={numero}
            className="relative rounded-2xl border border-border bg-card p-6 shadow-sm"
          >
            <span className="absolute right-5 top-4 text-4xl font-bold text-primary/10">
              {numero}
            </span>
            <span className="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-secondary">
              <Icon className="h-5 w-5 text-primary" aria-hidden="true" />
            </span>
            <h3 className="mt-4 text-lg text-foreground">{title}</h3>
            <p className="mt-2 text-sm text-muted-foreground">{text}</p>
          </li>
        ))}
      </ol>
    </section>
  );
}
