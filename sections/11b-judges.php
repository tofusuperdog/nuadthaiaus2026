<!-- /sections/11b-judges.php -->
<section id="judges" class="w-full bg-brand-surface border-b border-brand-border py-14 md:py-20">
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <header class="max-w-3xl text-center mx-auto mb-10 md:mb-14">
      <p class="text-xs font-semibold tracking-widest text-[#C8A24A] uppercase"><?= _t('jdg_subtitle') ?></p>
      <h2 class="mt-2 font-heading text-2xl font-extrabold tracking-tight text-brand-ink md:text-4xl leading-tight">
        <?= _t('jdg_title') ?>
      </h2>
      <p class="mt-4 text-sm leading-6 text-brand-muted md:text-base">
        <?= _t('jdg_desc') ?>
      </p>
    </header>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 max-w-5xl mx-auto">
      <!-- Judge 1 -->
      <div class="flex flex-col items-center rounded-3xl border border-brand-border bg-white p-6 lg:p-8 shadow-soft text-center hover:shadow-md transition">
        <div class="mb-5 flex h-32 w-32 overflow-hidden rounded-full ring-4 ring-brand-bg shadow-sm">
          <img src="/images/judges1.webp" alt="<?= htmlspecialchars(_t('jdg_1_name')) ?>" class="h-full w-full object-cover" loading="lazy">
        </div>
        <h3 class="text-lg font-bold text-brand-ink"><?= _t('jdg_1_name') ?></h3>
        <p class="mt-1 text-sm font-medium text-[#C8A24A] bg-[#FFF7E2] px-3 py-1 rounded-full inline-block"><?= _t('jdg_1_role') ?></p>
      </div>

      <!-- Judge 2 -->
      <div class="flex flex-col items-center rounded-3xl border border-brand-border bg-white p-6 lg:p-8 shadow-soft text-center hover:shadow-md transition">
        <div class="mb-5 flex h-32 w-32 overflow-hidden rounded-full ring-4 ring-brand-bg shadow-sm">
          <img src="/images/judges1.webp" alt="<?= htmlspecialchars(_t('jdg_2_name')) ?>" class="h-full w-full object-cover" loading="lazy">
        </div>
        <h3 class="text-lg font-bold text-brand-ink"><?= _t('jdg_2_name') ?></h3>
        <p class="mt-1 text-sm font-medium text-[#C8A24A] bg-[#FFF7E2] px-3 py-1 rounded-full inline-block"><?= _t('jdg_2_role') ?></p>
      </div>

      <!-- Judge 3 -->
      <div class="flex flex-col items-center rounded-3xl border border-brand-border bg-white p-6 lg:p-8 shadow-soft text-center hover:shadow-md transition sm:col-span-2 lg:col-span-1 sm:mx-auto lg:mx-0 sm:w-1/2 lg:w-full">
        <div class="mb-5 flex h-32 w-32 overflow-hidden rounded-full ring-4 ring-brand-bg shadow-sm">
          <img src="/images/judges1.webp" alt="<?= htmlspecialchars(_t('jdg_3_name')) ?>" class="h-full w-full object-cover" loading="lazy">
        </div>
        <h3 class="text-lg font-bold text-brand-ink"><?= _t('jdg_3_name') ?></h3>
        <p class="mt-1 text-sm font-medium text-slate-500 bg-slate-100 px-3 py-1 rounded-full inline-block"><?= _t('jdg_3_role') ?></p>
      </div>
    </div>
  </div>
</section>
