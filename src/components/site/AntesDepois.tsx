import antes from "@/assets/antes-1.jpeg";
import depois from "@/assets/depois-1.jpeg";

export function AntesDepois() {
  return (
    <section id="resultados" className="bg-brand-tint">
      <div className="mx-auto max-w-6xl px-4 py-16">
        <h2 className="text-2xl text-primary sm:text-3xl">Resultados: antes e depois</h2>
        <p className="mt-3 max-w-2xl text-base text-muted-foreground">
          Evolução funcional real acompanhada ao longo do processo de reabilitação.
        </p>

        <article className="mt-8 rounded-3xl border border-border bg-card p-6 shadow-sm">
          <h3 className="text-lg text-foreground">Caso clínico — Paralisia de Bell</h3>

          <div className="mt-5 grid gap-5 sm:grid-cols-2">
            <figure>
              <img
                src={antes}
                width={900}
                height={1200}
                loading="lazy"
                alt="Paciente com paralisia de Bell antes do tratamento, com assimetria facial evidente"
                className="w-full rounded-2xl object-cover"
              />
              <figcaption className="mt-2 text-sm font-semibold text-secondary-foreground">
                Antes — 1ª sessão
              </figcaption>
            </figure>
            <figure>
              <img
                src={depois}
                width={900}
                height={1200}
                loading="lazy"
                alt="Mesmo paciente após dez sessões de fisioterapia, com maior simetria facial"
                className="w-full rounded-2xl object-cover"
              />
              <figcaption className="mt-2 text-sm font-semibold text-secondary-foreground">
                Depois — 10ª sessão
              </figcaption>
            </figure>
          </div>

          <dl className="mt-6 grid gap-5 md:grid-cols-3">
            <div>
              <dt className="text-sm font-bold text-foreground">Avaliação inicial</dt>
              <dd className="mt-1 text-sm text-muted-foreground">
                Assimetria facial evidente, redução da mobilidade voluntária e dificuldade nos
                movimentos do lado acometido.
              </dd>
            </div>
            <div>
              <dt className="text-sm font-bold text-foreground">Durante o tratamento</dt>
              <dd className="mt-1 text-sm text-muted-foreground">
                Melhora progressiva da ativação e do controle da musculatura facial, com exercícios
                lentos e precisos, evitando compensações.
              </dd>
            </div>
            <div>
              <dt className="text-sm font-bold text-foreground">Resultado — 10ª sessão</dt>
              <dd className="mt-1 text-sm text-muted-foreground">
                Maior controle e amplitude dos movimentos faciais e redução da assimetria,
                priorizando qualidade em vez de repetições.
              </dd>
            </div>
          </dl>

          <p className="mt-6 text-xs text-muted-foreground">
            Resultados variam conforme as características e a evolução individual de cada paciente.
            Imagens de casos clínicos publicadas somente mediante autorização.
          </p>
        </article>
      </div>
    </section>
  );
}