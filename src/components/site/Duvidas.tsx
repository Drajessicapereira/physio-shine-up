import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";
import { faq } from "@/lib/faq";


export function Duvidas() {
  return (
    <section id="duvidas" className="bg-brand-tint">
      <div className="mx-auto max-w-3xl px-4 py-16">
        <h2 className="text-2xl text-primary sm:text-3xl">Dúvidas frequentes</h2>
        <Accordion type="single" collapsible className="mt-6">
          {faq.map((item) => (
            <AccordionItem key={item.q} value={item.q}>
              <AccordionTrigger className="text-left text-base font-semibold text-foreground">
                {item.q}
              </AccordionTrigger>
              <AccordionContent className="text-sm text-muted-foreground">{item.a}</AccordionContent>
            </AccordionItem>
          ))}
        </Accordion>
      </div>
    </section>
  );
}