<!-- SECTION 07: COMPETITION PROGRAM (Day 1 & Day 2) -->
<section id="competition" class="w-full py-14 md:py-20">
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <!-- Heading -->
    <div class="max-w-3xl">
      <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('comp_subtitle') ?></p>

      <h2 class="mt-2 font-heading text-2xl font-extrabold tracking-tight text-slate-900 md:text-4xl leading-tight md:whitespace-nowrap md:overflow-hidden md:text-ellipsis">
        <?= _t('comp_title') ?>
      </h2>

      <p class="mt-4 flex flex-col gap-1 sm:flex-row sm:items-center sm:gap-2 text-sm text-slate-500 leading-relaxed">
        <span class="font-semibold text-slate-600">Day 1:</span>
        <span class="font-semibold text-slate-600"><?= _t('comp_day1_desc') ?></span>
      </p>

      <p class="mt-2 flex flex-col gap-1 sm:flex-row sm:items-center sm:gap-2 text-sm text-slate-500 leading-relaxed">
        <span class="font-semibold text-slate-600">Day 2:</span>
        <span class="font-semibold text-slate-600"><?= _t('comp_day2_desc') ?></span>
      </p>
    </div>

    <!-- Main layout -->
    <div class="mt-8 grid gap-4 lg:grid-cols-12 lg:items-stretch">
      <!-- LEFT: Categories (by day) -->
      <div class="h-full rounded-2xl border border-slate-200 bg-slate-50 p-6 lg:col-span-7">
        <div class="flex items-start justify-between gap-4">
          <div>
            <p class="text-sm font-semibold text-slate-900"><?= _t('comp_cat_title') ?></p>
            <p class="mt-1 text-sm text-slate-600">
              <?= _t('comp_cat_fee') ?> <span class="font-semibold text-slate-900"><?= _t('comp_cat_fee_val') ?></span>
              <span class="text-slate-500">&bull;</span> <span class="text-slate-500"><?= _t('comp_cat_inc') ?></span>
            </p>
          </div>
        </div>

        <div class="mt-5 grid gap-4">
          <!-- Day 1 categories / timeline -->
          <div class="rounded-xl border border-slate-200 bg-white p-5">
            <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('comp_d1_tag') ?></p>
            <p class="mt-1 text-sm font-semibold text-slate-900 mb-5">
              <?= _t('comp_d1_intro') ?>
            </p>

            <div class="relative pl-4 border-l-2 border-slate-100 space-y-6">
              
              <!-- 10:00-12:00 -->
              <div class="relative">
                <div class="absolute -left-[21px] top-1.5 h-2 w-2 rounded-full bg-[#C8A24A] ring-4 ring-white"></div>
                <p class="text-xs font-bold tracking-tight text-[#C8A24A]"><?= _t('comp_sch1_time1') ?></p>
                <p class="text-sm font-semibold text-slate-800 mt-1"><?= _t('comp_sch1_desc1') ?></p>
              </div>

              <!-- 13:00-14:00 -->
              <div class="relative">
                <div class="absolute -left-[21px] top-1.5 h-2 w-2 rounded-full bg-[#C8A24A] ring-4 ring-white"></div>
                <p class="text-xs font-bold tracking-tight text-[#C8A24A]"><?= _t('comp_sch1_time2') ?></p>
                <div class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-3">
                  <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 transition-colors hover:bg-slate-100">
                    <p class="font-semibold text-slate-900 text-sm"><?= _t('comp_cat1_title') ?></p>
                    <p class="mt-1 text-xs text-slate-600 leading-relaxed"><?= _t('comp_cat1_desc') ?></p>
                  </div>
                  <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 transition-colors hover:bg-slate-100">
                    <p class="font-semibold text-slate-900 text-sm"><?= _t('comp_cat2_title') ?></p>
                    <p class="mt-1 text-xs text-slate-600 leading-relaxed"><?= _t('comp_cat2_desc') ?></p>
                  </div>
                </div>
              </div>

              <!-- 14:00-15:00 -->
              <div class="relative">
                <div class="absolute -left-[21px] top-1.5 h-2 w-2 rounded-full bg-[#C8A24A] ring-4 ring-white"></div>
                <p class="text-xs font-bold tracking-tight text-[#C8A24A]"><?= _t('comp_sch1_time3') ?></p>
                <div class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-3">
                  <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 transition-colors hover:bg-slate-100">
                    <p class="font-semibold text-slate-900 text-sm"><?= _t('comp_cat3_title') ?></p>
                    <p class="mt-1 text-xs text-slate-600 leading-relaxed"><?= _t('comp_cat3_desc') ?></p>
                  </div>
                  <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 transition-colors hover:bg-slate-100">
                    <p class="font-semibold text-slate-900 text-sm"><?= _t('comp_cat4_title') ?></p>
                    <p class="mt-1 text-xs text-slate-600 leading-relaxed"><?= _t('comp_cat4_desc') ?></p>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Day 2 categories / timeline -->
          <div class="rounded-xl border border-slate-200 bg-white p-5">
            <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('comp_d2_tag') ?></p>
            <p class="mt-1 text-sm font-semibold text-slate-900 mb-5"><?= _t('comp_d2_intro') ?></p>

            <div class="relative pl-4 border-l-2 border-slate-100 space-y-6">
              
              <!-- 10:00-11:00 -->
              <div class="relative">
                <div class="absolute -left-[21px] top-1.5 h-2 w-2 rounded-full bg-[#C8A24A] ring-4 ring-white"></div>
                <p class="text-xs font-bold tracking-tight text-[#C8A24A]"><?= _t('comp_sch2_time1') ?></p>
                <div class="mt-3 rounded-xl border border-slate-200 bg-slate-50 p-4 transition-colors hover:bg-slate-100">
                  <p class="font-semibold text-slate-900 text-sm"><?= _t('comp_cat5_title') ?></p>
                  <p class="mt-1 text-xs text-slate-600 leading-relaxed"><?= _t('comp_cat5_desc') ?></p>
                </div>
              </div>

              <!-- 11:00-12:00 -->
              <div class="relative">
                <div class="absolute -left-[21px] top-1.5 h-2 w-2 rounded-full bg-[#C8A24A] ring-4 ring-white"></div>
                <p class="text-xs font-bold tracking-tight text-[#C8A24A]"><?= _t('comp_sch2_time2') ?></p>
                <div class="mt-3 rounded-xl border border-slate-200 bg-slate-50 p-4 transition-colors hover:bg-slate-100">
                  <p class="font-semibold text-slate-900 text-sm"><?= _t('comp_cat6_title') ?></p>
                  <p class="mt-1 text-xs text-slate-600 leading-relaxed"><?= _t('comp_cat6_desc') ?></p>
                </div>
              </div>

              <!-- 12:00-14:00 -->
              <div class="relative">
                <div class="absolute -left-[21px] top-1.5 h-2 w-2 rounded-full bg-[#C8A24A] ring-4 ring-white"></div>
                <p class="text-xs font-bold tracking-tight text-[#C8A24A]"><?= _t('comp_sch2_time3') ?></p>
                <p class="text-sm font-semibold text-slate-800 mt-1"><?= _t('comp_sch2_desc3') ?></p>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- RIGHT: Quick facts -->
      <div class="h-full flex flex-col gap-4 lg:col-span-5">
        <!-- Time per Entry -->
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 lg:flex-1">
          <div class="flex items-start justify-between gap-4">
            <p class="text-sm font-semibold text-slate-900"><?= _t('comp_time_title') ?></p>
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
              <!-- clock icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </span>
          </div>

          <p class="mt-3 text-2xl font-extrabold tracking-tight text-slate-900"><?= _t('comp_time_val') ?></p>
          <ul class="mt-3 space-y-1 text-sm text-slate-600">
            <li><span class="text-slate-500">&bull;</span> <?= _t('comp_time_1') ?></li>
            <li><span class="text-slate-500">&bull;</span> <?= _t('comp_time_2') ?></li>
            <li><span class="text-slate-500">&bull;</span> <?= _t('comp_time_3') ?></li>
          </ul>
        </div>

        <!-- Competition Fee -->
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 lg:flex-1">
          <div class="flex items-start justify-between gap-4">
            <div>
              <p class="text-sm font-semibold text-slate-900"><?= _t('comp_fee_title') ?></p>
              <p class="mt-3 text-2xl font-extrabold tracking-tight text-slate-900"><?= _t('comp_fee_val') ?></p>
              <p class="mt-1 text-sm text-slate-600"><?= _t('comp_fee_sub') ?></p>
            </div>

            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
              <!-- trophy icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 21h8m-4-4v4m-7-7h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v7a2 2 0 002 2zm2-9h10v3a5 5 0 01-10 0V5z"/>
              </svg>
            </span>
          </div>

          <div class="mt-5 rounded-xl border border-slate-200 bg-white p-4">
            <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('comp_fee_inc') ?></p>
            <p class="mt-1 text-sm text-slate-700">
              <?= _t('comp_fee_inc_desc_1') ?> <span class="font-semibold text-slate-900"><?= _t('comp_fee_inc_desc_2') ?></span><?= _t('comp_fee_inc_desc_3') ?>
            </p>
          </div>
        </div>

        <!-- Provided & Requirements -->
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 lg:flex-1">
          <div class="flex items-start justify-between gap-4">
            <div>
              <p class="text-sm font-semibold text-slate-900"><?= _t('comp_req_title') ?></p>
              <p class="mt-1 text-sm text-slate-600"><?= _t('comp_req_sub') ?></p>
            </div>

            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
              <!-- package icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 16V8a2 2 0 00-1-1.732l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.732l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3.27 6.96L12 12l8.73-5.04M12 22V12" />
              </svg>
            </span>
          </div>

          <div class="mt-5 grid gap-3">
            <div class="rounded-xl border border-slate-200 bg-white p-4">
              <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('comp_req_org') ?></p>
              <ul class="mt-2 space-y-2 text-sm text-slate-700">
                <li class="flex gap-2">
                  <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-emerald-50 text-emerald-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                  </span>
                  <?= _t('comp_req_org1') ?>
                </li>
                <li class="flex gap-2">
                  <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-emerald-50 text-emerald-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                  </span>
                  <?= _t('comp_req_org2') ?>
                </li>
              </ul>
            </div>

            <div class="rounded-xl border border-slate-200 bg-white p-4">
              <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('comp_req_comp') ?></p>
              <ul class="mt-2 space-y-2 text-sm text-slate-700">
                <li class="flex gap-2">
                  <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-amber-50 text-amber-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A9 9 0 1118 6.121M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                  </span>
                  <?= _t('comp_req_comp1') ?>
                </li>
              </ul>

              <p class="mt-3 text-xs text-slate-500">
                <?= _t('comp_req_note') ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>