<script src="/js/app.js"></script>

<?php 
// Add JSON output of translations for JS fallback
global $translations;
if (empty($translations)) {
    $translations = include __DIR__ . "/../lang/en.php";
}
if (!isset($th_translations)) {
    $th_translations = include __DIR__ . "/../lang/th.php";
}
?>

<script>
  // Expose translations to Javascript for the frontend fallback 
  window.i18n_en = <?= json_encode($translations, JSON_UNESCAPED_UNICODE) ?>;
  window.i18n_th = <?= json_encode($th_translations, JSON_UNESCAPED_UNICODE) ?>;
  
  // On load, apply translation based on cookie or URL param
  document.addEventListener("DOMContentLoaded", function() {
      const urlParams = new URLSearchParams(window.location.search);
      let lang = urlParams.get('lang');
      
      if (!lang) {
          const match = document.cookie.match(/(^| )lang=([^;]+)/);
          if (match) lang = match[2];
      }
      
      if (lang === 'th' || lang === 'en') {
          // Add a tiny delay to ensure DOM is fully parsed
          setTimeout(() => applyTranslation(lang), 100);
      }
  });

  function applyTranslation(lang) {
      if (lang !== 'th' && lang !== 'en') return;
      
      // Update the <html> lang attribute
      document.documentElement.lang = lang;
      
      const sourceDict = lang === 'th' ? window.i18n_en : window.i18n_th;
      const targetDict = lang === 'th' ? window.i18n_th : window.i18n_en;
      
      // Update buttons styling
      const btnEn = document.querySelectorAll('button[onclick="switchLanguage(\'en\')"]');
      const btnTh = document.querySelectorAll('button[onclick="switchLanguage(\'th\')"]');
      
      if (lang === 'th') {
          btnEn.forEach(btn => btn.className = 'text-brand-muted hover:text-brand-ink px-2 py-1');
          btnTh.forEach(btn => btn.className = 'text-brand-ink bg-brand-bg rounded-full px-2 py-1 shadow-sm');
      } else {
          btnEn.forEach(btn => btn.className = 'text-brand-ink bg-brand-bg rounded-full px-2 py-1 shadow-sm');
          btnTh.forEach(btn => btn.className = 'text-brand-muted hover:text-brand-ink px-2 py-1');
      }
      
      // Look for text nodes to translate
      const walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT, null, false);
      let node;
      const nodesToUpdate = [];
      
      // First pass to find matches
      while (node = walker.nextNode()) {
          const text = node.nodeValue.trim();
          if (!text) continue;
          
          // Only operate on elements we actually want to translate, skip script and style tags
          if (node.parentElement && (node.parentElement.tagName === 'SCRIPT' || node.parentElement.tagName === 'STYLE')) {
             continue;
          }
          
          for (const key in sourceDict) {
              if (text === sourceDict[key] && targetDict[key]) {
                  nodesToUpdate.push({ node, from: sourceDict[key], to: targetDict[key] });
                  break;
              }
          }
      }
      
      // Second pass to apply (avoids messing up the iterator)
      nodesToUpdate.forEach(item => {
          item.node.nodeValue = item.node.nodeValue.replace(item.from, item.to);
      });
      
      // Handle placeholders in inputs
      const inputs = document.querySelectorAll('input[placeholder], textarea[placeholder]');
      inputs.forEach(input => {
          const placeholder = input.getAttribute('placeholder');
          for (const key in sourceDict) {
              if (placeholder === sourceDict[key] && targetDict[key]) {
                  input.setAttribute('placeholder', targetDict[key]);
                  break;
              }
          }
      });
  }
  
  // Create a global function we can call directly if we want to bypass reloading entirely
  window.doClientSideTranslation = function(lang) {
      document.cookie = "lang=" + lang + "; path=/; max-age=2592000; SameSite=Lax";
      applyTranslation(lang);
      
      // Update URL without reloading
      const url = new URL(window.location.href);
      url.searchParams.set('lang', lang);
      url.hash = '';
      window.history.pushState({}, '', url);
  }
</script>
