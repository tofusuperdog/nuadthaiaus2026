<!-- /public/sections/01-topbar.php -->
<header id="main-header" class="fixed top-0 z-50 w-full border-b border-transparent bg-transparent transition-all duration-300">
  <!-- Full-width background, constrained content -->
  <div class="mx-auto flex w-full max-w-screen-2xl items-center justify-between gap-3 px-4 py-3 sm:px-6 lg:px-8">
    <!-- Brand -->
    <a href="#top" class="flex items-center gap-3">
      <img
        src="/images/logo-event.svg"
        alt="World Nuad Thai Massage Championship of Australia 2026 - 1st"
        class="h-10 w-10 rounded-full object-contain shadow-soft bg-white p-0.5"
        loading="eager"
      />
      <div class="leading-tight">
        <div class="logo-title font-heading text-sm font-extrabold tracking-tight text-white md:text-base transition-colors">
          World Nuad Thai Massage Championship
        </div>
        <div class="logo-subtitle text-xs text-white/80 md:text-sm transition-colors">
          <?= _t('topbar_subtitle') ?>
        </div>
      </div>
    </a>

    <!-- Desktop nav (primary only) -->
    <nav class="hidden items-center gap-6 text-sm md:flex" aria-label="Primary navigation">
      <a class="nav-link text-white/80 hover:text-white transition-colors" href="#about"><?= _t('nav_about') ?></a>
      <a class="nav-link text-white/80 hover:text-white transition-colors" href="#competition"><?= _t('nav_comp') ?></a>
      <a class="nav-link text-white/80 hover:text-white transition-colors" href="#workshop"><?= _t('nav_ws') ?></a>
      <a class="nav-link text-white/80 hover:text-white transition-colors" href="#sponsors"><?= _t('nav_sponsors') ?></a>
      <a class="nav-link text-white/80 hover:text-white transition-colors" href="#contact"><?= _t('nav_contact') ?></a>
    </nav>

    <!-- Desktop actions -->
    <div class="hidden items-center gap-3 md:flex">
      
      <!-- Language Switcher -->
      <div class="flex items-center gap-1 rounded-full border border-white/20 bg-black/20 backdrop-blur-sm px-2 py-1 text-xs font-semibold" id="desktop-lang-switcher">
        <button type="button" onclick="switchLanguage('en')" class="<?= $current_lang === 'en' ? 'text-brand-ink bg-white rounded-full px-2 py-1 shadow-sm' : 'text-white/80 hover:text-white px-2 py-1 lang-btn-unselected' ?>">EN</button>
        <span class="text-white/40 lang-sep">|</span>
        <button type="button" onclick="switchLanguage('th')" class="<?= $current_lang === 'th' ? 'text-brand-ink bg-white rounded-full px-2 py-1 shadow-sm' : 'text-white/80 hover:text-white px-2 py-1 lang-btn-unselected' ?>">TH</button>
      </div>
      
      <script>
        function switchLanguage(lang) {
            // Log to console so user can see what's happening
            console.log('Switching language to:', lang);
            
            // if we have our fallback JS translator ready, use it immediately
            if (typeof window.doClientSideTranslation === 'function') {
                window.doClientSideTranslation(lang);
            } else {
                // Otherwise fallback to setting cookie and reloading
                document.cookie = "lang=" + lang + "; path=/; max-age=2592000; SameSite=Lax";
                setTimeout(() => {
                    const url = new URL(window.location.href);
                    url.searchParams.set('lang', lang);
                    url.hash = '';
                    window.location.href = url.toString();
                }, 50);
            }
        }
      </script>

      <a
        href="#pricing"
        class="btn-view-pricing rounded-2xl border border-white/20 bg-black/20 backdrop-blur-sm px-3 py-2 text-sm font-semibold text-white shadow-soft hover:bg-white/10 transition-colors"
      >
        <?= _t('btn_view_pricing') ?>
      </a>

      <button
        type="button"
        class="rounded-2xl bg-brand-gold px-4 py-2 text-sm font-semibold text-brand-ink shadow-soft hover:opacity-90 transition-opacity"
        onclick="window.openRegister && window.openRegister()"
      >
        <?= _t('btn_register') ?>
      </button>
    </div>

    <!-- Mobile hamburger -->
    <button
      type="button"
      class="btn-hamburger inline-flex items-center justify-center rounded-2xl border border-white/20 bg-black/20 backdrop-blur-sm p-2 shadow-soft hover:bg-white/10 md:hidden transition-colors"
      aria-label="Open menu"
      aria-controls="mobile-menu"
      aria-expanded="false"
      onclick="window.toggleMobileMenu ? window.toggleMobileMenu(true) : null"
    >
      <svg class="hamburger-icon text-white transition-colors" width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

  <!-- Mobile menu drawer -->
  <div id="mobile-menu" class="fixed inset-0 z-[60] hidden md:hidden" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <button
      type="button"
      class="fixed inset-0 bg-neutral-900/80"
      aria-label="Close menu"
      onclick="window.toggleMobileMenu ? window.toggleMobileMenu(false) : null"
    ></button>

    <!-- Panel -->
    <div class="absolute right-0 top-0 h-full w-full max-w-sm border-l border-brand-border bg-[#F7F3E8] shadow-2xl">
      <div class="flex items-center justify-between border-b border-brand-border bg-[#F7F3E8] px-4 py-4">
        
        <!-- Mobile Language Switcher -->
        <div class="flex items-center gap-1 rounded-full border border-brand-border bg-white px-2 py-1 text-xs font-semibold" id="mobile-lang-switcher">
          <button type="button" onclick="switchLanguage('en')" class="<?= $current_lang === 'en' ? 'text-brand-ink bg-[#F7F3E8] rounded-full px-2 py-1 shadow-sm' : 'text-brand-muted hover:text-brand-ink px-2 py-1' ?>">EN</button>
          <span class="text-brand-border">|</span>
          <button type="button" onclick="switchLanguage('th')" class="<?= $current_lang === 'th' ? 'text-brand-ink bg-[#F7F3E8] rounded-full px-2 py-1 shadow-sm' : 'text-brand-muted hover:text-brand-ink px-2 py-1' ?>">TH</button>
        </div>

        <button
          type="button"
          class="rounded-2xl border border-brand-border bg-white p-2 hover:bg-brand-bg"
          aria-label="Close menu"
          onclick="window.toggleMobileMenu ? window.toggleMobileMenu(false) : null"
        >
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </button>
      </div>

      <nav class="bg-[#F7F3E8] px-4 py-4 text-sm" aria-label="Mobile navigation">
        <!-- Same links as Desktop -->
        <a
          class="block rounded-2xl px-4 py-3 font-medium text-brand-ink hover:bg-white"
          href="#about"
          onclick="window.toggleMobileMenu && window.toggleMobileMenu(false)"
        ><?= _t('nav_about') ?></a>

        <a
          class="mt-1 block rounded-2xl px-4 py-3 font-medium text-brand-ink hover:bg-white"
          href="#competition"
          onclick="window.toggleMobileMenu && window.toggleMobileMenu(false)"
        ><?= _t('nav_comp') ?></a>

        <a
          class="mt-1 block rounded-2xl px-4 py-3 font-medium text-brand-ink hover:bg-white"
          href="#workshop"
          onclick="window.toggleMobileMenu && window.toggleMobileMenu(false)"
        ><?= _t('nav_ws') ?></a>

        <a
          class="mt-1 block rounded-2xl px-4 py-3 font-medium text-brand-ink hover:bg-white"
          href="#sponsors"
          onclick="window.toggleMobileMenu && window.toggleMobileMenu(false)"
        ><?= _t('nav_sponsors') ?></a>

        <a
          class="mt-1 block rounded-2xl px-4 py-3 font-medium text-brand-ink hover:bg-white"
          href="#contact"
          onclick="window.toggleMobileMenu && window.toggleMobileMenu(false)"
        ><?= _t('nav_contact') ?></a>

        <div class="mt-5 border-t border-brand-border pt-4">
          <div class="grid gap-2">
            <a
              class="rounded-2xl border border-brand-border bg-white px-4 py-3 text-center font-semibold text-brand-ink hover:bg-brand-bg"
              href="#pricing"
              onclick="window.toggleMobileMenu && window.toggleMobileMenu(false)"
            >
              <?= _t('btn_view_pricing') ?>
            </a>

            <button
              type="button"
              class="rounded-2xl bg-brand-gold px-4 py-3 font-semibold text-brand-ink shadow-soft hover:opacity-90"
              onclick="window.toggleMobileMenu && window.toggleMobileMenu(false); (window.openRegister ? window.openRegister() : location.href='#register')"
            >
              <?= _t('btn_register') ?>
            </button>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <style>
    /* Header scroll transitions */
    #main-header {
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    .header-scrolled {
      background-color: #000000 !important; /* solid black */
      -webkit-backdrop-filter: blur(12px) !important;
      border-color: rgba(255, 255, 255, 0.1) !important;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }
  </style>

  <script>
    window.addEventListener('scroll', () => {
      const header = document.getElementById('main-header');
      if (window.scrollY > 50) {
        header.classList.add('header-scrolled');
      } else {
        header.classList.remove('header-scrolled');
      }
    });
  </script>
</header>