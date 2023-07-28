<?php

    $config = require base_path('config.php');
    $db = new Core\Database($config['database']);
    $currentUserId = 1;

    $note = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    // dd($note);

    authorize($note['user_id'] === $currentUserId);

    view("notes/show.view.php", [
        'heading' => 'Note',
        'note' => $note
    ]);

?>