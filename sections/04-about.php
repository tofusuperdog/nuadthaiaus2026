<!-- SECTION 04: ABOUT / PURPOSE (Slide Format Layout) -->
<section id="about" class="w-full bg-white py-5 relative overflow-hidden border-b border-slate-100">
  
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-20 relative z-10">
    <!-- Reduced gap from lg:gap-20 to lg:gap-8 to pull right column left -->
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">
      
      <!-- LEFT SIDE: Colored Vertical Band & Circular Image -->
      <div class="relative w-full flex flex-col items-center lg:items-start pt-12 pb-16">
        
        <!-- The Background Vertical Band -->
        <div class="absolute top-0 bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-[100vw] sm:w-[400px] md:w-[460px] lg:w-[480px] bg-[#071A37] rounded-3xl -z-10"></div>
        
        <!-- Header & Image wrapper -->
        <!-- Center contents within the LG band (which is 480px wide) -->
        <div class="relative w-full flex flex-col items-center justify-center lg:w-[480px]">
           <!-- Header inside the band -->
           <div class="relative w-full max-w-[300px] sm:max-w-[340px] md:max-w-[400px] lg:max-w-[420px] z-20 text-center lg:text-left mb-8 lg:mb-12 px-4 lg:px-12">
              <p class="text-xs font-semibold tracking-widest text-[#C8A24A] uppercase drop-shadow-md">
                <?= _t('about_subtitle') ?>
              </p>
              <h2 class="mt-2 font-heading text-3xl sm:text-4xl font-extrabold tracking-tight text-white md:text-[2.75rem] drop-shadow-lg leading-tight md:leading-tight">
                <?= _t('about_title') ?>
              </h2>
           </div>

           <!-- Circular Image Container (Centred within the 480px parent) -->
           <div class="relative aspect-square w-[280px] sm:w-[320px] md:w-[420px] lg:w-[450px] overflow-hidden rounded-full border-[10px] sm:border-[16px] border-white shadow-2xl mix-blend-normal">
              <img
                src="/images/massage1.webp"
                alt="Thai Massage competition and cultural heritage"
                class="absolute inset-0 h-full w-full object-cover object-[center_30%]"
                loading="lazy"
              />
              <!-- Optional color tint to match reference image vibe -->
              <div class="pointer-events-none absolute inset-0 bg-[#071A37]/10 mix-blend-multiply"></div>
           </div>
        </div>
      </div>

      <!-- RIGHT SIDE: Vertical Objectives List -->
      <!-- Added left margin on lg screens to fine-tune spacing relative to new grid gaps -->
      <div class="w-full lg:py-10 max-w-xl mx-auto lg:mx-0 lg:ml-8">
        <p class="mb-12 text-base text-slate-600 leading-relaxed max-w-lg">
          <?= _t('about_desc') ?>
          <br><br>
          <span class="font-heading font-extrabold text-slate-900 text-lg border-b-2 border-[#C8A24A] pb-1">
            <?= _t('about_obj_title') ?>
          </span>
        </p>

        <div class="flex flex-col gap-10">
          
          <!-- Item 1 -->
          <div class="flex items-start gap-3 sm:gap-4 group">
            <span class="inline-flex h-10 w-10 sm:h-[72px] sm:w-[72px] shrink-0 items-center justify-center rounded-full border border-slate-200 bg-white shadow-sm text-[#C8A24A] group-hover:bg-[#C8A24A] group-hover:text-white group-hover:border-[#C8A24A] transition-all duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </span>
            <div class="min-w-0 pt-0 sm:pt-1">
              <p class="font-heading text-lg sm:text-xl font-extrabold tracking-tight text-slate-900 leading-tight">
                <?= _t('about_obj_1_title') ?>
              </p>
              <ul class="mt-2 text-sm text-slate-500 font-light leading-relaxed list-inside list-disc">
                <li><?= _t('about_obj_1_1') ?></li>
                <li><?= _t('about_obj_1_2') ?></li>
                <li><?= _t('about_obj_1_3') ?></li>
              </ul>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="flex items-start gap-3 sm:gap-4 group">
            <span class="inline-flex h-10 w-10 sm:h-[72px] sm:w-[72px] shrink-0 items-center justify-center rounded-full border border-slate-200 bg-white shadow-sm text-[#C8A24A] group-hover:bg-[#C8A24A] group-hover:text-white group-hover:border-[#C8A24A] transition-all duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
              </svg>
            </span>
            <div class="min-w-0 pt-0 sm:pt-1">
              <p class="font-heading text-lg sm:text-xl font-extrabold tracking-tight text-slate-900 leading-tight">
                <?= _t('about_obj_2_title') ?>
              </p>
              <ul class="mt-2 text-sm text-slate-500 font-light leading-relaxed list-inside list-disc">
                <li><?= _t('about_obj_2_1') ?></li>
                <li><?= _t('about_obj_2_2') ?></li>
                <li><?= _t('about_obj_2_3') ?></li>
              </ul>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="flex items-start gap-3 sm:gap-4 group">
            <span class="inline-flex h-10 w-10 sm:h-[72px] sm:w-[72px] shrink-0 items-center justify-center rounded-full border border-slate-200 bg-white shadow-sm text-[#C8A24A] group-hover:bg-[#C8A24A] group-hover:text-white group-hover:border-[#C8A24A] transition-all duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </span>
            <div class="min-w-0 pt-0 sm:pt-1">
              <p class="font-heading text-lg sm:text-xl font-extrabold tracking-tight text-slate-900 leading-tight">
                <?= _t('about_obj_3_title') ?>
              </p>
              <ul class="mt-2 text-sm text-slate-500 font-light leading-relaxed list-inside list-disc">
                <li><?= _t('about_obj_3_1') ?></li>
                <li><?= _t('about_obj_3_2') ?></li>
                <li><?= _t('about_obj_3_3') ?></li>
              </ul>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="flex items-start gap-3 sm:gap-4 group">
            <span class="inline-flex h-10 w-10 sm:h-[72px] sm:w-[72px] shrink-0 items-center justify-center rounded-full border border-slate-200 bg-white shadow-sm text-[#C8A24A] group-hover:bg-[#C8A24A] group-hover:text-white group-hover:border-[#C8A24A] transition-all duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
              </svg>
            </span>
            <div class="min-w-0 pt-0 sm:pt-1">
              <p class="font-heading text-lg sm:text-xl font-extrabold tracking-tight text-slate-900 leading-tight">
                <?= _t('about_obj_4_title') ?>
              </p>
              <ul class="mt-2 text-sm text-slate-500 font-light leading-relaxed list-inside list-disc">
                <li><?= _t('about_obj_4_1') ?></li>
                <li><?= _t('about_obj_4_2') ?></li>
                <li><?= _t('about_obj_4_3') ?></li>
              </ul>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>