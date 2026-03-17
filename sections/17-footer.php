<!-- /public/sections/17-footer.php -->
<footer class="w-full border-t border-white/10 bg-black">
  <!-- Full-width footer, constrained content -->
  <div class="mx-auto w-full max-w-screen-2xl px-4 py-10 sm:px-6 lg:px-8">
    <div class="grid gap-8 md:grid-cols-3">
      <!-- Brand -->
      <div class="flex items-start gap-3">
        <img
          src="/images/logo-event.svg"
          alt="World Nuad Thai Massage Championship of Australia 2026 - 1st"
          class="h-10 w-10 rounded-full bg-white p-0.5 object-contain shadow-soft"
          loading="lazy"
        />
        <div>
          <div class="font-heading text-base font-extrabold text-white">
            <?= _t('ft_title') ?>
          </div>
          <div class="mt-1 text-sm text-white/60">
            <?= _t('ft_subtitle') ?>
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <div class="font-semibold text-white"><?= _t('ft_quick_links') ?></div>
        <div class="mt-3 grid grid-cols-2 gap-2 text-sm">
          <a class="text-white/60 hover:text-white transition-colors" href="#about"><?= _t('nav_about') ?></a>
          <a class="text-white/60 hover:text-white transition-colors" href="#competition"><?= _t('nav_comp') ?></a>
          <a class="text-white/60 hover:text-white transition-colors" href="#workshop"><?= _t('nav_ws') ?></a>
          <a class="text-white/60 hover:text-white transition-colors" href="#shirt"><?= _t('nav_shirt') ?></a>
          <a class="text-white/60 hover:text-white transition-colors" href="#dinner"><?= _t('nav_dinner') ?></a>
          <a class="text-white/60 hover:text-white transition-colors" href="#sponsors"><?= _t('nav_sponsors') ?></a>
          <a class="text-white/60 hover:text-white transition-colors" href="#awards"><?= _t('nav_awards') ?></a>
          <a class="text-white/60 hover:text-white transition-colors" href="#contact"><?= _t('nav_contact') ?></a>
        </div>
      </div>

      <!-- Social + Legal -->
      <div>
        <div class="font-semibold text-white"><?= _t('ft_social') ?></div>
        <div class="mt-3 flex flex-wrap gap-2 text-sm">
          <button
            type="button"
            class="rounded-2xl border border-white/20 bg-black/20 px-4 py-2 font-semibold text-white hover:bg-white/10 transition-colors"
            aria-label="Facebook coming soon"
            data-social-name="Facebook"
            onclick="window.openSocialComingSoon && window.openSocialComingSoon(this.dataset.socialName)"
          >
            Facebook
          </button>

          <button
            type="button"
            class="rounded-2xl border border-white/20 bg-black/20 px-4 py-2 font-semibold text-white hover:bg-white/10 transition-colors"
            aria-label="Instagram coming soon"
            data-social-name="Instagram"
            onclick="window.openSocialComingSoon && window.openSocialComingSoon(this.dataset.socialName)"
          >
            Instagram
          </button>

          <button
            type="button"
            class="rounded-2xl border border-white/20 bg-black/20 px-4 py-2 font-semibold text-white hover:bg-white/10 transition-colors"
            aria-label="YouTube coming soon"
            data-social-name="YouTube"
            onclick="window.openSocialComingSoon && window.openSocialComingSoon(this.dataset.socialName)"
          >
            YouTube
          </button>
        </div>

        <div class="mt-6 flex flex-wrap gap-3 text-xs text-white/60">
          <a class="hover:text-white transition-colors" href="/term.html" aria-label="Terms"><?= _t('ft_terms') ?></a>
          <span class="opacity-40">•</span>
          <a class="hover:text-white transition-colors" href="/privacy.html" aria-label="Privacy"><?= _t('ft_privacy') ?></a>
        </div>
      </div>
    </div>

    <div class="mt-8 flex flex-col gap-2 border-t border-white/10 pt-6 text-xs text-white/50 md:flex-row md:items-center md:justify-between">
      <div><?= _t('ft_rights') ?></div>
      <div>
        <?= _t('ft_design') ?>
        <a
          target="_blank"
          rel="noopener noreferrer"
          href="https://www.juztbooking.com"
          class="text-brand-gold hover:text-white transition-colors underline underline-offset-2"
        >
          JuztBooking
        </a>.
      </div>
    </div>
  </div>
</footer>

<!-- Social Coming Soon Modal -->
<div
  id="social-coming-soon-modal"
  class="fixed inset-0 z-[100] hidden"
  role="dialog"
  aria-modal="true"
  aria-labelledby="social-coming-soon-title"
>
  <!-- Backdrop -->
  <button
    type="button"
    class="absolute inset-0 bg-neutral-900/70"
    aria-label="Close social media popup"
    onclick="window.closeSocialComingSoon && window.closeSocialComingSoon()"
  ></button>

  <!-- Modal panel -->
  <div class="absolute inset-0 flex items-center justify-center px-4 py-6">
    <div class="relative w-full max-w-md rounded-3xl border border-brand-border bg-brand-surface p-6 shadow-soft">
      <button
        type="button"
        class="absolute right-4 top-4 rounded-2xl border border-brand-border bg-brand-bg p-2 text-brand-ink hover:bg-brand-surface"
        aria-label="Close popup"
        onclick="window.closeSocialComingSoon && window.closeSocialComingSoon()"
      >
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </svg>
      </button>

      <div class="pr-10">
        <div class="inline-flex rounded-full bg-brand-gold/20 px-3 py-1 text-xs font-semibold text-brand-ink">
          <?= _t('ft_soc_coming') ?>
        </div>

        <h3
          id="social-coming-soon-title"
          class="mt-4 font-heading text-2xl font-extrabold tracking-tight text-brand-ink"
        >
          <?= _t('ft_soc_coming_title') ?>
        </h3>

        <p class="mt-3 text-sm leading-6 text-brand-muted">
          <?= _t('ft_soc_coming_desc1') ?> <span id="social-coming-soon-name" class="font-semibold text-brand-ink">social media</span> <?= _t('ft_soc_coming_desc2') ?>
        </p>

        <div class="mt-5 rounded-2xl border border-brand-border bg-brand-bg p-4">
          <p class="text-sm text-brand-muted">
            <?= _t('ft_soc_meantime') ?>
            <a href="#contact" class="font-semibold text-brand-ink underline underline-offset-4">
              <?= _t('ft_soc_contact') ?>
            </a>
            <?= _t('ft_soc_support') ?>
          </p>
        </div>

        <div class="mt-6 flex justify-end">
          <button
            type="button"
            class="rounded-2xl bg-brand-gold px-5 py-3 text-sm font-semibold text-brand-ink shadow-soft hover:opacity-90"
            onclick="window.closeSocialComingSoon && window.closeSocialComingSoon()"
          >
            <?= _t('ft_soc_close') ?>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  (function () {
    const modal = document.getElementById('social-coming-soon-modal');
    const socialName = document.getElementById('social-coming-soon-name');

    window.openSocialComingSoon = function (name) {
      if (!modal) return;
      if (socialName && name) {
        socialName.textContent = name;
      }
      modal.classList.remove('hidden');
      document.body.classList.add('overflow-hidden');
    };

    window.closeSocialComingSoon = function () {
      if (!modal) return;
      modal.classList.add('hidden');
      document.body.classList.remove('overflow-hidden');
    };

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && modal && !modal.classList.contains('hidden')) {
        window.closeSocialComingSoon();
      }
    });
  })();
</script>