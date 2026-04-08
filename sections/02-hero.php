<section id="top" class="relative w-full min-h-[100svh] flex flex-col justify-end overflow-hidden bg-black">
  <!-- Responsive hero image as absolute background -->
  <picture class="absolute inset-0 z-0">
    <source media="(max-width: 767px)" srcset="/images/hero-mainM.webp" />
    <img
      src="/images/hero-main.webp"
      alt="<?= strip_tags(_t('hero_title')) ?>"
      class="h-full w-full object-cover object-center opacity-80"
      loading="eager"
    />
  </picture>

  <!-- Soft overlay for readability: only bottom edge and behind text, leaving top right completely unshaded -->
  <div class="absolute inset-0 z-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent md:bg-gradient-to-tr md:from-black/60 md:via-transparent md:to-transparent pointer-events-none"></div>

  <!-- Content overlay -->
  <div class="relative z-10 mx-auto w-full max-w-screen-2xl px-4 pb-[78px] pt-40 sm:px-6 lg:px-8 md:pb-24 flex justify-end">
    <div class="max-w-4xl text-right">
      <h1 class="font-heading text-2xl font-extrabold text-white sm:text-4xl md:text-[5.8vh] lg:text-[7vh] leading-tight md:leading-[1.15] drop-shadow-[0_4px_8px_rgba(0,0,0,0.8)] uppercase">
        World Nuad Thai Massage Championship<br/> of Australia 2026 - 1st
      </h1>

      <p class="mt-4 sm:mt-6 text-base text-white/95 sm:text-lg md:text-xl drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)] ml-auto max-w-2xl font-medium uppercase">
        26–27 September 2026 • Australia
      </p>

      <div class="mt-10 flex flex-wrap justify-end gap-4">
        <button
          type="button"
          class="w-full sm:w-[240px] text-center rounded-full bg-brand-gold px-8 py-4 text-sm md:text-base font-bold text-brand-ink shadow-[0_0_20px_rgba(255,215,0,0.3)] hover:bg-white hover:shadow-[0_0_20px_rgba(255,255,255,0.5)] transition-all duration-300 transform hover:-translate-y-1 uppercase"
          onclick="window.openRegister ? window.openRegister() : location.href='#register'"
        >
          Register Now
        </button>

        <a
          href="#pricing"
          class="w-full sm:w-[240px] text-center inline-block rounded-full border-2 border-white/30 bg-black/20 px-8 py-4 text-sm md:text-base font-bold text-white backdrop-blur-sm hover:bg-white hover:text-brand-ink hover:border-white transition-all duration-300 transform hover:-translate-y-1 uppercase"
        >
          View Pricing
        </a>
      </div>
    </div>
  </div>

  <!-- Auto-scrolling ticker at the bottom -->
  <div class="relative z-10 w-full bg-black py-4 border-t border-white/10 overflow-hidden">
    <div class="flex items-center whitespace-nowrap animate-marquee">
      <?php 
        $ticker_items = [
          "WORLD NUAD THAI MASSAGE CHAMPIONSHIP", "AUSTRALIA 2026 - 1ST", "THAI MASSAGE", "WELLNESS", "SPA", 
          "SPORTS MASSAGE", "TRADITIONAL HEALING", "COMPETITION", "WORKSHOP", "DINNER EVENT", 
          "WORLD CLASS", "PROFESSIONAL", "AWARDS"
        ];
      ?>
      <?php for($i=0; $i<4; $i++): ?>
        <?php foreach($ticker_items as $item): ?>
          <span class="mx-6 text-xs md:text-sm font-bold tracking-[0.15em] text-white/80 flex items-center gap-6 uppercase">
            <?= $item ?>
            <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
          </span>
        <?php endforeach; ?>
      <?php endfor; ?>
    </div>
  </div>
</section>

<style>
@keyframes marquee {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.animate-marquee {
  display: flex;
  width: max-content;
  animation: marquee 40s linear infinite;
}
/* Pause animation on hover if desired */
.animate-marquee:hover {
  animation-play-state: paused;
}
</style>