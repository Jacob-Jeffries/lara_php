<?php 
  $heading = "New Note";

  $config = require "config.php";
  $db = new Database($config['database']);

  if($_SERVER['REQUEST_METHOD'] === "POST"){
    // dd('You submitted a form.');
    // dd($_POST);

    $body = addslashes(trim(strip_tags($_POST['body'])));

    $db->query('INSERT INTO notes (body, user_id) VALUES(:body, :user_id)', [
      'body' => $body,
      'user_id' => 1 //$_POST['user_id']
    ]);
  }

  require 'view/newNote.view.php';
?>