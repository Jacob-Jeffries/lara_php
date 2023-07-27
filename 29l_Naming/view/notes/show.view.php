<?php require 'view/partials/head.php'; ?>
<?php require 'view/partials/nav.php'; ?>
<?php require 'view/partials/banner.php'; ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p class="font-bold underline">Note: <?= $note['id'] ?></p>
      <br />
      <p><?= htmlspecialchars($note['body'])?></p>
      
      <br />
      <a href="/notes?user_id=<?= $note['user_id'] ?>" class="text-blue-500 hover:underline">Got Back to Full Notes List</a>
    </div>
    <?php require 'view/partials/info.php'; ?>
  </main>

<?php require 'view/partials/footer.php'; ?>