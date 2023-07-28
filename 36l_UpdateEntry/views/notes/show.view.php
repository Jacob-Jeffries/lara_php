<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <p><?= htmlspecialchars($note['body']) ?></p>
        <br />

        <a href='/notes'
        class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</a>
        <a href="/notes/edit?id=<?= $note['id'] ?>"class="inline-flex justify-center rounded-md border border-transparent bg-blue-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Edit Note</a>

        <!-- <form action='#' method="POST">
            <input type="hidden" name="_method" value="DELETE"></input>
            <input type="hidden" name="id" value="<?= $note['id'] ?>"></input>
            <button type="submit" class="text-red-500">Delete</button>
        </form> -->

    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>