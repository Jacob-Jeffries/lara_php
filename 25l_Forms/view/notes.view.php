<?php require 'view/partials/head.php'; ?>
<?php require 'view/partials/nav.php'; ?>
<?php require 'view/partials/banner.php'; ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      Notes:
    
      <ul>
        <?php foreach ($notes as $note) : ?>
          <li class="list-disc ml-6 text-blue-500 hover:underline" limit>
            <a href='/note?id=<?= $note['id'] ?>'><?= $note['body'] ?></a>
          </li>
        <?php endforeach ?>
      </ul>
      <br />
      <p>
        <a href='/newNote' class="text-blue-500 hover:underline">Create New Note</a>
      </p>

    </div>
    <?php require 'view/partials/info.php'; ?>
  </main>

<?php require 'view/partials/footer.php'; ?>