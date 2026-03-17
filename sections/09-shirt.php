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

    <div class="mt-8 grid gap-4 lg:grid-cols-12 lg:items-stretch">
      <!-- Left: Image -->
      <div class="h-full lg:col-span-5 lg:h-[760px]">
        <figure class="relative h-full overflow-hidden rounded-2xl border border-slate-200 bg-slate-50">
          <img
            src="/images/shirt-mockup.webp"
            alt="Official Shirt mockup"
            class="h-[320px] w-full object-cover sm:h-[380px] lg:h-full"
            loading="lazy"
          />
          <div class="pointer-events-none absolute inset-0 bg-gradient-to-tr from-black/10 via-transparent to-white/10"></div>

          <figcaption class="absolute bottom-4 left-4 right-4">
            <div class="inline-flex items-center gap-2 rounded-xl border border-white/40 bg-white/75 px-3 py-2 backdrop-blur">
              <span class="inline-flex h-2 w-2 rounded-full bg-emerald-600"></span>
              <p class="text-xs font-semibold text-slate-900"><?= _t('shirt_img_tag') ?></p>
            </div>
          </figcaption>
        </figure>
      </div>

      <!-- Right: Details + Size chart -->
      <div class="lg:col-span-7 h-full flex flex-col gap-4">
        <!-- Price + facts -->
        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
          <div class="flex items-start justify-between gap-4">
            <div>
              <p class="text-sm font-semibold text-slate-900"><?= _t('shirt_price_tag') ?></p>
              <p class="mt-3 text-2xl font-extrabold tracking-tight text-slate-900"><?= _t('shirt_price_val') ?></p>
              <p class="mt-1 text-sm text-slate-600"><?= _t('shirt_price_sub') ?></p>
            </div>

            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
              <!-- tshirt icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7l4-3 2 2h4l2-2 4 3-3 4v10a2 2 0 01-2 2H9a2 2 0 01-2-2V11L4 7z"/>
              </svg>
            </span>
          </div>

          <ul class="mt-5 space-y-2 text-sm text-slate-600">
            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-emerald-50 text-emerald-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
              </span>
              <?= _t('shirt_inc_1') ?>
            </li>

            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-emerald-50 text-emerald-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
              </span>
              <?= _t('shirt_inc_2') ?>
            </li>

            <li class="flex gap-2">
              <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-md bg-emerald-50 text-emerald-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
              </span>
              <?= _t('shirt_inc_3') ?>
            </li>
          </ul>

          <div class="mt-6">
            <a
              onclick="window.toggleMobileMenu && window.toggleMobileMenu(false); (window.openRegister ? window.openRegister() : location.href='#register')"
              class="inline-flex w-full items-center justify-center rounded-xl bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white hover:bg-slate-800 cursor-pointer"
            >
              <?= _t('shirt_btn_add') ?>
            </a>
          </div>
        </div>

        <!-- Size Chart container -->
        <div class="rounded-2xl border border-slate-200 bg-white">
          <!-- Header -->
          <div class="flex items-start justify-between gap-4 p-6">
            <div>
              <p class="text-sm font-semibold text-slate-900"><?= _t('shirt_size_title') ?></p>
              <p class="mt-1 text-sm text-slate-600"><?= _t('shirt_size_desc') ?></p>
            </div>

            <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-[#C8A24A] text-white">
              <!-- ruler icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 7h18M7 7v4M11 7v2M15 7v4M19 7v2M5 17h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2z"/>
              </svg>
            </span>
          </div>

          <!-- PC/TABLET: show table directly (not expandable) -->
          <div class="hidden md:block border-t border-slate-200 px-6 pb-6 pt-4">
            <div class="overflow-hidden rounded-xl border border-slate-200">
              <table class="w-full text-left text-sm">
                <thead class="bg-slate-50">
                  <tr>
                    <th class="py-3 px-4 text-xs font-semibold tracking-widest text-slate-500"><?= _t('shirt_th_size') ?></th>
                    <th class="py-3 px-4 text-xs font-semibold tracking-widest text-slate-500"><?= _t('shirt_th_chest') ?></th>
                    <th class="py-3 px-4 text-xs font-semibold tracking-widest text-slate-500"><?= _t('shirt_th_len') ?></th>
                    <th class="py-3 px-4 text-xs font-semibold tracking-widest text-slate-500"><?= _t('shirt_th_shoulder') ?></th>
                    <th class="py-3 px-4 text-xs font-semibold tracking-widest text-slate-500"><?= _t('shirt_th_sleeve') ?></th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 bg-white">
                  <tr>
                    <td class="py-3 px-4 font-semibold text-slate-900">S</td><td class="py-3 px-4">50</td><td class="py-3 px-4">68</td><td class="py-3 px-4">44</td><td class="py-3 px-4">20</td>
                  </tr>
                  <tr>
                    <td class="py-3 px-4 font-semibold text-slate-900">M</td><td class="py-3 px-4">53</td><td class="py-3 px-4">70</td><td class="py-3 px-4">46</td><td class="py-3 px-4">21</td>
                  </tr>
                  <tr>
                    <td class="py-3 px-4 font-semibold text-slate-900">L</td><td class="py-3 px-4">56</td><td class="py-3 px-4">72</td><td class="py-3 px-4">48</td><td class="py-3 px-4">22</td>
                  </tr>
                  <tr>
                    <td class="py-3 px-4 font-semibold text-slate-900">XL</td><td class="py-3 px-4">59</td><td class="py-3 px-4">74</td><td class="py-3 px-4">50</td><td class="py-3 px-4">23</td>
                  </tr>
                  <tr>
                    <td class="py-3 px-4 font-semibold text-slate-900">2XL</td><td class="py-3 px-4">62</td><td class="py-3 px-4">76</td><td class="py-3 px-4">52</td><td class="py-3 px-4">24</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <p class="mt-3 text-xs text-slate-500">
              <?= _t('shirt_tip') ?>
            </p>
          </div>

          <!-- MOBILE: expandable + compact size blocks -->
          <div class="md:hidden border-t border-slate-200">
            <details class="group">
              <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-6 py-4">
                <div>
                  <p class="text-sm font-semibold text-slate-900"><?= _t('shirt_mob_view') ?></p>
                  <p class="mt-1 text-xs text-slate-500"><?= _t('shirt_mob_tap') ?></p>
                </div>

                <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-slate-50 text-slate-700 transition group-open:rotate-180">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                  </svg>
                </span>
              </summary>

              <div class="px-6 pb-6">
                <div class="grid gap-2">
                  <div class="rounded-xl border border-slate-200 bg-slate-50 p-3">
                    <div class="flex items-center justify-between">
                      <p class="text-sm font-extrabold text-slate-900">S</p>
                      <span class="text-[11px] font-semibold text-slate-500">cm</span>
                    </div>
                    <div class="mt-2 grid grid-cols-2 gap-2">
                      <div class="rounded-lg bg-white px-3 py-2">
                        <p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_chest') ?></p>
                        <p class="mt-0.5 text-sm font-semibold text-slate-900">50</p>
                      </div>
                      <div class="rounded-lg bg-white px-3 py-2">
                        <p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_len') ?></p>
                        <p class="mt-0.5 text-sm font-semibold text-slate-900">68</p>
                      </div>
                      <div class="rounded-lg bg-white px-3 py-2">
                        <p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_shoulder') ?></p>
                        <p class="mt-0.5 text-sm font-semibold text-slate-900">44</p>
                      </div>
                      <div class="rounded-lg bg-white px-3 py-2">
                        <p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_sleeve') ?></p>
                        <p class="mt-0.5 text-sm font-semibold text-slate-900">20</p>
                      </div>
                    </div>
                  </div>

                  <div class="rounded-xl border border-slate-200 bg-slate-50 p-3">
                    <div class="flex items-center justify-between">
                      <p class="text-sm font-extrabold text-slate-900">M</p>
                      <span class="text-[11px] font-semibold text-slate-500">cm</span>
                    </div>
                    <div class="mt-2 grid grid-cols-2 gap-2">
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_chest') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">53</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_len') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">70</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_shoulder') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">46</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_sleeve') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">21</p></div>
                    </div>
                  </div>

                  <div class="rounded-xl border border-slate-200 bg-slate-50 p-3">
                    <div class="flex items-center justify-between">
                      <p class="text-sm font-extrabold text-slate-900">L</p>
                      <span class="text-[11px] font-semibold text-slate-500">cm</span>
                    </div>
                    <div class="mt-2 grid grid-cols-2 gap-2">
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_chest') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">56</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_len') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">72</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_shoulder') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">48</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_sleeve') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">22</p></div>
                    </div>
                  </div>

                  <div class="rounded-xl border border-slate-200 bg-slate-50 p-3">
                    <div class="flex items-center justify-between">
                      <p class="text-sm font-extrabold text-slate-900">XL</p>
                      <span class="text-[11px] font-semibold text-slate-500">cm</span>
                    </div>
                    <div class="mt-2 grid grid-cols-2 gap-2">
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_chest') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">59</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_len') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">74</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_shoulder') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">50</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_sleeve') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">23</p></div>
                    </div>
                  </div>

                  <div class="rounded-xl border border-slate-200 bg-slate-50 p-3">
                    <div class="flex items-center justify-between">
                      <p class="text-sm font-extrabold text-slate-900">2XL</p>
                      <span class="text-[11px] font-semibold text-slate-500">cm</span>
                    </div>
                    <div class="mt-2 grid grid-cols-2 gap-2">
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_chest') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">62</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_len') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">76</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_shoulder') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">52</p></div>
                      <div class="rounded-lg bg-white px-3 py-2"><p class="text-[11px] font-semibold text-slate-500"><?= _t('shirt_mob_sleeve') ?></p><p class="mt-0.5 text-sm font-semibold text-slate-900">24</p></div>
                    </div>
                  </div>
                </div>

                <p class="mt-3 text-xs text-slate-500">
                  <?= _t('shirt_tip') ?>
                </p>
              </div>
            </details>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>