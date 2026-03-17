<?php require_once __DIR__ . '/sections/i18n.php'; ?>
<!doctype html>
<html lang="<?= htmlspecialchars($current_lang) ?>">
  <?php include __DIR__ . "/sections/_head.php"; ?>

  <body class="bg-thai-pattern text-brand-ink font-body">
    <?php include __DIR__ . "/sections/01-topbar.php"; ?>

    <main class="pb-20 md:pb-0">
      <?php include __DIR__ . "/sections/02-hero.php"; ?>
      <?php include __DIR__ . "/sections/03-key-info.php"; ?>
      <?php include __DIR__ . "/sections/04-about.php"; ?>
      <?php include __DIR__ . "/sections/05-join-cards.php"; ?>
      <?php include __DIR__ . "/sections/06-pricing.php"; ?>
      <?php include __DIR__ . "/sections/07-competition.php"; ?>
      <?php include __DIR__ . "/sections/08-workshop.php"; ?>
      <?php include __DIR__ . "/sections/09-shirt.php"; ?>
      <?php include __DIR__ . "/sections/10-dinner.php"; ?>
      <?php include __DIR__ . "/sections/11-sponsors.php"; ?>
      <?php include __DIR__ . "/sections/11b-judges.php"; ?>
      <?php include __DIR__ . "/sections/12-awards.php"; ?>

      <?php include __DIR__ . "/sections/14-registration-modal.php"; ?>
      <?php include __DIR__ . "/sections/16-contact.php"; ?>
      <?php include __DIR__ . "/sections/17-footer.php"; ?>
    </main>

    <?php include __DIR__ . "/sections/_scripts.php"; ?>
  </body>
</html>
