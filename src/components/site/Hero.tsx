import { MessageCircle, Stethoscope, MapPin, Clock, ShieldCheck } from "lucide-react";
import retrato from "@/assets/jessica-faixa.jpeg";
import { WA_AGENDAR, WA_PROFISSIONAL, CITY } from "@/lib/site";

export function Hero() {
  return (
    <section id="inicio" className="bg-brand-tint">
      <div className="mx-auto grid max-w-6xl items-center gap-10 px-4 py-14 lg:grid-cols-[1.1fr_0.9fr] lg:py-20">
        <div>
          <p className="inline-flex items-center gap-2 rounded-full bg-brand-soft px-3 py-1 text-xs font-bold uppercase tracking-wide text-secondary-foreground">
            <MapPin className="h-3.5 w-3.5" aria-hidden="true" />
            {CITY}
          </p>
          <h1 className="mt-4 text-3xl leading-tight text-foreground sm:text-4xl lg:text-5xl">
            Fisioterapia domiciliar em Hortolândia para crianças, adultos e idosos
          </h1>
          <p className="mt-4 max-w-xl text-base text-muted-foreground sm:text-lg">
            Atendimento individualizado na sua casa: mais movimento, mais autonomia e menos
            deslocamentos. Avaliação funcional e plano de tratamento feitos para o seu caso.
          </p>

          <div className="mt-7 flex flex-wrap gap-3">
            <a
              href={WA_AGENDAR}
              target="_blank"
              rel="noopener noreferrer"
              className="inline-flex items-center gap-2 rounded-full bg-primary px-6 py-3 text-sm font-bold text-primary-foreground transition-opacity hover:opacity-90"
            >
              <MessageCircle className="h-4 w-4" aria-hidden="true" />
              Agende sua avaliação
            </a>
            <a
              href={WA_PROFISSIONAL}
              target="_blank"
              rel="noopener noreferrer"
              className="inline-flex items-center gap-2 rounded-full border border-primary/40 bg-card px-6 py-3 text-sm font-bold text-primary transition-colors hover:bg-secondary"
            >
              <Stethoscope className="h-4 w-4" aria-hidden="true" />
              Sou profissional da saúde
            </a>
          </div>

          <ul className="mt-8 grid gap-3 text-sm text-muted-foreground sm:grid-cols-2">
            <li className="flex items-center gap-2">
              <Clock className="h-4 w-4 text-primary" aria-hidden="true" />
              Horários flexíveis
            </li>
            <li className="flex items-center gap-2">
              <MapPin className="h-4 w-4 text-primary" aria-hidden="true" />
              Atendimento no seu lar
            </li>
          </ul>
        </div>

        <div className="relative">
          <img
            src={retrato}
            width={1200}
            height={1500}
            alt="Dra. Jéssica Macedo Pereira, fisioterapeuta, durante atendimento domiciliar"
            className="w-full rounded-3xl object-cover shadow-lg"
          />
        </div>
      </div>
    </section>
  );
}