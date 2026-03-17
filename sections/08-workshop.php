<!-- SECTION 08: WORKSHOP DETAILS (Expandable) - Awaiting confirmation -->
<section id="workshop" class="w-full bg-white border-b border-slate-100 py-14 md:py-20">
  <!-- Full-width section, constrained content -->
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <!-- Heading -->
    <div class="max-w-3xl">
      <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('work_subtitle') ?></p>

      <h2 class="mt-2 font-heading text-2xl font-extrabold leading-tight tracking-tight text-slate-900 md:text-4xl md:whitespace-nowrap md:overflow-hidden md:text-ellipsis">
        <?= _t('work_title') ?>
      </h2>

      <p class="mt-4 flex flex-col gap-1 sm:flex-row sm:items-center sm:gap-2 text-sm text-slate-500 leading-relaxed">
        <span class="font-semibold text-slate-600">Day 2:</span>
        <span class="font-semibold text-slate-600"><?= _t('work_desc_time') ?></span>
        <span><?= _t('work_desc_tbc') ?></span>
      </p>
    </div>

    <div class="mt-8 grid gap-4 lg:grid-cols-12 lg:items-stretch">
      <!-- Left: Workshop overview -->
      <div class="h-full rounded-2xl border border-slate-200 bg-slate-50 p-6 lg:col-span-7">
        <div class="flex items-start justify-between gap-4">
          <div>
            <p class="text-sm font-semibold text-slate-900"><?= _t('work_overview_title') ?></p>
            <p class="mt-1 text-sm text-slate-600">
              <?= _t('work_overview_desc') ?>
            </p>
          </div>
        </div>

        <div class="mt-5 grid gap-4">
          <div class="rounded-xl border border-slate-200 bg-white p-5">
            <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('work_status_tag') ?></p>
            <p class="mt-1 font-semibold text-slate-900 mb-5">
              <?= _t('work_status_title') ?>
            </p>

            <div class="relative pl-4 border-l-2 border-slate-100 space-y-6">
              <!-- Workshop timetable item -->
              <div class="relative">
                <div class="absolute -left-[21px] top-1.5 h-2 w-2 rounded-full bg-[#C8A24A] ring-4 ring-white"></div>
                <p class="text-xs font-bold tracking-tight text-[#C8A24A]"><?= _t('work_sch_time') ?></p>
                <div class="mt-3 rounded-xl border border-slate-200 bg-slate-50 p-4 transition-colors hover:bg-slate-100">
                  <p class="font-semibold text-slate-900 text-sm"><?= _t('work_sch_title') ?></p>
                  <p class="mt-1 text-xs text-slate-600 leading-relaxed"><?= _t('work_sch_desc') ?></p>
                  <p class="mt-2 text-xs text-slate-500 italic"><?= _t('work_sch_note') ?></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <!-- Right: Quick facts -->
      <div class="h-full flex flex-col gap-4 lg:col-span-5">
        <!-- Fee -->
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 lg:flex-1 flex flex-col">
          <div class="flex items-start justify-between gap-4">
            <div>
              <p class="text-sm font-semibold text-slate-900"><?= _t('work_fee_title') ?></p>
              <p class="mt-3 text-2xl font-extrabold tracking-tight text-slate-900"><?= _t('work_fee_val') ?></p>
              <p class="mt-1 text-sm text-slate-600"><?= _t('work_fee_desc') ?></p>
            </div>
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white shrink-0">
              <!-- dollar icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-10V6m0 12v-2m8-4a8 8 0 11-16 0 8 8 0 0116 0z"/>
              </svg>
            </span>
          </div>

          <div class="mt-auto pt-6">
            <a
              onclick="window.toggleMobileMenu && window.toggleMobileMenu(false); (window.openRegister ? window.openRegister() : location.href='#register')"
              class="inline-flex w-full cursor-pointer items-center justify-center rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white hover:bg-slate-800"
            >
              <?= _t('work_btn_reg') ?>
            </a>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>