<!-- SECTION 06: PRICING SUMMARY (Short) -->
<section id="pricing" class="w-full bg-white border-b border-slate-100 py-12 md:py-16">
  <!-- Full-width section, constrained content -->
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <!-- Heading -->
    <div class="max-w-2xl">
      <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('price_subtitle') ?></p>
      <h2 class="mt-2 font-heading text-2xl font-extrabold tracking-tight text-slate-900 md:text-4xl leading-tight">
        <?= _t('price_title') ?>
      </h2>
      <p class="mt-3 text-base text-slate-600 md:text-lg leading-relaxed">
        <?= _t('price_desc') ?>
      </p>

      <!-- Note: Special Show moved to Opening (Day 1) -->
      <!-- <div class="mt-4 inline-flex items-start gap-2 rounded-xl border border-slate-200 bg-white px-4 py-3">
        <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-[#C8A24A] text-white text-xs">i</span>
        <p class="text-sm leading-relaxed text-slate-700">
          <span class="font-semibold text-slate-900">Special Show</span> will take place during the
          <span class="font-semibold text-slate-900">Opening Session (Day 1)</span>.
        </p>
      </div> -->

      <div class="mt-3 inline-flex items-start gap-2 rounded-xl px-4">
      </div>
    </div>

    <!-- Layout: Desktop 70/30 (left pricing / right image) -->
    <div class="mt-3 grid gap-8 lg:grid-cols-10 lg:items-start">
      <!-- LEFT: Pricing (70%) -->
      <div class="lg:col-span-7">
        <!-- Pricing Grid -->
        <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Competition -->
          <div class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4">
            <p class="text-sm font-semibold text-slate-900"><?= _t('price_comp') ?></p>
            <div class="mt-1 flex items-baseline gap-2">
              <p class="text-2xl font-extrabold tracking-tight text-slate-900">AUD$250</p>
            </div>
            <p class="mt-1 text-xs text-slate-500"><?= _t('price_comp_multi') ?></p>
           
          </div>

          <!-- Workshop -->
          <div class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4">
            <p class="text-sm font-semibold text-slate-900"><?= _t('price_work') ?></p>
            <div class="mt-1 flex items-baseline gap-2">
              <p class="text-2xl font-extrabold tracking-tight text-slate-900">AUD$299</p>
              <p class="text-sm text-slate-600"><?= _t('price_work_day') ?></p>
            </div>
            <p class="mt-1 text-xs text-slate-500"><?= _t('price_work_tba') ?></p>
          </div>

          <!-- Shirt -->
          <div class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4">
            <p class="text-sm font-semibold text-slate-900"><?= _t('price_shirt') ?></p>
            <div class="mt-1 flex items-baseline gap-2">
              <p class="text-2xl font-extrabold tracking-tight text-slate-900">AUD$50</p>
              <p class="text-sm text-slate-600"><?= _t('price_shirt_uni') ?></p>
            </div>
            <p class="mt-1 text-xs text-slate-500"><?= _t('price_shirt_size') ?></p>
          </div>

          <!-- Dinner Event -->
          <div class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 sm:col-span-2 lg:col-span-1">
            <p class="text-sm font-semibold text-slate-900"><?= _t('price_din') ?></p>
            <div class="mt-1 flex items-baseline gap-2">
              <p class="text-2xl font-extrabold tracking-tight text-slate-900">AUD$40</p>
              <p class="text-sm text-slate-600"><?= _t('price_din_din') ?></p>
            </div>
            <p class="mt-1 text-xs text-slate-600">
              <?= _t('price_din_req') ?> <span class="font-semibold text-slate-900"><?= _t('price_din_pack') ?></span>
            </p>
          </div>

          <!-- Sponsorship -->
          <div class="rounded-2xl border border-slate-200 bg-slate-50 px-5 py-4 sm:col-span-2 lg:col-span-2">
            <div class="flex items-center justify-between gap-4">
              <p class="text-sm font-semibold text-slate-900"><?= _t('price_spon') ?></p>
              <a
                href="#sponsors"
                class="text-xs font-semibold text-slate-700 underline underline-offset-4 hover:text-slate-900"
              >
                <?= _t('price_spon_view') ?>
              </a>
            </div>

            <div class="mt-3 grid gap-3 sm:grid-cols-2">
              <div class="rounded-xl border border-slate-200 bg-white px-4 py-3">
                <p class="text-[11px] font-semibold tracking-widest text-slate-500"><?= _t('price_spon_sup') ?></p>
                <p class="mt-1 text-xl font-extrabold tracking-tight text-slate-900">AUD$70</p>
              </div>

              <div class="rounded-xl border border-slate-200 bg-white px-4 py-3">
                <p class="text-[11px] font-semibold tracking-widest text-slate-500"><?= _t('price_spon_pre') ?></p>
                <p class="mt-1 text-xl font-extrabold tracking-tight text-slate-900">AUD$250</p>
              </div>
            </div>
          </div>
        </div>

        <!-- CTA -->
        <div class="mt-7 flex flex-col gap-3 sm:flex-row sm:items-center">
          <a
            onclick="window.toggleMobileMenu && window.toggleMobileMenu(false); (window.openRegister ? window.openRegister() : location.href='#register')"
            class="inline-flex cursor-pointer items-center justify-center rounded-xl bg-slate-900 px-5 py-3 text-sm font-semibold text-white hover:bg-slate-800"
          >
            <?= _t('price_btn_reg') ?>
          </a>

          <a
            href="#join"
            class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-900 hover:bg-slate-50"
          >
            <?= _t('price_btn_join') ?>
          </a>
        </div>
      </div>

      <!-- RIGHT: Image (30%) - hidden on mobile -->
      <div class="hidden lg:col-span-3 lg:block">
        <div class="h-[265px] rounded-3xl border border-slate-100 bg-white p-4 shadow-sm">
          <div class="h-full overflow-hidden rounded-xl bg-slate-100">
            <img
              src="/images/price.webp"
              alt="World Nuad Thai Massage Championship of Australia 2026 - 1st official website"
              class="block h-full w-full object-cover"
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>