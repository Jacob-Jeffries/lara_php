<?php

$config = require base_path('config.php');
$db = new Core\Database($config['database']);
$currentUserId = 1;

// dd($_SERVER);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // form was submitted, delete current note
    // dd($_POST);
    // dd($_GET);

    $note = $db->query('select * from notes where id = :id', [
        'id' => $_POST['id']
    ])->findOrFail();

    // dd($note);

    authorize($note['user_id'] === $currentUserId);


    $db->query("DELETE FROM notes WHERE id = :id", [
        'id' => $_POST['id']
    ]);

    header('Location: /notes');
    die();

} else {
    $note = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    // dd($note);

    authorize($note['user_id'] === $currentUserId);

    view("notes/show.view.php", [
        'heading' => 'Note',
        'note' => $note
    ]);
}