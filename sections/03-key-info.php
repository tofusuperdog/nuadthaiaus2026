<!-- SECTION 03: KEY INFORMATION (Minimalist Grid) -->
<section id="key-info" class="w-full py-14 md:py-24 bg-white border-b border-slate-100">
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto text-center mb-16">
      <p class="text-xs font-semibold tracking-widest text-[#C8A24A] uppercase"><?= _t('ki_subtitle') ?></p>
      <h2 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-slate-900 md:text-5xl leading-tight">
        <?= _t('ki_title') ?>
      </h2>
    </div>

    <!-- 3-col layout for better visual distribution, minimal borders -->
    <div class="grid gap-y-12 md:grid-cols-3 md:gap-x-0 md:divide-x md:divide-slate-200">
      
      <!-- Date 1 -->
      <div class="flex flex-col items-center text-center px-6">
        <span class="inline-flex h-16 w-16 mb-5 items-center justify-center rounded-2xl bg-white shadow-soft text-[#C8A24A]">
          <!-- calendar icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M5 11h14M5 7h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2z"/>
          </svg>
        </span>
        <h3 class="font-heading text-lg font-extrabold tracking-tight text-slate-900">
          <?= _t('ki_date_1') ?>
        </h3>
        <p class="mt-2 text-sm leading-relaxed text-slate-500 font-light">
          <?= _t('ki_date_1_desc') ?>
        </p>
      </div>

      <!-- Date 2 -->
      <div class="flex flex-col items-center text-center px-6">
        <span class="inline-flex h-16 w-16 mb-5 items-center justify-center rounded-2xl bg-white shadow-soft text-[#C8A24A]">
          <!-- users icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
        </span>
        <h3 class="font-heading text-lg font-extrabold tracking-tight text-slate-900">
          <?= _t('ki_date_2') ?>
        </h3>
        <p class="mt-2 text-sm leading-relaxed text-slate-500 font-light">
          <?= _t('ki_date_2_desc') ?>
        </p>
      </div>

      <!-- Venue -->
      <div class="flex flex-col items-center text-center px-6">
        <span class="inline-flex h-16 w-16 mb-5 items-center justify-center rounded-2xl bg-white shadow-soft text-[#C8A24A]">
          <!-- location pin icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </span>
        <h3 class="font-heading text-lg font-extrabold tracking-tight text-slate-900">
          <?= _t('ki_venue_name') ?>
        </h3>
        <p class="mt-2 text-sm leading-relaxed text-slate-500 font-light px-4">
          <?= _t('ki_venue_address') ?>
        </p>
        <div class="mt-3 flex flex-row flex-wrap items-center justify-center gap-4">
          <a href="tel:0473916171" class="group flex items-center gap-2 text-sm font-semibold text-slate-900 transition-colors hover:text-[#C8A24A]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-900 group-hover:text-[#C8A24A] transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            Sinikan Suksipheng (Thai) 0473 916 171
          </a>
          <a href="tel:0422943565" class="group flex items-center gap-2 text-sm font-semibold text-slate-900 transition-colors hover:text-[#C8A24A]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-900 group-hover:text-[#C8A24A] transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            Stuart Cooper (English) 0422 943 565
          </a>
        </div>
      </div>

    </div>
  </div>
</section>