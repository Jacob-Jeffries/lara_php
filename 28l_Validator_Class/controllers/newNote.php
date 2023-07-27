<?php 
  
  $heading = "New Note";  
  
  require 'Validator.php';
  
  $config = require "config.php";
  $db = new Database($config['database']);

  if ($_SERVER['REQUEST_METHOD'] === "POST"){
    // dd('You submitted a form.');
    // dd($_POST);

    // if(strlen($_POST['body'] < 1000 && strlen($_POST['body']) > 0)){

    //    $body = addslashes(trim(strip_tags($_POST['body'])));

    //   $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
    //     'body' => $body,
    //     'user_id' => 1 //$_POST['user_id']
    //   ]);
    // } else {
    //   echo "Nope - the body of a note must be between 1 - 1000 characters. I bet you thought that curl could bypass my kung-fu?\n\n";
    //   die();
    // }

    $errors = [];

    // dd(strlen($_POST['body']));

    if (!Validator::string($_POST['body'], 1, 1000)) {
      $errors['body'] = 'The Body of a Note must contain between 1 - 1000 characters. Your note contains: '.strlen(trim($_POST['body'])).' characters.';
      // dd($errors);
    }

    // if (strlen($_POST['body']) > 1000) {
    //   $errors['body'] = "The Body of a note cannot exceed 1000 Characters.";
    // }

    if (empty($errors)) {

      // dd($errors);

      $body = addslashes(trim(strip_tags($_POST['body'])));

      $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
        'body' => $body,
        'user_id' => 1 //$_POST['user_id']
      ]);
      header("Location: /notes");
    } 
  }

  require 'view/newNote.view.php';
?>