import { Home, CalendarCheck, ShieldCheck, HeartHandshake, Users, Car } from "lucide-react";

const itens = [
  { icon: Home, text: "Mais conforto e comodidade para o paciente." },
  { icon: CalendarCheck, text: "Atendimento adaptado à rotina da família." },
  { icon: ShieldCheck, text: "Maior segurança para crianças, adultos e idosos." },
  { icon: HeartHandshake, text: "Tratamento individualizado e humanizado." },
  { icon: Users, text: "Acompanhamento próximo da família e dos responsáveis." },
  { icon: Car, text: "Sem deslocamentos: mais continuidade no tratamento." },
];

export function Beneficios() {
  return (
    <section id="beneficios" className="mx-auto max-w-6xl px-4 py-16">
      <h2 className="text-2xl text-primary sm:text-3xl">Por que escolher o atendimento em casa?</h2>
      <ul className="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        {itens.map(({ icon: Icon, text }) => (
          <li key={text} className="flex gap-3 rounded-xl bg-card p-5 shadow-sm">
            <Icon className="mt-0.5 h-5 w-5 shrink-0 text-primary" aria-hidden="true" />
            <span className="text-sm text-muted-foreground">{text}</span>
          </li>
        ))}
      </ul>
    </section>
  );
}