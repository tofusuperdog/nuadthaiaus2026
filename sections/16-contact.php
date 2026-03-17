<!-- /public/sections/16-contact.php -->
<section id="contact" class="w-full py-12 md:py-14">
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <header class="flex flex-col gap-2">
      <h2 class="font-heading text-2xl font-extrabold tracking-tight text-brand-ink md:text-3xl">
        <?= _t('con_title') ?>
      </h2>
      <p class="max-w-4xl text-sm text-brand-muted">
        <?= _t('con_desc_1') ?> <span class="whitespace-nowrap"><?= _t('con_desc_2') ?></span>
      </p>
    </header>

    <div class="mt-6 grid gap-4 lg:grid-cols-2">
      <!-- LINE Contact -->
      <div class="rounded-3xl border border-brand-border bg-brand-surface p-5 shadow-soft">
        <div class="flex items-start justify-between gap-4">
          <div>
            <div class="font-semibold text-brand-ink"><?= _t('con_line_title') ?></div>
            <div class="mt-1 text-sm text-brand-muted">
              <?= _t('con_line_desc_1') ?> <span class="font-semibold text-brand-ink">Sinikan Suksipheng</span> <span class="whitespace-nowrap"><?= _t('con_line_desc_2') ?></span>
            </div>
          </div>
          <span class="rounded-full bg-brand-bg px-3 py-1 text-xs font-semibold text-brand-ink">
            <?= _t('con_pref') ?>
          </span>
        </div>

        <div class="mt-8 rounded-2xl border border-brand-border bg-brand-bg p-4">
          <div class="text-center text-xs text-brand-muted"><?= _t('con_line_qr_title') ?></div>

          <div class="mt-3 flex justify-center">
            <img
              src="/images/line-qr.webp"
              alt="LINE QR code to contact Sinikan Suksipheng"
              class="w-full max-w-[320px] max-h-[450px] rounded-2xl border border-brand-border bg-white object-contain p-3"
              loading="lazy"
            />
          </div>

          <p class="mt-3 text-center text-xs text-brand-muted">
            <?= _t('con_line_qr_desc') ?>
          </p>
        </div>
      </div>

      <!-- Phone + Email -->
      <div class="flex flex-col gap-4">
        <!-- Phone Contact -->
        <div class="rounded-3xl border border-brand-border bg-brand-surface p-5 shadow-soft">
          <div class="flex items-start justify-between gap-4">
            <div>
              <div class="font-semibold text-brand-ink"><?= _t('con_phone_title') ?></div>
              <div class="mt-1 text-sm text-brand-muted">
                <?= _t('con_phone_desc') ?>
              </div>
            </div>
            <span class="rounded-full bg-brand-gold/20 px-3 py-1 text-xs font-semibold text-brand-ink">
              <?= _t('con_direct') ?>
            </span>
          </div>

          <div class="mt-5 rounded-2xl border border-brand-border bg-brand-bg p-4">
            <div class="text-xs text-brand-muted"><?= _t('con_contact_person') ?></div>
            <div class="mt-1 font-semibold text-brand-ink">Sinikan Suksipheng & Stuart Cooper</div>

            <div class="mt-4 text-xs text-brand-muted"><?= _t('con_phone_lbl') ?></div>
            <div class="mt-2 flex flex-col gap-2">
              <a
                class="inline-block font-semibold text-brand-ink underline decoration-brand-border underline-offset-4 hover:opacity-80"
                href="tel:0473916171"
              >
                Sinikan Suksipheng (Thai) 0473 916 171
              </a>

              <a
                class="inline-block font-semibold text-brand-ink underline decoration-brand-border underline-offset-4 hover:opacity-80"
                href="tel:0422943565"
              >
                Stuart Cooper (English) 0422 943 565
              </a>
            </div>
          </div>
        </div>

        <!-- Email Contact -->
        <div class="rounded-3xl border border-brand-border bg-brand-surface p-5 shadow-soft">
          <div class="font-semibold text-brand-ink"><?= _t('con_email_title') ?></div>
          <p class="mt-2 text-sm leading-6 text-brand-muted">
            <?= _t('con_email_desc') ?>
          </p>

          <div class="mt-4 space-y-3">
            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="text-xs text-brand-muted"><?= _t('con_th_email') ?></div>
              <a
                class="mt-1 block font-semibold text-brand-ink underline decoration-brand-border underline-offset-4 hover:opacity-80 break-all"
                href="mailto:kantsiniklxreiy@gmail.com"
              >
                kantsiniklxreiy@gmail.com
              </a>
            </div>

            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="text-xs text-brand-muted"><?= _t('con_en_email') ?></div>
              <a
                class="mt-1 block font-semibold text-brand-ink underline decoration-brand-border underline-offset-4 hover:opacity-80 break-all"
                href="mailto:stuart.cooper@gmail.com"
              >
                stuart.cooper@gmail.com
              </a>
            </div>
          </div>

       
        </div>
      </div>
    </div>

    <!-- Response Time -->
    <div class="mt-4 rounded-3xl border border-brand-border bg-brand-surface p-5 shadow-soft">
      <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
        <div>
          <div class="font-semibold text-brand-ink"><?= _t('con_resp_title') ?></div>
          <div class="mt-1 text-sm text-brand-muted">
            <?= _t('con_resp_desc') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>