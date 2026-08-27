// Config auxiliar: gera uma versão 100% estática do site (HTML pré-renderizado)
// para hospedagem em qualquer servidor de arquivos (GitHub Pages, Hostinger, Netlify...).
// Uso: bunx vite build --config vite.static.config.ts
import { defineConfig } from "@lovable.dev/vite-tanstack-config";

export default defineConfig({
  tanstackStart: {
    server: { entry: "server" },
    prerender: { enabled: true, crawlLinks: false },
    pages: [{ path: "/", prerender: { enabled: true } }],
  },
});
