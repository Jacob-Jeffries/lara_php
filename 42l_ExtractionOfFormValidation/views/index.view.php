<?php view('/partials/head.php'); ?>
<?php view('/partials/nav.php'); ?>
<?php view('/partials/banner.php', ['heading' => 'Home']); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    Home Page 
    <p>Hello, <?= $_SESSION['user_email'] ?? 'Guest' ?>. Welcome to the home page.
  </div>
  <?php view('/partials/info.php'); ?>
</main>

<?php view('/partials/footer.php'); ?>