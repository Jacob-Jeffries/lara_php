<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

        <p><?= htmlspecialchars($note['body']) ?></p>
        <br />

        <form action='#' method="POST">
            <input type="hidden" name="_method" value="DELETE"></input>
            <input type="hidden" name="id" value="<?= $note['id'] ?>"></input>
            <button type="submit" class="text-red-500">Delete</button>
        </form>

    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>