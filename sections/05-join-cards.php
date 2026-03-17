<!-- SECTION 05: WHAT YOU CAN JOIN (4 Cards - Updated competition format) -->
<section id="join" class="w-full py-14 md:py-20">
  <!-- Full-width section, constrained content -->
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <!-- Heading -->
    <div class="max-w-4xl">
      <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('join_subtitle') ?></p>
      <h2 class="mt-2 font-heading text-2xl font-extrabold tracking-tight text-slate-900 md:text-4xl leading-tight">
        <?= _t('join_title') ?>
      </h2>
      <p class="mt-4 text-base text-slate-600 md:text-lg leading-relaxed">
        <?= _t('join_desc') ?>
      </p>
    </div>

    <!-- Cards -->
    <div class="mt-3 grid gap-4 items-stretch sm:grid-cols-2 lg:grid-cols-4">
      <!-- Competition -->
      <div class="flex h-full flex-col rounded-2xl border border-slate-200 bg-slate-50 p-6">
        <div class="flex items-start justify-between gap-3">
          <div>
            <p class="text-sm font-semibold text-slate-900"><?= _t('join_comp') ?></p>
            <p class="mt-1 text-lg font-extrabold tracking-tight text-slate-900">
              AUD$250
            </p>
            <p class="mt-1 text-xs font-semibold text-slate-600"><?= _t('join_comp_day') ?></p>
          </div>

          <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
            <!-- trophy icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 21h8m-4-4v4m-7-7h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v7a2 2 0 002 2zm2-9h10v3a5 5 0 01-10 0V5z"/>
            </svg>
          </span>
        </div>

        <div class="mt-4 flex-1">
          <p class="text-sm leading-relaxed text-slate-600">
            <?= _t('join_comp_desc') ?>
          </p>

          <a
            href="#competition"
            onclick="window.toggleMobileMenu && window.toggleMobileMenu(false);"
            class="mt-3 inline-flex items-center text-sm font-semibold text-slate-700 underline underline-offset-4 hover:text-slate-900"
          >
            <?= _t('join_comp_view') ?>
          </a>
        </div>

        <div class="mt-auto pt-6">
          <a
            onclick="window.toggleMobileMenu && window.toggleMobileMenu(false); (window.openRegister ? window.openRegister() : location.href='#register')"
            class="inline-flex w-full cursor-pointer items-center justify-center rounded-xl bg-[#071A37] px-4 py-2.5 text-sm font-semibold text-white hover:bg-slate-800"
          >
            <?= _t('join_comp_btn') ?>
          </a>
        </div>
      </div>

      <!-- Workshop -->
      <div class="flex h-full flex-col rounded-2xl border border-slate-200 bg-slate-50 p-6">
        <div class="flex items-start justify-between gap-3">
          <div>
            <p class="text-sm font-semibold text-slate-900"><?= _t('join_work') ?></p>
            <p class="mt-1 text-lg font-extrabold tracking-tight text-slate-900">AUD$299</p>
            <p class="mt-1 text-xs font-semibold text-slate-600"><?= _t('join_work_day') ?></p>
          </div>

          <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
            <!-- academic cap icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12v5c0 1.657 2.686 3 6 3s6-1.343 6-3v-5"/>
            </svg>
          </span>
        </div>

        <div class="mt-4 flex-1">
          <p class="text-sm leading-relaxed text-slate-600">
            <?= _t('join_work_desc') ?>
          </p>

          <span class="mt-3 inline-flex items-center text-sm font-semibold text-slate-500">
            <?= _t('join_work_soon') ?>
          </span>
        </div>

        <div class="mt-auto pt-6">
          <a
            onclick="window.toggleMobileMenu && window.toggleMobileMenu(false); (window.openRegister ? window.openRegister() : location.href='#register')"
            class="inline-flex w-full cursor-pointer items-center justify-center rounded-xl bg-[#071A37] px-4 py-2.5 text-sm font-semibold text-white hover:bg-slate-800"
          >
            <?= _t('join_work_btn') ?>
          </a>
        </div>
      </div>

      <!-- Official Shirt -->
      <div class="flex h-full flex-col rounded-2xl border border-slate-200 bg-slate-50 p-6">
        <div class="flex items-start justify-between gap-3">
          <div>
            <p class="text-sm font-semibold text-slate-900"><?= _t('join_shirt') ?></p>
            <p class="mt-1 text-lg font-extrabold tracking-tight text-slate-900">AUD$50</p>
          </div>

          <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
            <!-- tshirt icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 7l4-3 2 2h4l2-2 4 3-3 4v10a2 2 0 01-2 2H9a2 2 0 01-2-2V11L4 7z"/>
            </svg>
          </span>
        </div>

        <div class="mt-4 flex-1">
          <p class="text-sm leading-relaxed text-slate-600">
            <?= _t('join_shirt_desc') ?>
          </p>

          <a
            href="#shirt"
            onclick="window.toggleMobileMenu && window.toggleMobileMenu(false);"
            class="mt-3 inline-flex items-center text-sm font-semibold text-slate-700 underline underline-offset-4 hover:text-slate-900"
          >
            <?= _t('join_shirt_view') ?>
          </a>
        </div>

        <div class="mt-auto pt-6">
          <a
            onclick="window.toggleMobileMenu && window.toggleMobileMenu(false); (window.openRegister ? window.openRegister() : location.href='#register')"
            class="inline-flex w-full cursor-pointer items-center justify-center rounded-xl bg-[#071A37] px-4 py-2.5 text-sm font-semibold text-white hover:bg-slate-800"
          >
            <?= _t('join_shirt_btn') ?>
          </a>
        </div>
      </div>

      <!-- Dinner Event -->
      <div class="flex h-full flex-col rounded-2xl border border-slate-200 bg-slate-50 p-6">
        <div class="flex items-start justify-between gap-3">
          <div>
            <p class="text-sm font-semibold text-slate-900"><?= _t('join_dinner') ?></p>
            <p class="mt-1 text-lg font-extrabold tracking-tight text-slate-900">AUD$40</p>
            <p class="mt-1 text-xs font-semibold text-slate-600"><?= _t('join_dinner_day') ?></p>
          </div>

          <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
            <!-- sparkle icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 3l2 6 6 2-6 2-2 6-2-6-6-2 6-2 2-6zm14 4l1 3 3 1-3 1-1 3-1-3-3-1 3-1 1-3z"/>
            </svg>
          </span>
        </div>

        <div class="mt-4 flex-1 space-y-3">
          <p class="text-sm leading-relaxed text-slate-600">
            <?= _t('join_dinner_desc') ?>
          </p>

          <a
            href="#dinner"
            onclick="window.toggleMobileMenu && window.toggleMobileMenu(false);"
            class="mt-3 inline-flex items-center text-sm font-semibold text-slate-700 underline underline-offset-4 hover:text-slate-900"
          >
            <?= _t('join_dinner_view') ?>
          </a>
        </div>

        <div class="mt-auto pt-6">
          <a
            onclick="window.toggleMobileMenu && window.toggleMobileMenu(false); (window.openRegister ? window.openRegister() : location.href='#register')"
            class="inline-flex w-full cursor-pointer items-center justify-center rounded-xl bg-[#071A37] px-4 py-2.5 text-sm font-semibold text-white hover:bg-slate-800"
          >
            <?= _t('join_dinner_btn') ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>