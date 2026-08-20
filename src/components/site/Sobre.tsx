import { GraduationCap, HeartHandshake } from "lucide-react";

const formacao = [
  "Graduação em Fisioterapia",
  "Graduação em Educação Física",
  "Pós-graduação em Psicomotricidade",
  "Especialização em ABA (Análise do Comportamento Aplicada)",
  "Pós-graduação em Gerontologia",
];

export function Sobre() {
  return (
    <section id="sobre" className="mx-auto max-w-6xl px-4 py-16">
      <h2 className="text-2xl text-primary sm:text-3xl">Conheça a Dra. Jéssica</h2>
      <p className="mt-4 max-w-3xl text-base text-muted-foreground">
        Fisioterapeuta, educadora física, psicomotricista, especialista em ABA e pós-graduada em
        Gerontologia. Atende crianças, adultos e idosos em casa, com plano terapêutico individual e
        cuidado humanizado baseado em evidências científicas.
      </p>
      <p className="mt-3 max-w-3xl text-base text-muted-foreground">
        O foco está em prevenir complicações, recuperar a funcionalidade, estimular o
        desenvolvimento motor e devolver independência — sempre respeitando o ritmo de cada pessoa e
        com a família participando do processo.
      </p>

      <div className="mt-8 grid gap-5 md:grid-cols-2">
        <div className="rounded-2xl border border-border bg-card p-6 shadow-sm">
          <h3 className="flex items-center gap-2 text-lg text-foreground">
            <GraduationCap className="h-5 w-5 text-primary" aria-hidden="true" />
            Formação e especializações
          </h3>
          <ul className="mt-4 space-y-2 text-sm text-muted-foreground">
            {formacao.map((f) => (
              <li key={f} className="flex gap-2">
                <span aria-hidden="true" className="text-primary">
                  •
                </span>
                {f}
              </li>
            ))}
          </ul>
        </div>

        <div className="rounded-2xl border border-border bg-card p-6 shadow-sm">
          <h3 className="flex items-center gap-2 text-lg text-foreground">
            <HeartHandshake className="h-5 w-5 text-primary" aria-hidden="true" />
            Compromisso com o cuidado
          </h3>
          <blockquote className="mt-4 border-l-2 border-accent pl-4 text-sm italic text-muted-foreground">
            “Meu propósito é oferecer um atendimento de excelência, pautado na humanização, no
            respeito e na individualidade de cada paciente, contribuindo para mais saúde,
            funcionalidade, independência e qualidade de vida.”
          </blockquote>
        </div>
      </div>
    </section>
  );
}