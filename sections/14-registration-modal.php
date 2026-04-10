<!-- /public/sections/14-registration-modal.php -->
<div
  id="register-modal"
  class="fixed inset-0 z-[90] hidden"
  role="dialog"
  aria-modal="true"
  aria-labelledby="register-modal-title">
  <!-- Backdrop -->
  <button
    type="button"
    class="fixed inset-0 bg-neutral-900/70"
    aria-label="Close registration"
    onclick="window.closeRegister ? window.closeRegister() : null"></button>

  <!-- Modal panel -->
  <div class="fixed inset-0 grid place-items-center px-4 py-4 md:py-6">
    <div class="w-full max-w-[918px] overflow-hidden rounded-3xl border border-brand-border bg-brand-surface shadow-soft">
      <!-- Header -->
      <div class="flex items-start justify-between gap-4 border-b border-brand-border px-4 py-3 md:px-5">
        <div>
          <h3 id="register-modal-title" class="font-heading text-base font-extrabold text-brand-ink md:text-lg">
            <?= _t('reg_mod_title') ?>
          </h3>
        </div>

        <button
          type="button"
          class="rounded-2xl border border-brand-border bg-brand-bg p-2 hover:bg-brand-surface"
          aria-label="Close"
          onclick="window.closeRegister ? window.closeRegister() : null">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          </svg>
        </button>
      </div>

      <!-- Body -->
      <div class="grid gap-0 md:grid-cols-[1fr_280px]">
        <!-- Left: Steps -->
        <div class="max-h-[82vh] overflow-y-auto px-4 py-4 md:px-5 md:py-5">
          <div class="hidden lg:block">
            <img src="../images/justBanner.webp" alt="juztbooking banner" class="h-24 w-full object-cover">
          </div>
          <div class="lg:hidden">
            <img src="../images/justBanner2.webp" alt="juztbooking banner" class="w-full">
          </div>

          <!-- Stepper -->
          <div class="my-4 flex items-center gap-2">
            <div class="flex flex-col items-center gap-1 md:flex-row md:gap-2 text-center">
              <span id="reg-step-dot-1" class="grid h-7 w-7 place-items-center rounded-full bg-brand-gold text-xs font-extrabold text-brand-ink">1</span>
              <span id="reg-step-label-1" class="text-[11px] md:text-xs font-semibold text-brand-ink whitespace-nowrap"><?= _t('reg_step1') ?></span>
            </div>
            <span class="h-[1px] flex-1 bg-brand-border"></span>
            <div class="flex flex-col items-center gap-1 md:flex-row md:gap-2 text-center">
              <span id="reg-step-dot-2" class="grid h-7 w-7 place-items-center rounded-full border border-brand-border bg-brand-bg text-xs font-extrabold text-brand-ink">2</span>
              <span id="reg-step-label-2" class="text-[11px] md:text-xs font-semibold text-brand-muted whitespace-nowrap"><?= _t('reg_step2') ?></span>
            </div>
            <span class="h-[1px] flex-1 bg-brand-border"></span>
            <div class="flex flex-col items-center gap-1 md:flex-row md:gap-2 text-center">
              <span id="reg-step-dot-3" class="grid h-7 w-7 place-items-center rounded-full border border-brand-border bg-brand-bg text-xs font-extrabold text-brand-ink">3</span>
              <span id="reg-step-label-3" class="text-[11px] md:text-xs font-semibold text-brand-muted whitespace-nowrap"><?= _t('reg_step3') ?></span>
            </div>
          </div>

          <!-- FORM -->
          <form id="reg-form" class="space-y-4">
            <!-- STEP 1 -->
            <section id="reg-step-1" class="space-y-3">
              <div class="rounded-2xl border border-brand-border bg-brand-bg p-3 md:p-4">
                <div class="text-sm font-semibold text-brand-ink"><?= _t('reg_s1_title') ?></div>
                <p class="mt-1 text-xs text-brand-muted">
                  <?= _t('reg_s1_desc') ?>
                </p>
              </div>

              <div class="grid gap-2 md:grid-cols-2">
                <div>
                  <label class="text-xs font-semibold text-brand-ink" for="reg-fullname"><?= _t('reg_lbl_name') ?></label>
                  <input id="reg-fullname" name="fullName" type="text" required
                    class="mt-1 w-full rounded-xl border border-brand-border bg-white px-3 py-2 text-sm outline-none focus:border-brand-gold"
                    placeholder="<?= _t('reg_ph_name') ?>" />
                </div>

                <div>
                  <label class="text-xs font-semibold text-brand-ink" for="reg-email"><?= _t('reg_lbl_email') ?></label>
                  <input id="reg-email" name="email" type="email" required
                    class="mt-1 w-full rounded-xl border border-brand-border bg-white px-3 py-2 text-sm outline-none focus:border-brand-gold"
                    placeholder="<?= _t('reg_ph_email') ?>" />
                </div>

                <div>
                  <label class="text-xs font-semibold text-brand-ink" for="reg-phone"><?= _t('reg_lbl_phone') ?></label>
                  <input id="reg-phone" name="phone" type="tel" required
                    class="mt-1 w-full rounded-xl border border-brand-border bg-white px-3 py-2 text-sm outline-none focus:border-brand-gold"
                    placeholder="<?= _t('reg_ph_phone') ?>" />
                </div>

                <div class="md:col-span-2">
                  <label class="text-xs font-semibold text-brand-ink" for="reg-address"><?= _t('reg_lbl_address') ?></label>
                  <input id="reg-address" name="address" type="text" required
                    class="mt-1 w-full rounded-xl border border-brand-border bg-white px-3 py-2 text-sm outline-none focus:border-brand-gold"
                    placeholder="<?= _t('reg_ph_address') ?>" />
                </div>

                <div>
                  <label class="text-xs font-semibold text-brand-ink" for="reg-suburb"><?= _t('reg_lbl_suburb') ?></label>
                  <input id="reg-suburb" name="suburb" type="text" required
                    class="mt-1 w-full rounded-xl border border-brand-border bg-white px-3 py-2 text-sm outline-none focus:border-brand-gold"
                    placeholder="<?= _t('reg_ph_suburb') ?>" />
                </div>

                <div>
                  <label class="text-xs font-semibold text-brand-ink" for="reg-city"><?= _t('reg_lbl_city') ?></label>
                  <input id="reg-city" name="city" type="text"
                    class="mt-1 w-full rounded-xl border border-brand-border bg-white px-3 py-2 text-sm outline-none focus:border-brand-gold"
                    placeholder="<?= _t('reg_ph_city') ?>" />
                </div>

                <div>
                  <label class="text-xs font-semibold text-brand-ink" for="reg-state"><?= _t('reg_lbl_state') ?></label>
                  <select id="reg-state" name="state"
                    class="mt-1 w-full rounded-xl border border-brand-border bg-white pl-3 pr-8 py-2 text-sm outline-none focus:border-brand-gold">
                    <option value="" selected><?= _t('reg_opt_select') ?></option>
                    <option>VIC</option>
                    <option>NSW</option>
                    <option>QLD</option>
                    <option>WA</option>
                    <option>SA</option>
                    <option>TAS</option>
                    <option>ACT</option>
                    <option>NT</option>
                  </select>
                </div>

                <div>
                  <label class="text-xs font-semibold text-brand-ink" for="reg-postcode"><?= _t('reg_lbl_postcode') ?></label>
                  <input id="reg-postcode" name="postcode" type="text" required
                    class="mt-1 w-full rounded-xl border border-brand-border bg-white px-3 py-2 text-sm outline-none focus:border-brand-gold"
                    placeholder="<?= _t('reg_ph_postcode') ?>" />
                </div>

                <div>
                  <label class="text-xs font-semibold text-brand-ink" for="reg-country"><?= _t('reg_lbl_country') ?></label>
                  <input id="reg-country" name="country" type="text" required value="Australia"
                    class="mt-1 w-full rounded-xl border border-brand-border bg-white px-3 py-2 text-sm outline-none focus:border-brand-gold" />
                </div>
              </div>

              <div class="mt-4 flex items-center justify-end gap-2">
                <button
                  type="button"
                  id="reg-next-1"
                  class="rounded-xl bg-brand-gold px-4 py-2.5 text-sm font-semibold text-brand-ink shadow-soft hover:opacity-90">
                  <?= _t('reg_btn_continue') ?>
                </button>
              </div>
            </section>

            <!-- STEP 2 -->
            <section id="reg-step-2" class="hidden space-y-3">
              <div class="rounded-2xl border border-brand-border bg-brand-bg p-3 md:p-4">
                <div class="text-sm font-semibold text-brand-ink"><?= _t('reg_s2_title') ?></div>
                <p class="mt-1 text-xs text-brand-muted">
                  <?= _t('reg_s2_desc') ?>
                </p>
              </div>

              <!-- Competition -->
              <div class="rounded-2xl border border-brand-border bg-brand-surface p-3 md:p-4">
                <div class="flex items-start justify-between gap-3">
                  <label class="flex items-start gap-3 w-full cursor-pointer">
                    <input id="reg-competition" type="checkbox" class="mt-1 h-3.5 w-3.5 accent-black" />
                    <span class="flex-1">
                      <span class="block text-sm font-semibold text-brand-ink"><?= _t('reg_comp_title') ?></span>
                    </span>
                  </label>
                  <span class="rounded-full bg-brand-bg px-2.5 py-1 text-[11px] font-semibold text-brand-ink shrink-0">AUD$250</span>
                </div>

                <div id="reg-competition-box" class="mt-3 hidden rounded-xl border border-brand-border bg-brand-bg p-3 md:p-4">
                  <div class="flex items-start justify-between gap-3">
                    <div>
                      <div class="text-sm font-semibold text-brand-ink"><?= _t('reg_comp_sel_title') ?></div>
                      <div class="mt-0.5 text-[11px] leading-snug text-brand-muted">
                        <?= _t('reg_comp_sel_desc') ?>
                      </div>
                    </div>
                  </div>

                  <div class="mt-3 space-y-2">
                    <!-- Card 1 -->
                    <div class="rounded-xl border border-brand-border bg-white p-3">
                      <label class="flex items-start gap-3 cursor-pointer">
                        <input id="reg-master-slot-a" type="checkbox" class="reg-master-slot mt-0.5 h-4 w-4 accent-black" value="Slot A" />
                        <div class="flex-1 flex flex-wrap items-center justify-between gap-2">
                          <div>
                            <p class="text-xs font-semibold text-brand-ink"><?= _t('reg_comp_slot1') ?></p>
                            <p class="mt-0.5 text-[11px] text-brand-muted">26 Sep 2026 • 13:00–14:00</p>
                          </div>
                        </div>
                      </label>

                      <div class="mt-3 grid gap-2 md:grid-cols-2 ml-7">
                        <label class="reg-slot-card flex cursor-pointer items-start gap-2.5 rounded-xl border border-brand-border bg-brand-bg p-3 transition hover:bg-brand-surface has-[input:disabled]:opacity-50 has-[input:disabled]:cursor-not-allowed">
                          <input
                            class="reg-slot-radio mt-0.5 h-3.5 w-3.5 accent-black disabled:cursor-not-allowed"
                            type="radio"
                            name="competitionSlotA"
                            value="Nuad Thai for Health"
                            data-slot-group="slot-a"
                            disabled
                          />
                          <span class="block">
                            <span class="block font-semibold text-xs text-brand-ink leading-tight"><?= _t('awd_c3_title') ?></span>
                          </span>
                        </label>

                        <label class="reg-slot-card flex cursor-pointer items-start gap-2.5 rounded-xl border border-brand-border bg-brand-bg p-3 transition hover:bg-brand-surface has-[input:disabled]:opacity-50 has-[input:disabled]:cursor-not-allowed">
                          <input
                            class="reg-slot-radio mt-0.5 h-3.5 w-3.5 accent-black disabled:cursor-not-allowed"
                            type="radio"
                            name="competitionSlotA"
                            value="Nuad Thai Relief"
                            data-slot-group="slot-a"
                            disabled
                          />
                          <span class="block">
                            <span class="block font-semibold text-xs text-brand-ink leading-tight"><?= _t('awd_c1_title') ?></span>
                          </span>
                        </label>
                      </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="rounded-xl border border-brand-border bg-white p-3">
                      <label class="flex items-start gap-3 cursor-pointer">
                        <input id="reg-master-slot-b" type="checkbox" class="reg-master-slot mt-0.5 h-4 w-4 accent-black" value="Slot B" />
                        <div class="flex-1 flex flex-wrap items-center justify-between gap-2">
                          <div>
                            <p class="text-xs font-semibold text-brand-ink"><?= _t('reg_comp_slot2') ?></p>
                            <p class="mt-0.5 text-[11px] text-brand-muted">26 Sep 2026 • 14:00–15:00</p>
                          </div>
                        </div>
                      </label>

                      <div class="mt-3 grid gap-2 md:grid-cols-2 ml-7">
                        <label class="reg-slot-card flex cursor-pointer items-start gap-2.5 rounded-xl border border-brand-border bg-brand-bg p-3 transition hover:bg-brand-surface has-[input:disabled]:opacity-50 has-[input:disabled]:cursor-not-allowed">
                          <input
                            class="reg-slot-radio mt-0.5 h-3.5 w-3.5 accent-black disabled:cursor-not-allowed"
                            type="radio"
                            name="competitionSlotB"
                            value="Nuad Thai Inspiration – Freestyle"
                            data-slot-group="slot-b"
                            disabled
                          />
                          <span class="block">
                            <span class="block font-semibold text-xs text-brand-ink leading-tight"><?= _t('awd_c2_title') ?></span>
                          </span>
                        </label>

                        <label class="reg-slot-card flex cursor-pointer items-start gap-2.5 rounded-xl border border-brand-border bg-brand-bg p-3 transition hover:bg-brand-surface has-[input:disabled]:opacity-50 has-[input:disabled]:cursor-not-allowed">
                          <input
                            class="reg-slot-radio mt-0.5 h-3.5 w-3.5 accent-black disabled:cursor-not-allowed"
                            type="radio"
                            name="competitionSlotB"
                            value="Nuad Sport Massage"
                            data-slot-group="slot-b"
                            disabled
                          />
                          <span class="block">
                            <span class="block font-semibold text-xs text-brand-ink leading-tight"><?= _t('awd_c4_title') ?></span>
                          </span>
                        </label>
                      </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="rounded-xl border border-brand-border bg-white p-3">
                      <label class="flex items-start gap-3 cursor-pointer">
                        <input id="reg-master-slot-c" type="checkbox" class="reg-master-slot mt-0.5 h-4 w-4 accent-black" value="Nuad Thai Wellness" />
                        <div class="flex-1 flex flex-wrap items-center justify-between gap-2">
                          <div>
                            <p class="text-xs font-semibold text-brand-ink"><?= _t('reg_comp_slot3') ?></p>
                            <p class="mt-0.5 text-[11px] text-brand-muted">27 Sep 2026 • 10:00–11:00</p>
                          </div>
                        </div>
                      </label>

                      <div class="mt-3 grid gap-2 md:grid-cols-2 ml-7">
                        <div id="reg-slot-c-card" class="reg-slot-card rounded-xl border border-brand-border bg-brand-bg p-3 opacity-50 transition-opacity">
                          <span class="block">
                            <span class="block font-semibold text-xs text-brand-ink leading-tight"><?= _t('awd_c5_title') ?></span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="reg-competition-hint" class="mt-2 hidden text-[11px] font-semibold text-brand-maroon">
                    <?= _t('reg_comp_hint') ?>
                  </div>
                </div>
              </div>

              <!-- Workshop -->
              <div class="rounded-2xl border border-brand-border bg-brand-surface p-3 md:p-4">
                <div class="flex items-start justify-between gap-3">
                  <label class="flex items-start gap-3 w-full cursor-pointer">
                    <input id="reg-workshop" type="checkbox" class="mt-1 h-3.5 w-3.5 accent-black" />
                    <span class="flex-1">
                      <span class="block text-sm font-semibold text-brand-ink"><?= _t('reg_ws_title') ?></span>
                      <span class="mt-0.5 block text-[11px] text-brand-muted">27 Sep 2026 • 09:00–16:00</span>
                    </span>
                  </label>
                  <span class="rounded-full bg-brand-bg px-2.5 py-1 text-[11px] font-semibold text-brand-ink shrink-0">AUD$299</span>
                </div>
              </div>

              <!-- Shirt -->
              <div class="rounded-2xl border border-brand-border bg-brand-surface p-3 md:p-4">
                <div class="flex items-start justify-between gap-3">
                  <label class="flex items-start gap-3 w-full cursor-pointer">
                    <input id="reg-shirt" type="checkbox" class="mt-1 h-3.5 w-3.5 accent-black" />
                    <span class="flex-1">
                      <span class="block text-sm font-semibold text-brand-ink"><?= _t('reg_shirt_title') ?></span>
                      <span class="block text-xs text-brand-muted"><?= _t('reg_shirt_desc') ?></span>
                    </span>
                  </label>
                  <span class="rounded-full bg-brand-bg px-2.5 py-1 text-[11px] font-semibold text-brand-ink shrink-0">AUD$50</span>
                </div>

                <div id="reg-shirt-box" class="mt-3 hidden rounded-xl border border-brand-border bg-brand-bg p-3 md:p-4">
                  <div class="flex items-center justify-between gap-3">
                    <div>
                      <div class="text-xs font-semibold text-brand-ink"><?= _t('reg_shirt_sel_title') ?></div>
                      <div class="mt-0.5 text-[11px] text-brand-muted">
                        <?= _t('reg_shirt_sel_desc') ?>
                      </div>
                    </div>

                    <button
                      type="button"
                      id="reg-add-shirt-row"
                      class="rounded-lg border border-brand-border bg-white px-3 py-1.5 text-xs font-semibold text-brand-ink hover:bg-brand-surface">
                      <?= _t('reg_shirt_btn_add') ?>
                    </button>
                  </div>

                  <div id="reg-shirt-rows" class="mt-3 space-y-2">
                    <div class="reg-shirt-row grid gap-2 md:grid-cols-[1fr_120px_auto]">
                      <div>
                        <label class="text-[11px] font-semibold text-brand-ink"><?= _t('reg_shirt_lbl_size') ?></label>
                        <select name="shirtSize[]" class="reg-shirt-size mt-1 w-full rounded-xl border border-brand-border bg-white pl-3 pr-8 py-2 text-sm outline-none focus:border-brand-gold">
                          <option value="" selected disabled><?= _t('reg_shirt_opt_size') ?></option>
                          <option value="Women's X"><?= _t('reg_shirt_sz_w_x') ?></option>
                          <option value="Women's XL"><?= _t('reg_shirt_sz_w_xl') ?></option>
                          <option value="Women's 2XL"><?= _t('reg_shirt_sz_w_2xl') ?></option>
                          <option value="Men's X"><?= _t('reg_shirt_sz_m_x') ?></option>
                          <option value="Men's XL"><?= _t('reg_shirt_sz_m_xl') ?></option>
                        </select>
                      </div>

                      <div>
                        <label class="text-[11px] font-semibold text-brand-ink"><?= _t('reg_shirt_lbl_qty') ?></label>
                        <select name="shirtQty[]" class="reg-shirt-qty mt-1 w-full rounded-xl border border-brand-border bg-white pl-3 pr-8 py-2 text-sm outline-none focus:border-brand-gold">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                        </select>
                      </div>

                      <div class="flex items-end">
                        <button
                          type="button"
                          class="reg-remove-shirt-row rounded-lg border border-brand-border bg-white px-3 py-2 text-xs font-semibold text-brand-ink hover:bg-brand-surface h-[38px]">
                          <?= _t('reg_shirt_btn_rm') ?>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div id="reg-shirt-size-hint" class="mt-2 hidden text-[11px] font-semibold text-brand-maroon">
                    <?= _t('reg_shirt_hint') ?>
                  </div>

                </div>
              </div>

              <!-- Dinner -->
              <div class="rounded-2xl border border-brand-border bg-brand-surface p-3 md:p-4">
                <div class="flex items-start justify-between gap-3">
                  <label class="flex items-start gap-3 w-full cursor-pointer">
                    <input id="reg-dinner" type="checkbox" class="mt-1 h-3.5 w-3.5 accent-black" />
                    <span class="flex-1">
                      <span class="block text-sm font-semibold text-brand-ink"><?= _t('reg_din_title') ?></span>
                      <span class="mt-0.5 block text-[11px] text-brand-muted">27 Sep 2026 • 18:00–21:00</span>
                    </span>
                  </label>
                  <span class="rounded-full bg-brand-gold/20 px-2.5 py-1 text-[11px] font-semibold text-brand-ink shrink-0">AUD$40</span>
                </div>

                <div id="reg-dinner-note" class="mt-3 hidden rounded-xl border border-brand-border bg-brand-bg p-3 md:p-4">
                  <div class="grid gap-2 md:grid-cols-2">
                    <div>
                      <label class="text-[11px] font-semibold text-brand-ink" for="reg-dinner-qty"><?= _t('reg_din_lbl_qty') ?></label>
                      <select id="reg-dinner-qty" class="mt-1 w-full rounded-xl border border-brand-border bg-white pl-3 pr-8 py-2 text-sm outline-none focus:border-brand-gold">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>

                    <div class="rounded-xl border border-brand-border bg-white p-3">
                      <div class="text-[11px] font-semibold text-brand-ink"><?= _t('reg_din_rule_title') ?></div>
                      <div class="mt-0.5 text-[11px] leading-snug text-brand-muted">
                        <?= _t('reg_din_rule_desc') ?>
                      </div>
                    </div>
                  </div>

                  <div id="reg-dinner-hint" class="mt-2 hidden text-[11px] font-semibold text-brand-maroon">
                    <?= _t('reg_din_hint') ?>
                  </div>
                </div>
              </div>

              <div class="flex flex-col items-end gap-2 pt-2">
                <div class="flex w-full items-center justify-between gap-2">
                  <button
                    type="button"
                    id="reg-back-2"
                    class="rounded-xl border border-brand-border bg-brand-bg px-4 py-2.5 text-sm font-semibold text-brand-ink hover:bg-brand-surface">
                    <?= _t('reg_btn_back') ?>
                  </button>

                  <button
                    type="button"
                    id="reg-next-2"
                    class="rounded-xl bg-brand-gold px-4 py-2.5 text-sm font-semibold text-brand-ink shadow-soft hover:opacity-90">
                    <?= _t('reg_btn_review') ?>
                  </button>
                </div>
                <!-- Validation Hint Message -->
                <div id="reg-submit-hint" class="text-right text-[10px] text-brand-maroon hidden">
                  <?= _t('reg_hint_submit') ?>
                </div>
              </div>
            </section>

            <!-- STEP 3 -->
            <section id="reg-step-3" class="hidden space-y-3">
              <div class="rounded-2xl border border-brand-border bg-brand-bg p-3 md:p-4">
                <div class="text-sm font-semibold text-brand-ink"><?= _t('reg_s3_title') ?></div>
                <p class="mt-1 text-xs text-brand-muted">
                  <?= _t('reg_s3_desc') ?>
                </p>
              </div>

              <div class="grid gap-3 md:grid-cols-2">
                <div class="rounded-2xl border border-brand-border bg-brand-surface p-3 md:p-4 md:col-span-2">
                  <div class="text-xs font-semibold text-brand-ink"><?= _t('reg_rev_contact') ?></div>
                  <div id="reg-review-contact" class="mt-1 space-y-1 text-xs text-brand-muted"></div>
                </div>

                <div class="rounded-2xl border border-brand-border bg-brand-surface p-3 md:p-4 md:col-span-2">
                  <div class="text-xs font-semibold text-brand-ink"><?= _t('reg_rev_sum_title') ?></div>
                  <div id="reg-review-items" class="mt-2 space-y-1.5 text-xs text-brand-muted"></div>

                  <div class="mt-3 rounded-2xl border-2 border-brand-gold bg-brand-gold/10 p-4 shadow-soft">
                    <div class="flex items-center justify-between border-b border-brand-gold/20 pb-2">
                      <div class="text-sm font-bold text-brand-ink tracking-wide"><?= _t('reg_rev_tot_amt') ?></div>
                      <div id="reg-review-total" class="text-xl font-black text-brand-ink drop-shadow-sm">AUD$0</div>
                    </div>
                    <div class="mt-2 text-left text-xs font-semibold text-brand-ink">
                      <?= _t('reg_rev_pay_inst') ?>
                    </div>
                  </div>
                </div>
              </div>

              <div class="rounded-2xl border border-brand-border bg-brand-surface p-3 md:p-4">
                <label class="flex items-start gap-2.5">
                  <input id="reg-consent" type="checkbox" class="mt-0.5 h-3.5 w-3.5 accent-black" />
                  <span>
                    <span class="block text-[11px] font-semibold text-brand-ink">
                      <?= _t('reg_rev_consent') ?>
                    </span>
                  </span>
                </label>
                <div id="reg-consent-hint" class="mt-1 hidden text-[10px] font-semibold text-brand-maroon">
                  <?= _t('reg_rev_consent_hint') ?>
                </div>
              </div>

              <div class="flex items-center justify-between gap-2 pt-2">
                <button
                  type="button"
                  id="reg-back-3"
                  class="rounded-xl border border-brand-border bg-brand-bg px-4 py-2.5 text-sm font-semibold text-brand-ink hover:bg-brand-surface">
                  <?= _t('reg_btn_back') ?>
                </button>

                <button
                  type="submit"
                  id="reg-submit"
                  class="rounded-xl bg-brand-gold px-4 py-2.5 text-sm font-semibold text-brand-ink shadow-soft hover:opacity-90">
                  <?= _t('reg_btn_submit') ?>
                </button>
              </div>
            </section>

            <!-- SUCCESS -->
            <section id="reg-success" class="hidden space-y-4">
              <div class="rounded-3xl border border-brand-border bg-brand-bg p-5 text-center">
                <div class="mx-auto grid h-14 w-14 place-items-center rounded-2xl bg-brand-gold/20 text-brand-ink">
                  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>

                <h4 class="mt-4 font-heading text-xl font-extrabold text-brand-ink">
                  <?= _t('reg_suc_title') ?>
                </h4>
                <p class="mt-1 text-sm text-brand-muted">
                  <?= _t('reg_suc_desc') ?>
                </p>

                <div class="mt-4 rounded-2xl border border-brand-border bg-white p-4">
                  <div class="text-xs text-brand-muted"><?= _t('reg_suc_ref') ?></div>
                  <div id="reg-success-ref" class="mt-1 text-lg font-extrabold text-brand-ink">NTA2026-000000</div>
                </div>

                <p class="mt-3 text-xs text-brand-muted">
                  <?= _t('reg_suc_spam') ?>
                </p>
                <p class="mt-2 text-xs text-brand-muted">
                  <?= _t('reg_rev_th_sup') ?> <a href="mailto:kantsiniklxreiy@gmail.com" class="underline underline-offset-2">kantsiniklxreiy@gmail.com</a>
                  <span class="mx-1">•</span>
                  <?= _t('reg_rev_en_sup') ?> <a href="mailto:stuart.cooper@gmail.com" class="underline underline-offset-2">stuart.cooper@gmail.com</a>
                </p>
              </div>

              <div class="flex flex-wrap justify-center gap-2">
                <a
                  href="#contact"
                  class="rounded-2xl border border-brand-border bg-brand-bg px-5 py-3 text-sm font-semibold text-brand-ink hover:bg-brand-surface"
                  onclick="window.closeRegister ? window.closeRegister() : null">
                  <?= _t('reg_btn_contact') ?>
                </a>
                <button
                  type="button"
                  id="reg-btn-reset"
                  class="rounded-2xl border border-brand-border bg-white px-5 py-3 text-sm font-semibold text-brand-ink shadow-soft hover:bg-brand-surface w-full md:w-auto">
                  <?= _t('reg_btn_reg_again') ?>
                </button>
                <button
                  type="button"
                  class="rounded-2xl bg-brand-gold px-5 py-3 text-sm font-semibold text-brand-ink shadow-soft hover:opacity-90 w-full md:w-auto"
                  onclick="window.closeRegister ? window.closeRegister() : null">
                  <?= _t('reg_btn_close') ?>
                </button>
              </div>
            </section>
          </form>
        </div>

        <!-- Right: Summary (desktop) -->
        <aside class="hidden border-l border-brand-border bg-brand-bg/40 px-4 py-4 md:block">
          <div class="sticky top-0 space-y-3">
            <div class="rounded-2xl border border-brand-border bg-brand-surface p-3 shadow-soft">
              <div class="text-sm font-semibold text-brand-ink"><?= _t('reg_side_title') ?></div>
              <div id="reg-side-items" class="mt-2 space-y-1.5 text-xs text-brand-muted">
                <div class="text-xs text-brand-muted"><?= _t('reg_side_empty') ?></div>
              </div>

              <div class="mt-3 rounded-xl border border-brand-border bg-brand-bg p-3">
                <div class="flex items-center justify-between border-b border-brand-border pb-2">
                  <div class="text-xs font-semibold text-brand-ink"><?= _t('reg_side_tot') ?></div>
                  <div id="reg-side-total" class="text-base font-extrabold text-brand-ink">AUD$0</div>
                </div>
                <div class="mt-2 text-left text-[11px] font-semibold text-brand-ink/90">
                  <?= _t('reg_rev_pay_inst') ?>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  (function () {
    const COMPETITION_PRICE = 250;
    const WORKSHOP_PRICE = 299;
    const SHIRT_PRICE = 50;
    const DINNER_PRICE = 40;

    const form = document.getElementById('reg-form');

    const step1 = document.getElementById('reg-step-1');
    const step2 = document.getElementById('reg-step-2');
    const step3 = document.getElementById('reg-step-3');

    const next1 = document.getElementById('reg-next-1');
    const back2 = document.getElementById('reg-back-2');
    const next2 = document.getElementById('reg-next-2');
    const back3 = document.getElementById('reg-back-3');

    const dot1 = document.getElementById('reg-step-dot-1');
    const dot2 = document.getElementById('reg-step-dot-2');
    const dot3 = document.getElementById('reg-step-dot-3');
    const label1 = document.getElementById('reg-step-label-1');
    const label2 = document.getElementById('reg-step-label-2');
    const label3 = document.getElementById('reg-step-label-3');

    const competitionToggle = document.getElementById('reg-competition');
    const competitionBox = document.getElementById('reg-competition-box');
    const competitionHint = document.getElementById('reg-competition-hint');

    const slotCCheckbox = document.getElementById('reg-slot-c');

    const workshopToggle = document.getElementById('reg-workshop');

    const shirtToggle = document.getElementById('reg-shirt');
    const shirtBox = document.getElementById('reg-shirt-box');
    const shirtSizeHint = document.getElementById('reg-shirt-size-hint');
    const addShirtRowBtn = document.getElementById('reg-add-shirt-row');
    const shirtRows = document.getElementById('reg-shirt-rows');

    const dinnerToggle = document.getElementById('reg-dinner');
    const dinnerBox = document.getElementById('reg-dinner-note');
    const dinnerQty = document.getElementById('reg-dinner-qty');
    const dinnerHint = document.getElementById('reg-dinner-hint');

    const reviewContact = document.getElementById('reg-review-contact');
    const reviewAddress = document.getElementById('reg-review-address');
    const reviewItems = document.getElementById('reg-review-items');
    const reviewTotal = document.getElementById('reg-review-total');

    const sideItems = document.getElementById('reg-side-items');
    const sideTotal = document.getElementById('reg-side-total');

    const consent = document.getElementById('reg-consent');
    const consentHint = document.getElementById('reg-consent-hint');

    function formatAUD(amount) {
      return `AUD$${amount}`;
    }

    function setActiveStep(step) {
      [step1, step2, step3].forEach(el => el.classList.add('hidden'));
      [dot1, dot2, dot3].forEach(dot => {
        dot.className = 'grid h-8 w-8 place-items-center rounded-full border border-brand-border bg-brand-bg text-sm font-extrabold text-brand-ink';
      });
      [label1, label2, label3].forEach(label => {
        label.className = 'text-sm font-semibold text-brand-muted';
      });

      if (step === 1) {
        step1.classList.remove('hidden');
        dot1.className = 'grid h-8 w-8 place-items-center rounded-full bg-brand-gold text-sm font-extrabold text-brand-ink';
        label1.className = 'text-sm font-semibold text-brand-ink';
      }

      if (step === 2) {
        step2.classList.remove('hidden');
        dot2.className = 'grid h-8 w-8 place-items-center rounded-full bg-brand-gold text-sm font-extrabold text-brand-ink';
        label2.className = 'text-sm font-semibold text-brand-ink';
      }

      if (step === 3) {
        step3.classList.remove('hidden');
        dot3.className = 'grid h-8 w-8 place-items-center rounded-full bg-brand-gold text-sm font-extrabold text-brand-ink';
        label3.className = 'text-sm font-semibold text-brand-ink';
      }
    }

    function toggleBox(toggleEl, boxEl) {
      if (!toggleEl || !boxEl) return;
      boxEl.classList.toggle('hidden', !toggleEl.checked);
    }

    function getSelectedCompetitionCats() {
      const selected = [];
      const formEl = document.getElementById('reg-form') || document;
      
      const masterA = formEl.querySelector('#reg-master-slot-a');
      const masterB = formEl.querySelector('#reg-master-slot-b');
      const masterC = formEl.querySelector('#reg-master-slot-c');

      if (masterA?.checked) {
        const radA = formEl.querySelector('input[name="competitionSlotA"]:checked');
        if (radA) selected.push(radA.value);
      }
      if (masterB?.checked) {
        const radB = formEl.querySelector('input[name="competitionSlotB"]:checked');
        if (radB) selected.push(radB.value);
      }
      if (masterC?.checked) {
        selected.push(masterC.value);
      }

      return selected;
    }

    function updateSlotCardStates() {
      document.querySelectorAll('.reg-slot-card').forEach(card => {
        const input = card.querySelector('input');
        card.classList.remove('ring-1', 'ring-brand-gold');
        if (input?.checked) {
          card.classList.add('ring-1', 'ring-brand-gold');
        }
      });
    }

    function updateCompetitionSelectedText() {
      // Logic removed entirely per user request
    }

    function validateCompetition(showHint = true) {
      const formEl = document.getElementById('reg-form') || document;
      const compToggle = formEl.querySelector('#reg-competition');
      const compHint = formEl.querySelector('#reg-competition-hint');
      const compBox = formEl.querySelector('#reg-competition-box');

      if (!compToggle || !compToggle.checked) {
        if (compHint) compHint.classList.add('hidden');
        if (compBox) compBox.classList.remove('border-brand-maroon');
        return true;
      }

      const selected = getSelectedCompetitionCats();
      const isValid = selected.length === 2;

      if (showHint) {
        if (compHint) compHint.classList.toggle('hidden', isValid);
        if (!isValid) {
          if (compBox) compBox.classList.remove('border-brand-border');
          if (compBox) compBox.classList.add('border-brand-maroon');
        } else {
          if (compBox) compBox.classList.add('border-brand-border');
          if (compBox) compBox.classList.remove('border-brand-maroon');
        }
      } else {
        // If not showing hint but it is valid, ensure we clear the error state
        if (isValid) {
          if (compBox) compBox.classList.add('border-brand-border');
          if (compBox) compBox.classList.remove('border-brand-maroon');
        }
      }

      return isValid;
    }

    function getShirtSelections() {
      const formEl = document.getElementById('reg-form') || document;
      const shirtToggle = formEl.querySelector('#reg-shirt');
      const isShirtChecked = shirtToggle ? shirtToggle.checked : false;
      if (!isShirtChecked) return [];

      const rows = Array.from(formEl.querySelectorAll('.reg-shirt-row'));
      return rows.map(row => {
        const sizeEl = row.querySelector('.reg-shirt-size');
        const qtyEl = row.querySelector('.reg-shirt-qty');
        return {
          size: sizeEl ? sizeEl.value : '',
          qty: Number(qtyEl ? qtyEl.value : 0)
        };
      }).filter(item => item.size && item.qty > 0);
    }

    function getTotalShirtQty() {
      return getShirtSelections().reduce((sum, item) => sum + item.qty, 0);
    }

    function validateShirts(showHint = true) {
      const formEl = document.getElementById('reg-form') || document;
      const shirtToggle = formEl.querySelector('#reg-shirt');
      const isShirtChecked = shirtToggle ? shirtToggle.checked : false;
      
      if (!isShirtChecked) {
        if (shirtSizeHint) shirtSizeHint.classList.add('hidden');
        formEl.querySelectorAll('.reg-shirt-size').forEach(el => {
          el.classList.remove('border-brand-maroon');
        });
        return true;
      }

      const rows = Array.from(formEl.querySelectorAll('.reg-shirt-row'));
      if (rows.length === 0) return false;

      let hasEmptySize = false;
      rows.forEach(row => {
        const sizeEl = row.querySelector('.reg-shirt-size');
        if (!sizeEl) return;
        
        const isEmpty = !sizeEl.value;
        if (isEmpty) hasEmptySize = true;
        
        if (showHint) {
          if (isEmpty) {
            sizeEl.classList.add('border-brand-maroon');
            sizeEl.classList.remove('focus:border-brand-gold');
          } else {
            sizeEl.classList.remove('border-brand-maroon');
            sizeEl.classList.add('focus:border-brand-gold');
          }
        }
      });

      const isValid = !hasEmptySize && rows.length > 0;

      if (showHint) {
        if (shirtSizeHint) shirtSizeHint.classList.toggle('hidden', isValid);
      }

      return isValid;
    }

    function updateShirtSizeOptions() {
      const allSelects = Array.from(document.querySelectorAll('.reg-shirt-size'));
      const selectedSizes = allSelects.map(s => s.value).filter(Boolean);

      allSelects.forEach(select => {
        const currentValue = select.value;
        Array.from(select.options).forEach(option => {
          if (option.value === '') return; // Skip placeholder
          if (selectedSizes.includes(option.value) && option.value !== currentValue) {
            option.hidden = true;
          } else {
            option.hidden = false;
          }
        });
      });
    }

    function validateDinnerRule(showHint = true) {
      const formEl = document.getElementById('reg-form') || document;
      const dinnerTgl = formEl.querySelector('#reg-dinner');
      const dinnerHintBox = formEl.querySelector('#reg-dinner-hint');
      const dinnerQtyInput = formEl.querySelector('#reg-dinner-qty');

      if (!dinnerTgl || !dinnerTgl.checked) {
        if (dinnerHintBox) dinnerHintBox.classList.add('hidden');
        if (dinnerQtyInput) dinnerQtyInput.classList.remove('border-brand-maroon');
        if (dinnerQtyInput) dinnerQtyInput.classList.add('focus:border-brand-gold');
        return true;
      }

      const qty = Number(dinnerQtyInput ? dinnerQtyInput.value : 0);
      const totalShirts = getTotalShirtQty();
      const isValid = totalShirts >= qty;

      if (showHint) {
        if (dinnerHintBox) dinnerHintBox.classList.toggle('hidden', isValid);
        if (!isValid) {
          if (dinnerQtyInput) dinnerQtyInput.classList.add('border-brand-maroon');
          if (dinnerQtyInput) dinnerQtyInput.classList.remove('focus:border-brand-gold');
        } else {
          if (dinnerQtyInput) dinnerQtyInput.classList.remove('border-brand-maroon');
          if (dinnerQtyInput) dinnerQtyInput.classList.add('focus:border-brand-gold');
        }
      }

      return isValid;
    }

    function createShirtRow() {
      const row = document.createElement('div');
      row.className = 'reg-shirt-row grid gap-3 md:grid-cols-[1fr_140px_auto]';
      row.innerHTML = `
        <div>
          <label class="text-sm font-semibold text-brand-ink"><?= _t('reg_shirt_lbl_size') ?></label>
          <select name="shirtSize[]" class="reg-shirt-size mt-1 w-full rounded-2xl border border-brand-border bg-white pl-4 pr-10 py-3 text-sm outline-none focus:border-brand-gold">
            <option value="" selected disabled><?= _t('reg_shirt_opt_size') ?></option>
            <option value="Women's X"><?= _t('reg_shirt_sz_w_x') ?></option>
            <option value="Women's XL"><?= _t('reg_shirt_sz_w_xl') ?></option>
            <option value="Women's 2XL"><?= _t('reg_shirt_sz_w_2xl') ?></option>
            <option value="Men's X"><?= _t('reg_shirt_sz_m_x') ?></option>
            <option value="Men's XL"><?= _t('reg_shirt_sz_m_xl') ?></option>
          </select>
        </div>

        <div>
          <label class="text-sm font-semibold text-brand-ink"><?= _t('reg_shirt_lbl_qty') ?></label>
          <select name="shirtQty[]" class="reg-shirt-qty mt-1 w-full rounded-2xl border border-brand-border bg-white pl-4 pr-10 py-3 text-sm outline-none focus:border-brand-gold">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>

        <div class="flex items-end">
          <button
            type="button"
            class="reg-remove-shirt-row rounded-xl border border-brand-border bg-white px-3 py-3 text-xs font-semibold text-brand-ink hover:bg-brand-surface">
            <?= _t('reg_shirt_btn_rm') ?>
          </button>
        </div>
      `;
      return row;
    }

    function getT(key) {
      const lang = document.documentElement.lang || 'en';
      const dict = lang === 'th' ? window.i18n_th : window.i18n_en;
      return dict?.[key] || key;
    }

    function getOrderData() {
      const items = [];
      let total = 0;
      
      const formEl = document.getElementById('reg-form') || document;

      const isCompChecked = formEl.querySelector('#reg-competition')?.checked;
      if (isCompChecked) {
        items.push({
          title: getT('reg_comp_title'),
          subtitle: '1 x AUD$250',
          amount: COMPETITION_PRICE,
          categoriesTitle: getT('reg_comp_sel_cats'),
          categories: getSelectedCompetitionCats()
        });
        total += COMPETITION_PRICE;
      }

      const isWorkshopChecked = formEl.querySelector('#reg-workshop')?.checked;
      if (isWorkshopChecked) {
        items.push({
          title: getT('reg_ws_title'),
          subtitle: '1 x AUD$299',
          amount: WORKSHOP_PRICE,
          categories: []
        });
        total += WORKSHOP_PRICE;
      }

      const isShirtChecked = formEl.querySelector('#reg-shirt')?.checked;
      if (isShirtChecked) {
        const shirts = getShirtSelections();
        if (shirts.length > 0) {
          let totalShirtQty = 0;
          let totalShirtAmount = 0;
          const shirtCategories = [];

          shirts.forEach(item => {
            const amount = item.qty * SHIRT_PRICE;
            totalShirtQty += item.qty;
            totalShirtAmount += amount;
            shirtCategories.push(`${getT('reg_shirt_lbl_size')} ${item.size}: ${item.qty} x AUD$50`);
          });

          items.push({
            title: getT('reg_shirt_title'),
            subtitle: `${totalShirtQty} ${totalShirtQty > 1 ? getT('reg_side_shirts') : getT('reg_side_shirt')}`,
            amount: totalShirtAmount,
            categoriesTitle: getT('reg_shirt_opt_size'),
            categories: shirtCategories
          });
          total += totalShirtAmount;
        }
      }

      const isDinnerChecked = formEl.querySelector('#reg-dinner')?.checked;
      if (isDinnerChecked) {
        const qty = Number(formEl.querySelector('#reg-dinner-qty')?.value || 1);
        const amount = qty * DINNER_PRICE;
        items.push({
          title: getT('reg_din_title'),
          subtitle: `${qty} x AUD$40`,
          amount: amount,
          categories: []
        });
        total += amount;
      }

      return { items, total };
    }

    function updateSideSummary() {
      const { items, total } = getOrderData();

      if (!items.length) {
        sideItems.innerHTML = `<div class="text-xs text-brand-muted"><?= _t('reg_side_empty') ?></div>`;
        sideTotal.textContent = formatAUD(0);
        return;
      }

      sideItems.innerHTML = items.map(item => {
        const categoriesHtml = item.categories?.length
          ? `
            <div class="mt-2 space-y-1">
              ${item.categories.map(cat => `<div class="text-xs text-brand-muted">• ${cat}</div>`).join('')}
            </div>
          `
          : '';

        return `
          <div class="rounded-2xl border border-brand-border bg-brand-bg p-3 mb-2">
            <div class="flex items-start justify-between gap-3">
              <div class="flex-1">
                <div class="text-sm font-semibold text-brand-ink">${item.title}</div>
                <div class="text-xs text-brand-muted">${item.subtitle}</div>
              </div>
              <div class="text-sm font-semibold text-brand-ink shrink-0">${formatAUD(item.amount)}</div>
            </div>
            ${categoriesHtml}
          </div>
        `;
      }).join('');

      sideTotal.textContent = formatAUD(total);
    }

    function updateReviewSummary() {
      const { items, total } = getOrderData();

      if (!items.length) {
        reviewItems.innerHTML = `<div class="text-sm text-brand-muted"><?= _t('reg_side_empty') ?></div>`;
      } else {
        reviewItems.innerHTML = items.map(item => {
          const categoriesHtml = item.categories?.length
            ? `
              <div class="mt-2 rounded-xl border border-brand-border bg-white p-3">
                <div class="text-xs font-semibold uppercase tracking-wider text-brand-muted">${item.categoriesTitle || '<?= _t('reg_rev_opt') ?>'}</div>
                <ul class="mt-2 space-y-1">
                  ${item.categories.map(cat => `<li class="text-sm text-brand-ink">• ${cat}</li>`).join('')}
                </ul>
              </div>
            `
            : '';

          return `
            <div class="rounded-2xl border border-brand-border bg-brand-bg p-4">
              <div class="flex items-start justify-between gap-3">
                <div>
                  <div class="font-semibold text-brand-ink">${item.title}</div>
                  <div class="text-sm text-brand-muted">${item.subtitle}</div>
                </div>
                <div class="text-sm font-semibold text-brand-ink">${formatAUD(item.amount)}</div>
              </div>
              ${categoriesHtml}
            </div>
          `;
        }).join('');
      }

      reviewTotal.textContent = formatAUD(total);
    }

    function updateContactReview() {
      const fullName = document.getElementById('reg-fullname')?.value || '-';
      const email = document.getElementById('reg-email')?.value || '-';
      const phone = document.getElementById('reg-phone')?.value || '-';
      const address = document.getElementById('reg-address')?.value || '-';
      const suburb = document.getElementById('reg-suburb')?.value || '-';
      const postcode = document.getElementById('reg-postcode')?.value || '-';
      const country = document.getElementById('reg-country')?.value || '-';
      const city = document.getElementById('reg-city')?.value || '-';
      const state = document.getElementById('reg-state')?.value || '-';

      if (reviewContact) {
        // Combine address parts, filtering out blank or placeholder-like values if needed, 
        // though the user specifically showed "-" so we'll just filter out completely empty ones
        const addressParts = [address, suburb, city, state, postcode, country].filter(p => p && p.trim() !== '');
        const fullAddress = addressParts.join(', ');

        reviewContact.innerHTML = `
          <div><span class="font-semibold text-brand-ink"><?= _t('reg_rev_name') ?>:</span> ${fullName}</div>
          <div><span class="font-semibold text-brand-ink"><?= _t('reg_rev_email') ?>:</span> ${email}</div>
          <div><span class="font-semibold text-brand-ink"><?= _t('reg_rev_phone') ?>:</span> ${phone}</div>
          <div><span class="font-semibold text-brand-ink"><?= _t('reg_rev_address') ?>:</span> ${fullAddress}</div>
        `;
      }
    }

    function updateSummaries() {
      updateSlotCardStates();
      updateCompetitionSelectedText();
      updateSideSummary();
      updateReviewSummary();
      updateContactReview();
    }

    function validateStep1() {
      const requiredIds = ['reg-fullname', 'reg-email', 'reg-phone', 'reg-address', 'reg-suburb', 'reg-postcode', 'reg-country'];
      for (const id of requiredIds) {
        const el = document.getElementById(id);
        if (!el || !el.value.trim()) {
          if (el) el.focus();
          return false;
        }
      }
      return true;
    }

    function validateStep2(showHint = true) {
      const validCompetition = validateCompetition(showHint);
      const validShirts = validateShirts(showHint);
      const validDinner = validateDinnerRule(showHint);
      
      const formEl = document.getElementById('reg-form') || document;
      const compNode = formEl.querySelector('#reg-competition');
      const workNode = formEl.querySelector('#reg-workshop');
      const shirtNode = formEl.querySelector('#reg-shirt');
      const dinnerNode = formEl.querySelector('#reg-dinner');

      const isComp = compNode ? compNode.checked : false;
      const isWork = workNode ? workNode.checked : false;
      const isShirt = shirtNode ? shirtNode.checked : false;
      const isDinner = dinnerNode ? dinnerNode.checked : false;

      const hasAnySelection = isComp || isWork || isShirt || isDinner;
      
      if (!hasAnySelection) {
        if (showHint) {
          alert('<?= _t('reg_alert_sel_req') ?>');
        }
        return false;
      }

      return validCompetition && validShirts && validDinner;
    }

    function checkStep2Validity() {
      // Quietly check validity to update submit hint
      const isValid = validateStep2(false);
      const submitHint = document.getElementById('reg-submit-hint');
      if (next2) {
        if (isValid) {
          if (submitHint) submitHint.classList.add('hidden');
        } else {
          if (submitHint) submitHint.classList.remove('hidden');
        }
      }
    }

    if (next1) {
      next1.addEventListener('click', function () {
        if (!validateStep1()) return;
        setActiveStep(2);
        updateSummaries();
      });
    }

    if (back2) {
      back2.addEventListener('click', function () {
        setActiveStep(1);
      });
    }

    if (next2) {
      next2.addEventListener('click', function (e) {
        if (next2.disabled) {
          e.preventDefault();
          return;
        }

        if (!validateStep2(true)) {
          e.preventDefault();

          if (!validateCompetition(false)) {
            if (competitionBox) competitionBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
          } else if (!validateShirts(false)) {
            const firstEmptySelect = Array.from(document.querySelectorAll('.reg-shirt-size')).find(el => !el.value);
            if (firstEmptySelect) {
              firstEmptySelect.scrollIntoView({ behavior: 'smooth', block: 'center' });
              firstEmptySelect.focus();
            } else {
              if (shirtBox) shirtBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
          } else if (!validateDinnerRule(false)) {
            if (dinnerQty) {
              dinnerQty.scrollIntoView({ behavior: 'smooth', block: 'center' });
              dinnerQty.focus();
            } else {
              if (dinnerBox) dinnerBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
          }
          return;
        }

        updateSummaries();
        setActiveStep(3);
      });
    }

    if (back3) {
      back3.addEventListener('click', function () {
        setActiveStep(2);
      });
    }

    const formEl = document.getElementById('reg-form') || document;
    const compToggleEl = formEl.querySelector('#reg-competition');

    if (compToggleEl) {
      compToggleEl.addEventListener('change', function (e) {
        const toggle = e.target;
        const box = formEl.querySelector('#reg-competition-box');
        toggleBox(toggle, box);

        if (!toggle.checked) {
          formEl.querySelectorAll('.reg-master-slot').forEach(r => r.checked = false);
          formEl.querySelectorAll('input[name="competitionSlotA"], input[name="competitionSlotB"]').forEach(r => {
            r.checked = false;
            r.disabled = true;
          });
          const cardC = document.getElementById('reg-slot-c-card');
          if (cardC) cardC.classList.add('opacity-50');
          const compHintEl = formEl.querySelector('#reg-competition-hint');
          if (compHintEl) compHintEl.classList.add('hidden');
        }

        validateCompetition(false);
        updateSummaries();
        checkStep2Validity();
      });
    }

    // Master slot logic
    const masterSlots = document.querySelectorAll('.reg-master-slot');
    masterSlots.forEach(master => {
      master.addEventListener('change', function() {
        const checkedMasters = document.querySelectorAll('.reg-master-slot:checked');
        if (checkedMasters.length > 2) {
          this.checked = false; // block checking more than 2 slots
          return;
        }

        // Handle sub-options
        if (this.id === 'reg-master-slot-a') {
          const radios = document.querySelectorAll('input[name="competitionSlotA"]');
          radios.forEach(r => {
            r.disabled = !this.checked;
            if (!this.checked) r.checked = false;
          });
        } else if (this.id === 'reg-master-slot-b') {
          const radios = document.querySelectorAll('input[name="competitionSlotB"]');
          radios.forEach(r => {
            r.disabled = !this.checked;
            if (!this.checked) r.checked = false;
          });
        } else if (this.id === 'reg-master-slot-c') {
          const cardC = document.getElementById('reg-slot-c-card');
          if (cardC) {
            if (this.checked) {
              cardC.classList.remove('opacity-50');
            } else {
              cardC.classList.add('opacity-50');
            }
          }
        }

        validateCompetition(false);
        updateSummaries();
        checkStep2Validity();
      });
    });

    // Sub-option logic
    document.addEventListener('change', function(e) {
      if (e.target.name === 'competitionSlotA' || e.target.name === 'competitionSlotB') {
        validateCompetition(false);
        updateSummaries();
        checkStep2Validity();
      }
    });

    const workshopToggleEl = formEl.querySelector('#reg-workshop');
    if (workshopToggleEl) {
      workshopToggleEl.addEventListener('change', function() {
        updateSummaries();
        checkStep2Validity();
      });
    }

    const shirtToggleEl = formEl.querySelector('#reg-shirt');
    if (shirtToggleEl) {
      shirtToggleEl.addEventListener('change', function (e) {
        const toggle = e.target;
        const box = formEl.querySelector('#reg-shirt-box');
        toggleBox(toggle, box);
        validateShirts(false);
        validateDinnerRule(false);
        updateSummaries();
        checkStep2Validity();
      });
    }

    const dinnerToggleEl = formEl.querySelector('#reg-dinner');
    if (dinnerToggleEl) {
      dinnerToggleEl.addEventListener('change', function (e) {
        const toggle = e.target;
        const box = formEl.querySelector('#reg-dinner-note');
        toggleBox(toggle, box);
        validateDinnerRule(false);
        updateSummaries();
        checkStep2Validity();
      });
    }

    const dinnerQtyEl = formEl.querySelector('#reg-dinner-qty');
    if (dinnerQtyEl) {
      dinnerQtyEl.addEventListener('change', function () {
        validateDinnerRule(false);
        updateSummaries();
        checkStep2Validity();
      });
    }

    const addShirtRowEl = formEl.querySelector('#reg-add-shirt-row');
    if (addShirtRowEl) {
      addShirtRowEl.addEventListener('click', function () {
        if (shirtRows) shirtRows.appendChild(createShirtRow());
        updateShirtSizeOptions();
        updateSummaries();
        checkStep2Validity();
      });
    }

    if (shirtRows) {
      shirtRows.addEventListener('click', function (e) {
        const btn = e.target.closest('.reg-remove-shirt-row');
        if (!btn) return;

        const rows = shirtRows.querySelectorAll('.reg-shirt-row');
        if (rows.length <= 1) return;

        const closestRow = btn.closest('.reg-shirt-row');
        if (closestRow) closestRow.remove();
        
        updateShirtSizeOptions();
        validateShirts(false);
        validateDinnerRule(false);
        updateSummaries();
        checkStep2Validity();
      });

      shirtRows.addEventListener('change', function (e) {
        if (e.target.matches('.reg-shirt-size')) {
          e.target.classList.remove('border-brand-maroon');
          e.target.classList.add('focus:border-brand-gold');
          updateShirtSizeOptions();
        }
        if (e.target.matches('.reg-shirt-size') || e.target.matches('.reg-shirt-qty')) {
          validateShirts(false);
          validateDinnerRule(false);
          updateSummaries();
          checkStep2Validity();
        }
      });
    }

    ['reg-fullname', 'reg-email', 'reg-phone', 'reg-address', 'reg-suburb', 'reg-postcode', 'reg-country', 'reg-city', 'reg-state'].forEach(id => {
      const element = document.getElementById(id);
      if (element) {
        element.addEventListener('input', updateSummaries);
        element.addEventListener('change', updateSummaries);
      }
    });

    if (consent) {
      consent.addEventListener('change', function () {
        if (consentHint) consentHint.classList.add('hidden');
      });
    }

    const regFormElement = document.getElementById('reg-form');
    if (regFormElement) {
      regFormElement.addEventListener('submit', function (e) {
        if (!validateStep2(true)) {
          e.preventDefault();
          
          // Ensure Step 2 is active and visible before trying to scroll or focus
          setActiveStep(2);
          if (consentHint) consentHint.classList.add('hidden'); // Clear consent hint if going back to step 2

          // Small delay to allow DOM to paint Step 2 being visible before scrolling
          setTimeout(() => {
            const formEl = document.getElementById('reg-form') || document;
            if (!validateCompetition(false)) {
              const competitionBoxEl = formEl.querySelector('#reg-competition-box');
              if (competitionBoxEl) competitionBoxEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else if (!validateShirts(false)) {
              const firstEmptySelect = Array.from(formEl.querySelectorAll('.reg-shirt-size')).find(el => !el.value);
              if (firstEmptySelect) {
                firstEmptySelect.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstEmptySelect.focus();
              } else {
                const shirtBoxEl = formEl.querySelector('#reg-shirt-box');
                if (shirtBoxEl) shirtBoxEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
              }
            } else if (!validateDinnerRule(false)) {
              const dinnerQtyInput = formEl.querySelector('#reg-dinner-qty');
              if (dinnerQtyInput) {
                dinnerQtyInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
                dinnerQtyInput.focus();
              } else {
                const dinnerNoteEl = formEl.querySelector('#reg-dinner-note');
                if (dinnerNoteEl) dinnerNoteEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
              }
            }
          }, 50);

          return;
        }

        if (!consent || !consent.checked) {
          e.preventDefault();
          if (consentHint) consentHint.classList.remove('hidden');
          
          // Scroll to consent checkbox if it's not checked
          if (consent) consent.scrollIntoView({ behavior: 'smooth', block: 'center' });
          return;
        }

        e.preventDefault();

        const submitBtn = document.getElementById('reg-submit');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Submitting...';

        const { items, total } = getOrderData();
        const referenceNumber = 'NTA2026-' + String(Math.floor(Math.random() * 999999)).padStart(6, '0');

        const normalizedShirts = getShirtSelections().reduce((acc, item) => {
          if (!item.size || item.qty <= 0) return acc;
          
          let type = '';
          let parsedSize = item.size;
          const lowerStr = String(item.size).toLowerCase();
          
          if (lowerStr.includes('women')) {
            type = 'women';
          } else if (lowerStr.includes('men')) {
            type = 'men';
          }
          
          if (type) {
            // Extract size from strings like "Women's 2XL", "Men's XL" -> "2XL", "XL"
            parsedSize = item.size.replace(/.*(?:women|men)[^a-z0-9]*(.+)/i, '$1').trim();
            acc.push({ type: type, size: parsedSize, qty: Number(item.qty) });
          }
          
          return acc;
        }, []);

        const insertData = {
          full_name: document.getElementById('reg-fullname')?.value || '',
          email: document.getElementById('reg-email')?.value || '',
          phone: document.getElementById('reg-phone')?.value || '',
          address: document.getElementById('reg-address')?.value || '',
          suburb: document.getElementById('reg-suburb')?.value || '',
          city: document.getElementById('reg-city')?.value || '',
          state: document.getElementById('reg-state')?.value || '',
          postcode: document.getElementById('reg-postcode')?.value || '',
          country: document.getElementById('reg-country')?.value || '',
          competitions: getSelectedCompetitionCats(),
          workshop: !!document.getElementById('reg-workshop')?.checked,
          shirts: normalizedShirts,
          dinner_qty: document.getElementById('reg-dinner')?.checked ? Number(document.getElementById('reg-dinner-qty')?.value || 1) : 0,
          total_amount: total,
          status: 'pending',
          reference_number: referenceNumber
        };

        const supabaseUrl = 'https://wkdilyktuupzneoedhsb.supabase.co';
        const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6IndrZGlseWt0dXVwem5lb2VkaHNiIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NzM3NzM3ODUsImV4cCI6MjA4OTM0OTc4NX0.0RqUASsfIiZGtXvTVrJwjmzKkpRUhxPwNVSn8bRlWVc';
        const supabase = window.supabase.createClient(supabaseUrl, supabaseKey);

        supabase
          .from('nuadthaimain')
          .insert([insertData])
          .then(({ error }) => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;

            if (error) {
              console.error('Supabase Insert Error:', error);
              Swal.fire({
                icon: 'error',
                title: 'Submission Failed',
                text: 'There was an error saving your registration. Please try again.',
                confirmButtonColor: '#000000'
              });
              return;
            }

            // Send confirmation email (fire-and-forget, don't block success flow)
            try {
              fetch('https://wkdilyktuupzneoedhsb.supabase.co/functions/v1/send-registration-email', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                  fullName: insertData.full_name,
                  email: insertData.email,
                  referenceNumber: referenceNumber,
                  items: items.map(item => ({
                    title: item.title,
                    subtitle: item.subtitle,
                    amount: item.amount,
                    categories: item.categories || []
                  })),
                  total: total
                })
              }).then(res => {
                if (!res.ok) console.error('Email send failed:', res.status);
                else console.log('Confirmation email sent successfully');
              }).catch(err => console.error('Email send error:', err));
            } catch (emailErr) {
              console.error('Email setup error:', emailErr);
            }

            Swal.fire({
              icon: 'success',
              title: getT('reg_suc_title') || 'Registration Successful!',
              text: getT('reg_suc_desc') || 'Your registration has been submitted successfully.',
              confirmButtonColor: '#CBB26A'
            }).then(() => {
              const success = document.getElementById('reg-success');
              step1.classList.add('hidden');
              step2.classList.add('hidden');
              step3.classList.add('hidden');
              if (success) success.classList.remove('hidden');

              const refEl = document.getElementById('reg-success-ref');
              if (refEl) {
                refEl.textContent = referenceNumber;
              }
            });
          });
      });
    }

    const originalOpenRegister = window.openRegister;
    window.openRegister = () => {
      if (typeof originalOpenRegister === 'function') {
        originalOpenRegister();
      }
      
      const successEl = document.getElementById('reg-success');
      // If the success modal is currently visible (user already submitted one), just show the success again.
      // Wait, user said "เมื่อ user ทำการ Register เสร็จแล้ว เมื่อ user ทำการกด Register Now อีกครั้งจะขึ้นหน้า pop up โดยให้ info การ Register คราวที่แล้ว" -> This means it ALREADY does this because the form state isn't destroyed.
      if (!successEl || successEl.classList.contains('hidden')) {
         setActiveStep(1);
         updateSummaries();
         checkStep2Validity();
      }
    };

    // Form Reset Logic
    const btnReset = document.getElementById('reg-btn-reset');
    if (btnReset) {
      btnReset.addEventListener('click', function() {
        formEl.reset();
        
        // Uncheck manual bindings
        formEl.querySelectorAll('.reg-master-slot').forEach(r => r.checked = false);
        formEl.querySelectorAll('input[name="competitionSlotA"], input[name="competitionSlotB"]').forEach(r => {
          r.checked = false;
          r.disabled = true;
        });

        const cardC = document.getElementById('reg-slot-c-card');
        if (cardC) cardC.classList.add('opacity-50');

        const shirtRowsContainer = document.getElementById('reg-shirt-rows');
        if (shirtRowsContainer) {
          shirtRowsContainer.innerHTML = '';
          shirtRowsContainer.appendChild(createShirtRow());
        }

        // Hide toggle boxes
        const compBox = formEl.querySelector('#reg-competition-box');
        if (compBox) compBox.classList.add('hidden');
        
        const shirtBox = formEl.querySelector('#reg-shirt-box');
        if (shirtBox) shirtBox.classList.add('hidden');
        
        const dinnerBox = formEl.querySelector('#reg-dinner-note');
        if (dinnerBox) dinnerBox.classList.add('hidden');

        // Clear warning states
        formEl.querySelectorAll('.border-brand-maroon').forEach(el => el.classList.remove('border-brand-maroon'));
        formEl.querySelectorAll('.hidden.text-brand-maroon').forEach(el => el.classList.add('hidden'));

        // Reset step state
        const successEl = document.getElementById('reg-success');
        if (successEl) successEl.classList.add('hidden');
        
        setActiveStep(1);
        updateSummaries();
        checkStep2Validity();
      });
    }

    // Re-render summaries when language changes
    const observer = new MutationObserver((mutations) => {
      mutations.forEach((mutation) => {
        if (mutation.type === 'attributes' && mutation.attributeName === 'lang') {
          updateSummaries();
        }
      });
    });
    observer.observe(document.documentElement, { attributes: true });

    toggleBox(formEl.querySelector('#reg-competition'), formEl.querySelector('#reg-competition-box'));
    toggleBox(formEl.querySelector('#reg-shirt'), formEl.querySelector('#reg-shirt-box'));
    toggleBox(formEl.querySelector('#reg-dinner'), formEl.querySelector('#reg-dinner-note'));
    updateSummaries();
    checkStep2Validity();
    setActiveStep(1);
  })();
</script>