import { Stethoscope } from "lucide-react";
import { WA_PROFISSIONAL } from "@/lib/site";

export function Profissionais() {
  return (
    <section id="profissionais" className="mx-auto max-w-6xl px-4 py-16">
      <div className="rounded-3xl border border-border bg-card p-8 shadow-sm">
        <h2 className="text-2xl text-primary sm:text-3xl">Parceria com profissionais da saúde</h2>
        <p className="mt-4 max-w-3xl text-base text-muted-foreground">
          Seu paciente precisa de fisioterapia, mas tem dificuldade para se deslocar até a clínica?
          Ofereço atendimento domiciliar com avaliação funcional, plano terapêutico personalizado e
          acompanhamento da evolução — com retorno sobre a evolução funcional sempre que pertinente,
          facilitando a comunicação entre a equipe de cuidado.
        </p>
        <a
          href={WA_PROFISSIONAL}
          target="_blank"
          rel="noopener noreferrer"
          className="mt-6 inline-flex items-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-bold text-primary-foreground transition-opacity hover:opacity-90"
        >
          <Stethoscope className="h-4 w-4" aria-hidden="true" />
          Encaminhar paciente pelo WhatsApp
        </a>
      </div>
    </section>
  );
}