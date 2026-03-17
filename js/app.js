// /public/js/app.js (add this if not already)
window.toggleMobileMenu = (open) => {
  const menu = document.getElementById("mobile-menu");
  const btn = document.querySelector('[aria-controls="mobile-menu"]');
  if (!menu || !btn) return;

  if (open) {
    menu.classList.remove("hidden");
    btn.setAttribute("aria-expanded", "true");
    document.body.style.overflow = "hidden";
  } else {
    menu.classList.add("hidden");
    btn.setAttribute("aria-expanded", "false");
    document.body.style.overflow = "";
  }
};

// /public/js/app.js (add this)
window.openRulesModal = () => {
  const modal = document.getElementById("rules-modal");
  if (!modal) return;
  modal.classList.remove("hidden");
  document.body.style.overflow = "hidden";
};

window.closeRulesModal = () => {
  const modal = document.getElementById("rules-modal");
  if (!modal) return;
  modal.classList.add("hidden");
  document.body.style.overflow = "";
};

// Close on ESC
document.addEventListener("keydown", (e) => {
  if (e.key !== "Escape") return;
  const modal = document.getElementById("rules-modal");
  if (!modal || modal.classList.contains("hidden")) return;
  window.closeRulesModal();
});

// Register modal
window.openRegister = () => {
  const modal = document.getElementById("register-modal");
  if (!modal) return;
  modal.classList.remove("hidden");
  document.body.style.overflow = "hidden";
};

window.closeRegister = () => {
  const modal = document.getElementById("register-modal");
  if (!modal) return;
  modal.classList.add("hidden");
  document.body.style.overflow = "";
};

// Close on ESC (extend existing ESC handler)
document.addEventListener("keydown", (e) => {
  if (e.key !== "Escape") return;

  const registerModal = document.getElementById("register-modal");
  if (registerModal && !registerModal.classList.contains("hidden")) {
    window.closeRegister();
  }

  const rulesModal = document.getElementById("rules-modal");
  if (rulesModal && !rulesModal.classList.contains("hidden")) {
    window.closeRulesModal();
  }
});


