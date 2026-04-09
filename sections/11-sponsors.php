<!-- SECTION 11: SPONSORS -->
<section id="sponsors" class="w-full py-14 md:py-20">
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <!-- Heading -->
    <div class="max-w-2xl">
      <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('spon_subtitle') ?></p>
      <h2 class="mt-2 font-heading text-2xl font-extrabold tracking-tight text-slate-900 md:text-4xl leading-tight">
        <?= _t('spon_title') ?>
      </h2>
      <p class="mt-4 text-base text-slate-600 md:text-lg leading-relaxed">
        <?= _t('spon_desc') ?>
      </p>
    </div>

    <!-- PREMIUM -->
    <div class="mt-10">
      <div class="flex flex-wrap items-center justify-between gap-3">
        <div class="flex items-center gap-2">
          <h3 class="text-lg font-semibold text-slate-900"><?= _t('spon_prem_title') ?></h3>

          <button
            type="button"
            data-open-modal="modal-premium-benefits"
            class="ml-1 inline-flex items-center gap-2 rounded-full border border-amber-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-900 hover:bg-amber-50/60 focus:outline-none focus:ring-2 focus:ring-amber-200"
          >
            <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-100 text-amber-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
              </svg>
            </span>
            <?= _t('spon_prem_btn') ?>
          </button>

        </div>

        <span class="text-sm font-semibold text-slate-500"><?= _t('spon_prem_price') ?></span>
      </div>

      <!-- Premium frame -->
      <div class="mt-4 overflow-hidden rounded-2xl border border-amber-200 bg-amber-100 shadow-[0_10px_30px_-18px_rgba(245,158,11,0.6)]">
        <div class="grid grid-cols-2 gap-px md:grid-cols-4">
          <!-- Premium logos -->
          <div class="bg-white p-4 md:p-8">
            <a href="https://world-nuad-thai.com/" target="_blank" rel="noopener noreferrer">
              <div class="mx-auto flex h-24 items-center justify-center md:h-28">
                <img
                  src="/images/sponsors/premium-01.webp"
                  alt="World Nuad Thai"
                  class="max-h-20 w-auto object-contain md:max-h-28"
                  loading="lazy"
                />
              </div>
            </a>
          </div>

          <div class="bg-white p-4 md:p-8">
            <a href="https://zenwellnesscentre.com.au/" target="_blank" rel="noopener noreferrer">
              <div class="mx-auto flex h-24 items-center justify-center md:h-28">
                <img
                  src="/images/sponsors/premium-02.webp"
                  alt="Zen Wellness Centre"
                  class="max-h-20 w-auto object-contain md:max-h-28"
                  loading="lazy"
                />
              </div>
            </a>
          </div>

          <div class="bg-white p-4 md:p-8">
            <a href="https://juztbooking.com/" target="_blank" rel="noopener noreferrer">
              <div class="mx-auto flex h-24 items-center justify-center md:h-28">
                <img
                  src="/images/sponsors/premium-03.webp"
                  alt="JuztBooking"
                  class="max-h-20 w-auto object-contain md:max-h-22"
                  loading="lazy"
                />
              </div>
            </a>
          </div>

          <div class="bg-white p-4 md:p-8">
            <a href="https://www.facebook.com/people/Orchid-Thai-and-Remedial-Massage/61552296647524/" target="_blank" rel="noopener noreferrer">
              <div class="mx-auto flex h-24 items-center justify-center md:h-28">
                <img
                  src="/images/sponsors/premium-04.webp"
                  alt="Orchid Thai and Remedial Massage"
                  class="max-h-20 w-auto object-contain md:max-h-28"
                  loading="lazy"
                />
              </div>
            </a>
          </div>

          <div class="bg-white p-4 md:p-8">
            <a href="https://www.facebook.com/luxurythaimassagePtyLtd?mibextid=wwXIfr&rdid=hL5thb53KldPNXk4&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F12LQDqo4yRw%2F%3Fmibextid%3DwwXIfr#" target="_blank" rel="noopener noreferrer">
              <div class="mx-auto flex h-24 items-center justify-center md:h-28">
                <img
                  src="/images/sponsors/premium-05.webp"
                  alt="Luxury Thai Massage"
                  class="max-h-20 w-auto object-contain md:max-h-28"
                  loading="lazy"
                />
              </div>
            </a>
          </div>

          <!-- CTA Slot tile -->
            <div class="bg-white p-4 md:p-8">
            <!-- <a href="" target="_blank" rel="noopener noreferrer"> -->
              <div class="mx-auto flex h-24 items-center justify-center md:h-28">
                <img
                  src="/images/sponsors/premium-06.webp"
                  alt="Luxury Thai Massage"
                  class="max-h-20 w-auto object-contain md:max-h-28"
                  loading="lazy"
                />
              </div>
            </a>
          </div> 

          <div class="bg-white p-4 md:p-8">
            <div class="mx-auto flex h-24 items-center justify-center md:h-28">
              <img
                src="/images/sponsors/premium-07.webp"
                alt="Premium Sponsor"
                class="max-h-20 w-auto object-contain md:max-h-28"
                loading="lazy"
              />
            </div>
          </div>

          <div class="bg-white p-4 md:p-8">
            <a href="https://www.google.com/maps/place/Orchid+Massage+Therapy/@-35.3411109,143.5598612,17z/data=!3m1!4b1!4m6!3m5!1s0x6adb851957d254ef:0x5598e89c79aefda6!8m2!3d-35.3411109!4d143.5598612!16s%2Fg%2F11gs88p0jb!18m1!1e1?entry=ttu&g_ep=EgoyMDI2MDQwNS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">
              <div class="mx-auto flex h-24 items-center justify-center md:h-28">
                <img
                  src="/images/sponsors/premium-08.webp"
                  alt="Orchid Massage Therapy"
                  class="max-h-20 w-auto object-contain md:max-h-28"
                  loading="lazy"
                />
              </div>
            </a>
          </div>

          <div class="bg-white p-4 md:p-8">
            <a href="https://www.google.com/maps/place/%E0%B8%A8%E0%B8%B9%E0%B8%99%E0%B8%A2%E0%B9%8C%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B8%A3%E0%B8%B9%E0%B9%89%E0%B8%A8%E0%B8%B8%E0%B8%A0%E0%B8%81%E0%B8%A3%E0%B9%81%E0%B8%AD%E0%B8%99%E0%B8%94%E0%B9%8C%E0%B8%9A%E0%B8%AD%E0%B8%94%E0%B8%B5%E0%B9%89%E0%B8%AA%E0%B8%9B%E0%B8%B2/@13.751867,100.6279484,17z/data=!4m7!3m6!1s0x311d615fe603a609:0x8daf21700fe6ea83!4b1!8m2!3d13.7519831!4d100.6279102!16s%2Fg%2F11j6x5_l0h!18m1!1e1?entry=ttu&g_ep=EgoyMDI2MDQwNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">
              <div class="mx-auto flex h-24 items-center justify-center md:h-28">
                <img
                  src="/images/sponsors/premium-09.webp"
                  alt="ศูนย์การเรียนรู้ศุภกรแอนด์บอดี้สปา"
                  class="max-h-20 w-auto object-contain md:max-h-28"
                  loading="lazy"
                />
              </div>
            </a>
          </div>

          <div class="bg-white p-4 md:p-8">
            <a href="https://www.google.com/maps/place/Orathai+Massage/@-32.5925868,149.5860496,17z/data=!3m1!4b1!4m6!3m5!1s0x6b0e896b11fdfb59:0x15f58f05e95c190a!8m2!3d-32.5925868!4d149.5860496!16s%2Fg%2F11f9yxwcvh!18m1!1e1?entry=ttu&g_ep=EgoyMDI2MDQwNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">
              <div class="mx-auto flex h-24 items-center justify-center md:h-28">
                <img
                  src="/images/sponsors/premium-10.webp"
                  alt="Orathai Massage"
                  class="max-h-20 w-auto object-contain md:max-h-28"
                  loading="lazy"
                />
              </div>
            </a>
          </div>

          <!-- Empty Slot 1 -->
          <div class="bg-white p-4 md:p-8">
            <div class="mx-auto flex h-24 flex-col items-center justify-center gap-2 text-center md:h-28">
              <div class="rounded-xl border-2 border-dashed border-slate-200 bg-slate-50 px-3 py-2">
                <p class="text-xs font-semibold text-slate-700"><?= _t('spon_logo_ph') ?></p>
                <p class="mt-0.5 text-[11px] text-slate-500"><?= _t('spon_logo_sup_sub') ?></p>
              </div>
            </div>
          </div>

          <!-- Empty Slot 2 -->
          <div class="bg-white p-4 md:p-8">
            <div class="mx-auto flex h-24 flex-col items-center justify-center gap-2 text-center md:h-28">
              <div class="rounded-xl border-2 border-dashed border-slate-200 bg-slate-50 px-3 py-2">
                <p class="text-xs font-semibold text-slate-700"><?= _t('spon_logo_ph') ?></p>
                <p class="mt-0.5 text-[11px] text-slate-500"><?= _t('spon_logo_sup_sub') ?></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Bottom CTA bar -->
        <div class="border-t border-amber-200 bg-white">
          <a
            href="#"
            data-open-modal="modal-sponsor-contact"
            class="group flex items-center justify-center gap-3 px-6 py-5 text-center transition hover:bg-amber-50/40 focus:outline-none focus:ring-2 focus:ring-amber-200"
          >
            <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-[#C8A24A] text-white shadow-sm transition group-hover:scale-105">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </span>
            <div>
              <p class="text-sm font-semibold text-slate-900"><?= _t('spon_prem_cta_title') ?></p>
              <p class="mt-0.5 text-xs text-slate-600"><?= _t('spon_prem_cta_sub') ?></p>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- SUPPORTER -->
    <div class="mt-10">
      <div class="flex flex-wrap items-center justify-between gap-3">
        <div class="flex items-center gap-2">
          <h3 class="text-lg font-semibold text-slate-900"><?= _t('spon_sup_title') ?></h3>

          <button
            type="button"
            data-open-modal="modal-supporter-benefits"
            class="ml-1 inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-900 hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-slate-900/10"
          >
            <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-slate-100 text-slate-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
              </svg>
            </span>
            <?= _t('spon_sup_btn') ?>
          </button>

        </div>

        <span class="text-sm font-semibold text-slate-500"><?= _t('spon_sup_price') ?></span>
      </div>

      <div class="mt-4 overflow-hidden rounded-2xl border border-slate-200 bg-white">
        <div class="grid grid-cols-3 gap-px bg-slate-200 md:grid-cols-6">
          <?php for ($i = 0; $i < 6; $i++): ?>
            <div class="bg-white p-5 md:p-6 <?= $i >= 3 ? 'hidden md:block' : '' ?>">
              <div class="mx-auto flex h-20 flex-col items-center justify-center gap-2 text-center">
                <div class="rounded-xl border-2 border-dashed border-slate-200 bg-slate-50 px-3 py-2">
                  <p class="text-xs font-semibold text-slate-700"><?= _t('spon_logo_ph') ?></p>
                  <p class="mt-0.5 text-[11px] text-slate-500"><?= _t('spon_logo_sup_sub') ?></p>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>

        <div class="border-t border-slate-200 bg-white">
          <a
            href="#"
            data-open-modal="modal-sponsor-contact"
            class="group flex items-center justify-center gap-3 px-6 py-5 text-center transition hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-slate-900/10"
            aria-label="<?= _t('spon_sup_cta_title') ?>"
          >
            <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-[#C8A24A] text-white transition group-hover:scale-105">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </span>
            <div>
              <p class="text-sm font-semibold text-slate-900"><?= _t('spon_sup_cta_title') ?></p>
              <p class="mt-0.5 text-xs text-slate-600"><?= _t('spon_sup_cta_sub') ?></p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL: Sponsor Contact -->
  <div id="modal-sponsor-contact" class="fixed inset-0 z-50 hidden" aria-hidden="true">
    <div class="absolute inset-0 bg-black/40" data-close-modal></div>

    <div class="relative mx-auto flex min-h-full items-center justify-center p-3 sm:p-4">
      <div class="w-full max-w-[860px] overflow-hidden rounded-2xl bg-white shadow-xl">
        <div class="flex items-start justify-between gap-4 border-b border-slate-200 px-4 py-4 sm:px-5 sm:py-5">
          <div>
            <h4 class="mt-1 text-lg font-extrabold tracking-tight text-slate-900"><?= _t('spon_mod_contact_title') ?></h4>
            <p class="text-xs font tracking-widest text-slate-500"><?= _t('spon_mod_contact_sub') ?></p>
          </div>

          <button
            type="button"
            class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-slate-50 text-slate-700 hover:bg-slate-100"
            aria-label="Close"
            data-close-modal
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="px-4 py-4 sm:px-5 sm:py-5">
          <div class="grid gap-4 md:grid-cols-[1.15fr_0.85fr] md:items-stretch">
            <div>
              <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4 sm:p-5 h-full">
                <div class="flex items-center justify-between gap-3">
                  <p class="text-sm font-semibold text-slate-900"><?= _t('spon_mod_line') ?></p>
                  <span class="inline-flex items-center justify-center rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h8m-8 4h5m8-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                  </span>
                </div>

                <p class="mt-2 text-sm text-slate-600">
                  <?= _t('spon_mod_line_desc1') ?> <span class="font-semibold text-slate-900">Sinikan Suksipheng</span>.
                </p>

                <div class="mt-3 overflow-hidden rounded-xl border border-slate-200 bg-white p-3">
                  <img
                    src="/images/line-qr.webp"
                    alt="LINE QR code for sponsor contact"
                    class="mx-auto w-[72%] max-w-[280px] object-contain md:max-w-[300px]"
                    loading="lazy"
                  />
                </div>
              </div>
            </div>

            <div>
              <div class="rounded-2xl border border-slate-200 bg-white p-4 sm:p-5 h-full">
                <p class="text-sm font-semibold text-slate-900"><?= _t('spon_mod_phone') ?></p>
                  <?= _t('spon_mod_phone_desc1') ?>:

                <div class="mt-3 space-y-3">
                  <a
                    href="tel:0473916171"
                    class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white hover:bg-slate-800 whitespace-nowrap"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 17.72V21a2 2 0 01-2 2h-1C9.163 23 1 14.837 1 5V4a1 1 0 011-1h1z"/>
                    </svg>
                    Sinikan Suksipheng (Thai) 0473 916 171
                  </a>

                  <a
                    href="tel:0422943565"
                    class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-900 hover:bg-slate-50 whitespace-nowrap"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 17.72V21a2 2 0 01-2 2h-1C9.163 23 1 14.837 1 5V4a1 1 0 011-1h1z"/>
                    </svg>
                    Stuart Cooper (English) 0422 943 565
                  </a>
                </div>

           <div class="mt-4 hidden rounded-xl border border-slate-200 bg-slate-50 p-3 md:block">
  <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('spon_mod_tip_tag') ?></p>
  <p class="mt-1 text-sm text-slate-700">
    <?= _t('spon_mod_tip_desc') ?>
  </p>
</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- mobile-specific compact style helper -->
      <style>
        @media (max-width: 767px) {
          #modal-sponsor-contact .max-w-\[860px\] {
            max-width: 100%;
          }
          #modal-sponsor-contact .md\:grid-cols-\[1\.15fr_0\.85fr\] {
            display: grid;
            grid-template-columns: 1fr;
          }
        }
      </style>
    </div>
  </div>

  <!-- MODAL: Premium Benefits -->
  <div id="modal-premium-benefits" class="fixed inset-0 z-50 hidden" aria-hidden="true">
    <div class="absolute inset-0 bg-black/40" data-close-modal></div>

    <div class="relative mx-auto flex min-h-full max-w-2xl items-end p-4 sm:items-center">
      <div class="w-full overflow-hidden rounded-2xl bg-white shadow-xl">
        <div class="flex items-start justify-between gap-4 border-b border-slate-200 p-5">
          <div>
            <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('spon_mod_ben_tag') ?></p>
            <h4 class="mt-1 text-lg font-extrabold tracking-tight text-slate-900"><?= _t('spon_mod_prem_title') ?></h4>
            <p class="mt-1 text-sm text-slate-600"><?= _t('spon_mod_prem_price') ?></p>
          </div>

          <button
            type="button"
            class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-slate-50 text-slate-700 hover:bg-slate-100"
            aria-label="Close"
            data-close-modal
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="p-5">
          <ul class="space-y-3 text-sm text-slate-700">
            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-amber-100 text-amber-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </span>
              <?= _t('spon_mod_prem_1') ?>
            </li>

            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-amber-100 text-amber-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </span>
              <?= _t('spon_mod_prem_2') ?>
            </li>

            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-amber-100 text-amber-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </span>
              <?= _t('spon_mod_prem_3') ?>
            </li>
          </ul>

          <div class="mt-4 rounded-xl border border-amber-200 bg-amber-50/40 p-4">
            <p class="text-sm font-semibold text-slate-900"><?= _t('spon_mod_judge_title') ?></p>
            <p class="mt-1 text-sm text-slate-600">
              <?= _t('spon_mod_judge_desc') ?>
            </p>

            <ul class="mt-3 space-y-2 text-sm text-slate-700">
              <li class="flex"><span class="mr-2 shrink-0">•</span><span><?= _t('spon_mod_judge_1') ?></span></li>
              <li class="flex"><span class="mr-2 shrink-0">•</span><span><?= _t('spon_mod_judge_2') ?></span></li>
              <li class="flex"><span class="mr-2 shrink-0">•</span><span><?= _t('spon_mod_judge_3') ?></span></li>
              <li class="flex"><span class="mr-2 shrink-0">•</span><span><?= _t('spon_mod_judge_4') ?></span></li>
              <li class="flex"><span class="mr-2 shrink-0">•</span><span><?= _t('spon_mod_judge_5') ?></span></li>
              <li class="flex"><span class="mr-2 shrink-0">•</span><span><?= _t('spon_mod_judge_6') ?></span></li>
            </ul>

            <p class="mt-3 text-xs text-slate-500">
              <?= _t('spon_mod_judge_note') ?>
            </p>
          </div>

          <div class="mt-5 grid gap-3 sm:grid-cols-2">
            <button
              type="button"
              data-open-modal="modal-sponsor-contact"
              class="inline-flex w-full items-center justify-center rounded-xl bg-[#C8A24A] px-4 py-2.5 text-sm font-semibold text-white hover:opacity-95"
              data-close-modal
            >
              <?= _t('spon_btn_contact') ?>
            </button>

            <button
              type="button"
              class="inline-flex w-full items-center justify-center rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm font-semibold text-slate-900 hover:bg-slate-100"
              data-close-modal
            >
              <?= _t('spon_btn_close') ?>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL: Supporter Benefits -->
  <div id="modal-supporter-benefits" class="fixed inset-0 z-50 hidden" aria-hidden="true">
    <div class="absolute inset-0 bg-black/40" data-close-modal></div>

    <div class="relative mx-auto flex min-h-full max-w-2xl items-end p-4 sm:items-center">
      <div class="w-full overflow-hidden rounded-2xl bg-white shadow-xl">
        <div class="flex items-start justify-between gap-4 border-b border-slate-200 p-5">
          <div>
            <p class="text-xs font-semibold tracking-widest text-slate-500"><?= _t('spon_mod_ben_tag') ?></p>
            <h4 class="mt-1 text-lg font-extrabold tracking-tight text-slate-900"><?= _t('spon_mod_sup_title') ?></h4>
            <p class="mt-1 text-sm text-slate-600"><?= _t('spon_mod_sup_price') ?></p>
          </div>

          <button
            type="button"
            class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-slate-50 text-slate-700 hover:bg-slate-100"
            aria-label="Close"
            data-close-modal
          >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="p-5">
          <ul class="space-y-3 text-sm text-slate-700">
            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-emerald-50 text-emerald-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </span>
              <?= _t('spon_mod_sup_1') ?>
            </li>
            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-emerald-50 text-emerald-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </span>
              <?= _t('spon_mod_sup_2') ?>
            </li>
          </ul>

          <div class="mt-5 grid gap-3 sm:grid-cols-2">
            <button
              type="button"
              data-open-modal="modal-sponsor-contact"
              class="inline-flex w-full items-center justify-center rounded-xl bg-[#C8A24A] px-4 py-2.5 text-sm font-semibold text-white hover:opacity-95"
              data-close-modal
            >
              <?= _t('spon_btn_contact') ?>
            </button>

            <button
              type="button"
              class="inline-flex w-full items-center justify-center rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm font-semibold text-slate-900 hover:bg-slate-100"
              data-close-modal
            >
              <?= _t('spon_btn_close') ?>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Minimal JS: open/close modal -->
  <script>
    (function () {
      const openButtons = document.querySelectorAll("[data-open-modal]");
      const closeTargets = document.querySelectorAll("[data-close-modal]");

      function openModal(id) {
        const modal = document.getElementById(id);
        if (!modal) return;
        modal.classList.remove("hidden");
        modal.setAttribute("aria-hidden", "false");
        document.documentElement.classList.add("overflow-hidden");
        document.body.classList.add("overflow-hidden");
      }

      function closeModal(modal) {
        if (!modal) return;
        modal.classList.add("hidden");
        modal.setAttribute("aria-hidden", "true");
        document.documentElement.classList.remove("overflow-hidden");
        document.body.classList.remove("overflow-hidden");
      }

      openButtons.forEach((btn) => {
        btn.addEventListener("click", (e) => {
          if (btn.tagName === "A") e.preventDefault();
          const id = btn.getAttribute("data-open-modal");
          openModal(id);
        });
      });

      closeTargets.forEach((el) => {
        el.addEventListener("click", () => {
          const modal = el.closest(".fixed.inset-0.z-50");
          closeModal(modal);
        });
      });

      document.addEventListener("keydown", (e) => {
        if (e.key !== "Escape") return;
        const opened = document.querySelector(".fixed.inset-0.z-50:not(.hidden)");
        if (opened) closeModal(opened);
      });
    })();
  </script>
</section>