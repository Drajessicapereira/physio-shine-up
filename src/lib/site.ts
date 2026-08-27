export const SITE_URL = "https://id-preview--c243f253-82b2-4e5a-8913-da40295dc7da.lovable.app";

export const WHATSAPP_NUMBER = "5519998900329";

export const waLink = (text: string) =>
  `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(text)}`;

export const WA_AGENDAR = waLink(
  "Olá, Dra. Jéssica! Gostaria de agendar uma avaliação de fisioterapia domiciliar."
);

export const WA_PROFISSIONAL = waLink(
  "Olá, Dra. Jéssica. Sou profissional da saúde e gostaria de encaminhar um paciente para avaliação fisioterapêutica domiciliar."
);

export const INSTAGRAM = "https://www.instagram.com/drajessicapereirafisio";

export const GOOGLE_PROFILE =
  "https://www.google.com/search?kgmid=/g/11zgc_bz98&q=Dra.+Jessica+Pereira+-+Fisioterapeuta+Domiciliar";
export const GOOGLE_RATING = 5;
export const GOOGLE_REVIEW_COUNT = 4;
export const PHONE_DISPLAY = "(19) 99890-0329";
export const CITY = "Hortolândia/SP e região";
