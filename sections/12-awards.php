<!-- /public/sections/12-awards.php -->
<section id="awards" class="w-full bg-white border-b border-slate-100 py-14 md:py-20">
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <header class="max-w-3xl">
      <h2 class="font-heading text-2xl font-extrabold tracking-tight text-brand-ink md:text-3xl">
        <?= _t('awd_title') ?>
      </h2>
      <p class="mt-2 text-sm leading-6 text-brand-muted md:text-base">
        <?= _t('awd_desc') ?>
      </p>
    </header>

    <div class="mt-6 grid gap-4 lg:grid-cols-2 lg:items-stretch">
      <!-- Left: Competition Awards -->
      <div class="flex h-full flex-col rounded-3xl border border-brand-border bg-brand-surface p-6 shadow-soft">
        <div class="flex items-center justify-between gap-3">
          <div class="font-semibold text-brand-ink"><?= _t('awd_comp_title') ?></div>
          <span class="rounded-full bg-[#C8A24A] px-3 py-1 text-xs font-semibold text-white">
            <?= _t('awd_comp_tag') ?>
          </span>
        </div>

        <p class="mt-3 text-sm leading-6 text-brand-muted">
          <?= _t('awd_comp_desc') ?>
        </p>

        <div class="mt-4 grid flex-1 gap-3">
          <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
            <div class="font-medium text-brand-ink"><?= _t('awd_c1_title') ?></div>
            <p class="mt-1 text-sm text-brand-muted">
              <?= _t('awd_c1_desc') ?>
            </p>
          </div>

          <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
            <div class="font-medium text-brand-ink"><?= _t('awd_c2_title') ?></div>
            <p class="mt-1 text-sm text-brand-muted">
              <?= _t('awd_c2_desc') ?>
            </p>
          </div>

          <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
            <div class="font-medium text-brand-ink"><?= _t('awd_c3_title') ?></div>
            <p class="mt-1 text-sm text-brand-muted">
              <?= _t('awd_c3_desc') ?>
            </p>
          </div>

          <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
            <div class="font-medium text-brand-ink"><?= _t('awd_c4_title') ?></div>
            <p class="mt-1 text-sm text-brand-muted">
              <?= _t('awd_c4_desc') ?>
            </p>
          </div>

          <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
            <div class="font-medium text-brand-ink"><?= _t('awd_c5_title') ?></div>
            <p class="mt-1 text-sm text-brand-muted">
              <?= _t('awd_c5_desc') ?>
            </p>
          </div>
        </div>
      </div>

      <!-- Right: Final Prize + Special Recognition -->
      <div class="flex h-full flex-col gap-4">
        <!-- Final Prize Highlight -->
        <div class="flex flex-1 flex-col rounded-3xl border border-[#C8A24A] bg-[#FFF7E2] p-6 shadow-soft">
          <div class="flex items-start justify-between gap-3">
            <div class="flex items-center gap-3">
              <span class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-[#C8A24A] text-white shadow-sm">
                <!-- trophy icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 21h8m-4-4v4m-7-7h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v7a2 2 0 002 2zm2-9h10v3a5 5 0 01-10 0V5z"/>
                </svg>
              </span>

              <div>
                <div class="font-semibold text-brand-ink"><?= _t('awd_fin_title') ?></div>
                <div class="mt-1 text-xs font-semibold tracking-wide text-[#9A7A1F]">
                  <?= _t('awd_fin_tag1') ?>
                </div>
              </div>
            </div>

            <span class="rounded-full bg-[#C8A24A] px-3 py-1 text-xs font-semibold text-white">
              <?= _t('awd_fin_tag2') ?>
            </span>
          </div>

          <p class="mt-4 text-xl font-extrabold tracking-tight text-brand-ink md:text-2xl">
            <?= _t('awd_fin_title2') ?>
          </p>

          <p class="mt-2 text-sm leading-6 text-brand-muted">
            <?= _t('awd_fin_desc1') ?>
          </p>

          <div class="mt-4 rounded-2xl border border-[#E7D39A] bg-white/70 p-4">
            <div class="font-medium text-brand-ink"><?= _t('awd_fin_rec_title') ?></div>
            <p class="mt-2 text-sm leading-6 text-brand-muted">
              <?= _t('awd_fin_rec_desc') ?>
            </p>
          </div>
        </div>

        <!-- Special Recognition -->
        <div class="flex flex-1 flex-col rounded-3xl border border-brand-border bg-brand-surface p-6 shadow-soft">
          <div class="flex items-center justify-between gap-3">
            <div class="font-semibold text-brand-ink"><?= _t('awd_spec_title') ?></div>
            <span class="rounded-full bg-brand-bg px-3 py-1 text-xs font-semibold text-brand-ink">
              <?= _t('awd_spec_tag') ?>
            </span>
          </div>

          <p class="mt-3 text-sm leading-6 text-brand-muted">
            <?= _t('awd_spec_desc') ?>
          </p>

          <div class="mt-4 grid flex-1 gap-3">
            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="font-medium text-brand-ink"><?= _t('awd_s1_title') ?></div>
              <p class="mt-1 text-sm text-brand-muted">
                <?= _t('awd_s1_desc') ?>
              </p>
            </div>

            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="font-medium text-brand-ink"><?= _t('awd_s2_title') ?></div>
              <p class="mt-1 text-sm text-brand-muted">
                <?= _t('awd_s2_desc') ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>