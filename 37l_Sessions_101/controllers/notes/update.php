<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

// dd($note);
// dd($_SERVER);
// dd($_POST);


$errors = [];

if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

// dd(count($errors));

if(count($errors)){
  // dd($note);
  view("notes/edit.view.php", [
    'heading' => 'Edit Note - Errors Encountered',
    'errors' => $errors,
    'note' => $note,
]);
}

// dd($_POST);
// dd(!empty($errors));

if (empty($errors)) {
  // dd($note);
  $db->query('UPDATE notes SET body = :body WHERE notes.id = :id', [
    "id" => $_POST['id'],
    'body' => $_POST['body'],
]);
}

header('location: /notes');
die();