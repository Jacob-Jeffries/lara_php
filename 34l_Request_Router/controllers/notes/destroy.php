<?php

  $config = require base_path('config.php');
  $db = new Core\Database($config['database']);
  $currentUserId = 1;

  // Checking the Note from the DB
  $note = $db->query('select * from notes where id = :id', [
      'id' => $_POST['id']
  ])->findOrFail();



  // Checking if you are the author of the note
  // written in the functions.php file
  authorize($note['user_id'] === $currentUserId);


  $db->query("DELETE FROM notes WHERE id = :id", [
      'id' => $_POST['id']
  ]);

  header('Location: /notes');
  die();

?>