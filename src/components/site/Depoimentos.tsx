import { Star, Quote, ExternalLink } from "lucide-react";

import { GOOGLE_PROFILE, GOOGLE_RATING, GOOGLE_REVIEW_COUNT } from "@/lib/site";

/**
 * Avaliações reais do perfil da empresa no Google.
 * Para adicionar/atualizar, cole aqui o nome e o texto de cada avaliação.
 */
const avaliacoes: { nome: string; texto: string; nota?: number }[] = [];

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
          <ul className="mt-6 grid gap-5 sm:grid-cols-3">
            {avaliacoes.map(({ nome, texto, nota = 5 }) => (
              <li key={nome} className="rounded-2xl border border-border bg-card p-6 shadow-sm">
                <div className="flex gap-0.5 text-primary" aria-label={`${nota} estrelas`}>
                  {Array.from({ length: nota }).map((_, i) => (
                    <Star key={i} className="h-4 w-4 fill-current" aria-hidden="true" />
                  ))}
                </div>
                <blockquote className="mt-4 text-sm leading-relaxed text-foreground">
                  “{texto}”
                </blockquote>
                <p className="mt-4 text-sm font-semibold text-foreground">{nome}</p>
                <p className="text-xs text-muted-foreground">Avaliação no Google</p>
              </li>
            ))}
          </ul>
        )}
      </div>
    </section>
  );
}
