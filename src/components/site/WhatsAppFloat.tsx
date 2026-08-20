import { MessageCircle } from "lucide-react";
import { WA_AGENDAR } from "@/lib/site";

export function WhatsAppFloat() {
  return (
    <a
      href={WA_AGENDAR}
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Falar no WhatsApp com a Dra. Jéssica"
      className="fixed bottom-5 right-5 z-50 inline-flex items-center gap-2 rounded-full bg-primary px-5 py-3 text-sm font-bold text-primary-foreground shadow-lg transition-transform hover:scale-105"
    >
      <MessageCircle className="h-5 w-5" aria-hidden="true" />
      WhatsApp
    </a>
  );
}