import { createFileRoute } from "@tanstack/react-router";

import { SiteHeader } from "@/components/site/SiteHeader";
import { Hero } from "@/components/site/Hero";
import { Sobre } from "@/components/site/Sobre";
import { Servicos } from "@/components/site/Servicos";
import { Beneficios } from "@/components/site/Beneficios";
import { AntesDepois } from "@/components/site/AntesDepois";
import { Profissionais } from "@/components/site/Profissionais";
import { Duvidas } from "@/components/site/Duvidas";
import { Contato } from "@/components/site/Contato";
import { SiteFooter } from "@/components/site/SiteFooter";
import { WhatsAppFloat } from "@/components/site/WhatsAppFloat";
import { INSTAGRAM, PHONE_DISPLAY } from "@/lib/site";

const TITLE = "Fisioterapia Domiciliar em Hortolândia | Dra. Jéssica Pereira";
const DESCRIPTION =
  "Fisioterapia domiciliar em Hortolândia/SP para crianças, adultos e idosos: reabilitação motora, neurológica, geriátrica e paralisia de Bell. Agende sua avaliação.";

export const Route = createFileRoute("/")({
  head: () => ({
    meta: [
      { title: TITLE },
      { name: "description", content: DESCRIPTION },
      { property: "og:title", content: TITLE },
      { property: "og:description", content: DESCRIPTION },
      { property: "og:type", content: "website" },
      { property: "og:url", content: "/" },
      { property: "og:locale", content: "pt_BR" },
      { name: "twitter:card", content: "summary_large_image" },
      { name: "twitter:title", content: TITLE },
      { name: "twitter:description", content: DESCRIPTION },
    ],
    links: [{ rel: "canonical", href: "/" }],
    scripts: [
      {
        type: "application/ld+json",
        children: JSON.stringify({
          "@context": "https://schema.org",
          "@type": "Physiotherapy",
          name: "Dra. Jéssica Macedo Pereira — Fisioterapia Domiciliar",
          description: DESCRIPTION,
          telephone: `+55${PHONE_DISPLAY.replace(/\D/g, "")}`,
          sameAs: [INSTAGRAM],
          medicalSpecialty: "Physiotherapy",
          areaServed: [
            { "@type": "City", name: "Hortolândia" },
            { "@type": "AdministrativeArea", name: "Região Metropolitana de Campinas" },
          ],
          address: {
            "@type": "PostalAddress",
            addressLocality: "Hortolândia",
            addressRegion: "SP",
            addressCountry: "BR",
          },
          availableService: [
            "Fisioterapia infantil",
            "Fisioterapia geriátrica",
            "Reabilitação motora",
            "Psicomotricidade",
            "Fisioterapia neurológica",
            "Reabilitação de paralisia de Bell",
          ].map((name) => ({ "@type": "MedicalTherapy", name })),
          founder: {
            "@type": "Person",
            name: "Jéssica Macedo Pereira",
            jobTitle: "Fisioterapeuta",
          },
        }),
      },
    ],
  }),
  component: HomePage,
});

function HomePage() {
  return (
    <div className="min-h-screen bg-background">
      <SiteHeader />
      <main>
        <Hero />
        <Sobre />
        <Servicos />
        <Beneficios />
        <AntesDepois />
        <Profissionais />
        <Duvidas />
        <Contato />
      </main>
      <SiteFooter />
      <WhatsAppFloat />
    </div>
  );
}
