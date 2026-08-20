import { Instagram, MessageCircle } from "lucide-react";
import { INSTAGRAM, PHONE_DISPLAY, CITY, waLink } from "@/lib/site";

export function SiteFooter() {
  return (
    <footer className="border-t border-border bg-secondary">
      <div className="mx-auto grid max-w-6xl gap-6 px-4 py-10 sm:grid-cols-3">
        <div>
          <p className="font-display text-lg text-secondary-foreground">
            Dra. Jéssica Macedo Pereira
          </p>
          <p className="mt-1 text-sm text-muted-foreground">
            Fisioterapeuta · Psicomotricista · Educadora Física
          </p>
          <p className="mt-1 text-sm text-muted-foreground">CREFITO 422201-F · CREF 152902-G/SP</p>
        </div>
        <div className="text-sm text-muted-foreground">
          <p className="font-semibold text-secondary-foreground">Atendimento</p>
          <p className="mt-1">{CITY}</p>
          <p>Fisioterapia domiciliar para crianças, adultos e idosos</p>
        </div>
        <div className="text-sm">
          <p className="font-semibold text-secondary-foreground">Contato</p>
          <a
            href={waLink("Olá, Dra. Jéssica!")}
            target="_blank"
            rel="noopener noreferrer"
            className="mt-1 inline-flex items-center gap-2 text-muted-foreground hover:text-primary"
          >
            <MessageCircle className="h-4 w-4" aria-hidden="true" /> {PHONE_DISPLAY}
          </a>
          <a
            href={INSTAGRAM}
            target="_blank"
            rel="noopener noreferrer"
            className="mt-2 flex items-center gap-2 text-muted-foreground hover:text-primary"
          >
            <Instagram className="h-4 w-4" aria-hidden="true" /> @drajessicapereirafisio
          </a>
        </div>
      </div>
      <div className="border-t border-border/60 px-4 py-4 text-center text-xs text-muted-foreground">
        © {new Date().getFullYear()} Dra. Jéssica Macedo Pereira. Conteúdo informativo — não
        substitui avaliação profissional.
      </div>
    </footer>
  );
}