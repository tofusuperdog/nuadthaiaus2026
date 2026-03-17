<!-- SECTION 10: DINNER EVENT -->
<section id="dinner" class="w-full bg-white border-b border-slate-100 py-14 md:py-20">
  <!-- Full-width section, constrained content -->
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <!-- Heading -->
    <div class="max-w-5xl">
      <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('din_subtitle') ?></p>
      <h2 class="mt-2 font-heading text-2xl font-extrabold tracking-tight text-slate-900 md:text-4xl leading-tight">
        <?= _t('din_title') ?>
      </h2>
      <p class="mt-4 text-base text-slate-600 md:text-lg leading-relaxed">
        <?= _t('din_desc_1') ?> <span class="whitespace-nowrap"><?= _t('din_desc_2') ?></span>
      </p>
    </div>

    <div class="mt-8 grid gap-4 lg:grid-cols-12 lg:items-stretch">
      <!-- Left: What you get + dress code -->
      <div class="h-full rounded-2xl border border-slate-200 bg-slate-50 p-6 lg:col-span-7">
        <div class="flex items-start justify-between gap-4">
          <div>
            <p class="text-sm font-semibold text-slate-900"><?= _t('din_inc_title') ?></p>
            <p class="mt-1 text-sm text-slate-600"><?= _t('din_inc_desc') ?></p>
          </div>

          <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
            <!-- sparkles icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M19 13v4m-2-2h4M12 3l1.2 3.6L17 8l-3.8 1.4L12 13l-1.2-3.6L7 8l3.8-1.4L12 3z"/>
            </svg>
          </span>
        </div>

        <div class="mt-5 grid gap-3 sm:grid-cols-2">
          <div class="rounded-xl border border-slate-200 bg-white p-5">
            <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('din_food_tag') ?></p>
            <p class="mt-1 font-semibold text-slate-900"><?= _t('din_food_title') ?></p>
            <p class="mt-2 text-sm text-slate-600">
              <?= _t('din_food_desc') ?>
            </p>
          </div>

          <div class="rounded-xl border border-slate-200 bg-white p-5">
            <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('din_prog_tag') ?></p>
            <p class="mt-1 font-semibold text-slate-900"><?= _t('din_prog_title') ?></p>
            <p class="mt-2 text-sm text-slate-600">
              <?= _t('din_prog_desc') ?>
            </p>
          </div>
        </div>

        <!-- Dress code highlight -->
        <div class="mt-6 rounded-2xl border border-amber-200 bg-amber-50 p-5">
          <div class="flex items-start gap-3">
            <span class="mt-0.5 inline-flex h-9 w-9 items-center justify-center rounded-xl bg-amber-100 text-amber-700">
              <!-- exclamation icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v4m0 4h.01M10.29 3.86l-8.2 14.2A2 2 0 003.82 21h16.36a2 2 0 001.73-2.94l-8.2-14.2a2 2 0 00-3.42 0z"/>
              </svg>
            </span>

            <div>
              <p class="text-sm font-semibold text-slate-900"><?= _t('din_dress_title') ?></p>
              <p class="mt-1 text-sm text-slate-700">
                <?= _t('din_dress_desc1') ?>
                <span class="font-semibold text-slate-900"><?= _t('din_dress_desc2') ?></span>.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Price & time -->
      <div class="h-full lg:col-span-5">
        <div class="h-full rounded-2xl border border-slate-200 bg-slate-50 p-6 lg:flex lg:flex-col">
          <div class="flex items-start justify-between gap-4">
            <div>
              <p class="text-sm font-semibold text-slate-900"><?= _t('din_price_tag') ?></p>
              <p class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900"><?= _t('din_price_val') ?></p>
              <p class="mt-1 text-sm text-slate-600"><?= _t('din_price_sub') ?></p>
            </div>

            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
              <!-- clock icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </span>
          </div>

          <!-- Key info box -->
          <div class="mt-5 rounded-xl border border-slate-200 bg-white p-4">
            <div class="flex flex-col gap-1 text-sm text-slate-700">
              <p><span class="font-semibold text-slate-900"><?= _t('din_time_lbl') ?></span> <?= _t('din_time_val') ?></p>
              <p><span class="font-semibold text-slate-900"><?= _t('din_date_lbl') ?></span> <?= _t('din_date_val') ?></p>
              <p><span class="font-semibold text-slate-900"><?= _t('din_dress_lbl') ?></span> <?= _t('din_dress_val') ?></p>
            </div>
          </div>

          <!-- Quick highlights -->
          <ul class="mt-4 space-y-2 text-sm text-slate-600">
            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-emerald-50 text-emerald-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
              </span>
              <?= _t('din_hi_1') ?>
            </li>

            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-emerald-50 text-emerald-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
              </span>
              <?= _t('din_hi_2') ?>
            </li>

            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-emerald-50 text-emerald-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
              </span>
              <?= _t('din_hi_3') ?>
            </li>
          </ul>

          <div class="mt-auto pt-5">
              <a
              onclick="window.toggleMobileMenu && window.toggleMobileMenu(false); (window.openRegister ? window.openRegister() : location.href='#register')"
              class="inline-flex w-full items-center justify-center rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white hover:bg-slate-800 cursor-pointer"
            >
              <?= _t('din_btn_add') ?>
            </a>
          </div>
        </div>
      </div>
    </div>

  
  </div>
</section>