import { useState } from "react";
import { MessageCircle, Instagram, MapPin, Phone, Mail } from "lucide-react";
import { INSTAGRAM, PHONE_DISPLAY, CITY, EMAIL, MAILTO_LINK, waLink } from "@/lib/site";

export function Contato() {
  const [nome, setNome] = useState("");
  const [para, setPara] = useState("");
  const [motivo, setMotivo] = useState("");

  const enviar = (e: React.FormEvent) => {
    e.preventDefault();
    const texto = `Olá, Dra. Jéssica! Meu nome é ${nome || "(nome)"}. Gostaria de agendar uma avaliação de fisioterapia domiciliar${
      para ? ` para ${para}` : ""
    }.${motivo ? ` Motivo: ${motivo}.` : ""}`;
    window.open(waLink(texto), "_blank", "noopener,noreferrer");
  };

  return (
    <section id="contato" className="mx-auto max-w-6xl px-4 py-16">
      <div className="grid gap-8 lg:grid-cols-2">
        <div>
          <h2 className="text-2xl text-primary sm:text-3xl">Agende sua avaliação</h2>
          <p className="mt-3 text-base text-muted-foreground">
            Resposta pelo WhatsApp em horário comercial. Conte um pouco do caso para agilizar o
            agendamento.
          </p>

          <ul className="mt-6 space-y-3 text-sm">
            <li className="flex items-center gap-3">
              <Phone className="h-4 w-4 text-primary" aria-hidden="true" />
              <a href={waLink("Olá, Dra. Jéssica!")} target="_blank" rel="noopener noreferrer" className="font-semibold text-foreground hover:text-primary">
                {PHONE_DISPLAY}
              </a>
            </li>
            <li className="flex items-center gap-3">
              <Instagram className="h-4 w-4 text-primary" aria-hidden="true" />
              <a href={INSTAGRAM} target="_blank" rel="noopener noreferrer" className="font-semibold text-foreground hover:text-primary">
                @drajessicapereirafisio
              </a>
            </li>
            <li className="flex items-center gap-3">
              <Mail className="h-4 w-4 text-primary" aria-hidden="true" />
              <a href={MAILTO_LINK} className="font-semibold text-foreground hover:text-primary">
                {EMAIL}
              </a>
            </li>
            <li className="flex items-center gap-3">
              <MapPin className="h-4 w-4 text-primary" aria-hidden="true" />
              <span className="text-muted-foreground">{CITY}</span>
            </li>
          </ul>
        </div>

        <form
          onSubmit={enviar}
          className="rounded-3xl border border-border bg-card p-6 shadow-sm"
        >
          <div className="grid gap-4">
            <div>
              <label htmlFor="nome" className="text-sm font-semibold text-foreground">
                Seu nome
              </label>
              <input
                id="nome"
                required
                value={nome}
                onChange={(e) => setNome(e.target.value)}
                className="mt-1 w-full rounded-xl border border-input bg-background px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-ring"
                placeholder="Maria Silva"
              />
            </div>
            <div>
              <label htmlFor="para" className="text-sm font-semibold text-foreground">
                Atendimento para
              </label>
              <select
                id="para"
                value={para}
                onChange={(e) => setPara(e.target.value)}
                className="mt-1 w-full rounded-xl border border-input bg-background px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-ring"
              >
                <option value="">Selecione</option>
                <option value="uma criança">Criança</option>
                <option value="um adulto">Adulto</option>
                <option value="uma pessoa idosa">Idoso</option>
              </select>
            </div>
            <div>
              <label htmlFor="motivo" className="text-sm font-semibold text-foreground">
                Como podemos ajudar?
              </label>
              <textarea
                id="motivo"
                rows={3}
                value={motivo}
                onChange={(e) => setMotivo(e.target.value)}
                className="mt-1 w-full rounded-xl border border-input bg-background px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-ring"
                placeholder="Ex.: recuperação após AVC, dores no joelho, atraso motor..."
              />
            </div>
            <button
              type="submit"
              className="inline-flex items-center justify-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-bold text-primary-foreground transition-opacity hover:opacity-90"
            >
              <MessageCircle className="h-4 w-4" aria-hidden="true" />
              Enviar pelo WhatsApp
            </button>
            <p className="text-xs text-muted-foreground">
              Ao enviar, o WhatsApp abre com a mensagem já preenchida. Nenhum dado é armazenado neste
              site.
            </p>
          </div>
        </form>
      </div>
    </section>
  );
}