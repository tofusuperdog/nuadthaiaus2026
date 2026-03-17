<!-- /public/sections/12-awards.php -->
<section id="awards" class="w-full bg-[#F3EBD1] py-14 md:py-20">
  <!-- Full-width section, constrained content -->
  <div class="mx-auto w-full max-w-screen-2xl px-4 sm:px-6 lg:px-8">
    <header class="flex flex-col gap-2">
      <h2 class="font-heading text-2xl font-extrabold tracking-tight text-brand-ink md:text-3xl">
        Awards
      </h2>
    </header>

    <div class="mt-6 grid gap-4 md:grid-cols-2">
      <!-- Per Category Awards (always NOT expandable) -->
      <div class="rounded-3xl border border-brand-border bg-brand-surface p-5 shadow-soft">
        <div class="font-semibold text-brand-ink">Per Category Awards</div>
        <div class="mt-1 text-sm text-brand-muted">Applies to each competition category.</div>

        <div class="mt-4 space-y-3 text-sm text-brand-ink">
          <!-- 1st -->
          <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
            <div class="flex items-start justify-between gap-3">
              <div class="font-semibold">Champion (1st Place)</div>
              <span class="rounded-full bg-[#7A1E2C] px-3 py-1 text-xs font-semibold text-white">1st</span>
            </div>
            <ul class="mt-2 list-disc space-y-1 pl-5 text-brand-muted">
              <li>Trophy</li>
              <li>Gold Certificate</li>
            </ul>
          </div>

          <!-- 2nd -->
          <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
            <div class="flex items-start justify-between gap-3">
              <div class="font-semibold">Runner-up (2nd Place)</div>
              <span class="rounded-full bg-brand-bg px-3 py-1 text-xs font-semibold text-brand-ink">2nd</span>
            </div>
            <ul class="mt-2 list-disc space-y-1 pl-5 text-brand-muted">
              <li>Silver Medal</li>
              <li>Certificate</li>
            </ul>
          </div>

          <!-- 3rd -->
          <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
            <div class="flex items-start justify-between gap-3">
              <div class="font-semibold">2nd Runner-up (3rd Place)</div>
              <span class="rounded-full bg-brand-bg px-3 py-1 text-xs font-semibold text-brand-ink">3rd</span>
            </div>
            <ul class="mt-2 list-disc space-y-1 pl-5 text-brand-muted">
              <li>Bronze Medal</li>
              <li>Certificate</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Special Awards -->
      <div class="rounded-3xl border border-brand-border bg-brand-surface p-5 shadow-soft">
        <!-- Desktop: NOT expandable -->
        <div class="hidden md:block">
          <div class="font-semibold text-brand-ink">Special Awards</div>
          <div class="mt-1 text-sm text-brand-muted">Extra recognitions for standout performance.</div>

          <div class="mt-4 space-y-3">
            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="font-semibold text-brand-ink">Best Technique Award</div>
              <div class="mt-1 text-sm text-brand-muted">Outstanding technical accuracy, flow, and body mechanics.</div>
            </div>

            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="font-semibold text-brand-ink">Best Performance / Presentation</div>
              <div class="mt-1 text-sm text-brand-muted">Professionalism, confidence, and overall presentation.</div>
            </div>

            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="font-semibold text-brand-ink">People’s Choice Award</div>
              <div class="mt-1 text-sm text-brand-muted">Audience-voted favorite (voting method to be confirmed).</div>
            </div>
          </div>
        </div>

        <!-- Mobile: expandable -->
        <details class="group md:hidden">
          <summary class="flex cursor-pointer list-none items-center justify-between gap-3">
            <div>
              <div class="font-semibold text-brand-ink">Special Awards</div>
              <div class="text-sm text-brand-muted">Tap to view</div>
            </div>
            <span class="grid h-10 w-10 place-items-center rounded-2xl border border-brand-border bg-brand-bg text-brand-ink">
              <svg class="h-5 w-5 transition-transform duration-200 group-open:rotate-180" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
          </summary>

          <div class="mt-4 space-y-3">
            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="font-semibold text-brand-ink">Best Technique Award</div>
              <div class="mt-1 text-sm text-brand-muted">Outstanding technical accuracy, flow, and body mechanics.</div>
            </div>

            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="font-semibold text-brand-ink">Best Performance / Presentation</div>
              <div class="mt-1 text-sm text-brand-muted">Professionalism, confidence, and overall presentation.</div>
            </div>

            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="font-semibold text-brand-ink">People’s Choice Award</div>
              <div class="mt-1 text-sm text-brand-muted">Audience-voted favorite (voting method to be confirmed).</div>
            </div>
          </div>
        </details>
      </div>
    </div>
  </div>
</section>