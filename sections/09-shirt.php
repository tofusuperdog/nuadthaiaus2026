<!-- SECTION 09: OFFICIAL SHIRT (PC: table shown / Mobile: size chart expandable + compact cards) -->
<section id="shirt" class="w-full py-14 md:py-20">
  <!-- Full-width section, constrained content -->
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <!-- Heading -->
    <div>
      <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('shirt_subtitle') ?></p>
      <h2 class="mt-2 font-heading text-2xl font-extrabold tracking-tight text-slate-900 md:text-4xl leading-tight">
        <?= _t('shirt_title') ?>
      </h2>
      <p class="mt-4 text-base text-slate-600 md:text-lg leading-relaxed">
        <?= _t('shirt_desc') ?>
      </p>
    </div>

    <div class="mt-8 grid gap-8 lg:grid-cols-12 lg:items-stretch">
      <!-- Left: Image -->
      <div class="lg:col-span-5 flex-shrink-0">
        <figure class="relative w-full h-[450px] sm:h-[500px] lg:h-full lg:aspect-[4/5] overflow-hidden rounded-2xl border border-slate-200 bg-slate-50">
          <img
            src="/images/shirt-mockup.webp"
            alt="Official Shirt mockup"
            class="absolute inset-0 h-full w-full object-cover object-top"
            loading="lazy"
          />
          <div class="pointer-events-none absolute inset-0 bg-gradient-to-tr from-black/20 via-transparent to-white/10"></div>

          <figcaption class="absolute bottom-4 left-4 right-4">
            <div class="inline-flex items-center gap-2 rounded-xl border border-white/40 bg-white/80 px-3 py-2 backdrop-blur-md shadow-sm">
              <span class="inline-flex h-2 w-2 rounded-full bg-emerald-600 animate-pulse"></span>
              <p class="text-xs font-semibold text-slate-900"><?= _t('shirt_img_tag') ?></p>
            </div>
          </figcaption>
        </figure>
      </div>

      <!-- Right: Details -->
      <div class="lg:col-span-7 flex flex-col">
        <div class="flex flex-col h-full rounded-2xl border border-slate-200 bg-slate-50 overflow-hidden relative">
          
          <!-- Top info block -->
          <div class="flex-1 p-6 sm:p-8 flex flex-col gap-6">
            <div class="flex items-start justify-between gap-4">
              <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-slate-500"><?= _t('shirt_price_tag') ?></p>
                <p class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900"><?= _t('shirt_price_val') ?></p>
                <p class="mt-1 text-sm font-medium text-slate-600"><?= _t('shirt_price_sub') ?></p>
              </div>

              <span class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-[#E2C779] to-[#C8A24A] text-white shadow-sm ring-1 ring-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7l4-3 2 2h4l2-2 4 3-3 4v10a2 2 0 01-2 2H9a2 2 0 01-2-2V11L4 7z"/>
                </svg>
              </span>
            </div>

            <!-- Block: Sizes -->
            <div class="rounded-xl border border-slate-200/60 bg-white p-5 shadow-sm">
              <p class="text-sm font-bold text-slate-900 mb-3 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <?= _t('shirt_inc_0') ?>
              </p>
              <div class="grid grid-cols-2 gap-4">
                <div class="rounded-lg bg-slate-50 p-3 ring-1 ring-slate-100">
                  <p class="text-[13px] font-semibold text-slate-800 leading-relaxed"><?= _t('shirt_sizes_w') ?></p>
                </div>
                <div class="rounded-lg bg-slate-50 p-3 ring-1 ring-slate-100">
                  <p class="text-[13px] font-semibold text-slate-800 leading-relaxed"><?= _t('shirt_sizes_m') ?></p>
                </div>
              </div>
            </div>

            <!-- Block: Purchase details -->
            <div class="rounded-xl border border-slate-200/60 bg-white p-5 shadow-sm">
              <p class="text-sm font-bold text-slate-900 mb-3 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <?= _t('shirt_detail_title') ?>
              </p>
              <ul class="space-y-2">
                <li class="flex items-start gap-2">
                  <span class="mt-0.5 inline-flex h-4 w-4 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </span>
                  <span class="text-[13px] text-slate-700 leading-relaxed"><span class="font-semibold text-slate-800"><?= _t('shirt_detail_pickup_lbl') ?></span> <?= _t('shirt_detail_pickup') ?></span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="mt-0.5 inline-flex h-4 w-4 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </span>
                  <span class="text-[13px] text-slate-700 leading-relaxed"><span class="font-semibold text-slate-800"><?= _t('shirt_detail_purchase_lbl') ?></span> <?= _t('shirt_detail_purchase') ?></span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="mt-0.5 inline-flex h-4 w-4 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </span>
                  <span class="text-[13px] text-slate-700 leading-relaxed"><span class="font-semibold text-slate-800"><?= _t('shirt_detail_fit_lbl') ?></span> <?= _t('shirt_detail_fit') ?></span>
                </li>
                <li class="flex items-start gap-2">
                  <span class="mt-0.5 inline-flex h-4 w-4 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                  </span>
                  <span class="text-[13px] text-slate-700 leading-relaxed"><span class="font-semibold text-slate-800"><?= _t('shirt_detail_category_lbl') ?></span> <?= _t('shirt_detail_category') ?></span>
                </li>
              </ul>
            </div>

            <!-- Block: Note -->
            <div class="rounded-xl bg-slate-50 p-4 border border-slate-200/80 shadow-sm">
              <div class="flex gap-3">
                <span class="text-slate-500 flex-shrink-0 mt-0.5">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </span>
                <div>
                  <p class="text-[13px] font-bold text-slate-900"><?= _t('shirt_note_title') ?></p>
                  <p class="mt-0.5 text-[12px] text-slate-600 leading-relaxed"><?= _t('shirt_note_desc') ?></p>
                </div>
              </div>
            </div>
          </div>

          <!-- CTA block pinned to bottom -->
          <div class="border-t border-slate-200 bg-white p-6 sm:p-8 mt-auto">
            <button
              type="button"
              onclick="window.toggleMobileMenu && window.toggleMobileMenu(false); (window.openRegister ? window.openRegister() : location.href='#register')"
              class="inline-flex w-full items-center justify-center rounded-xl bg-slate-900 px-6 py-3.5 text-sm font-semibold text-white shadow-sm ring-1 ring-slate-900/10 transition-all hover:bg-slate-800 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2"
            >
              <?= _t('shirt_btn_add') ?>
            </button>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>