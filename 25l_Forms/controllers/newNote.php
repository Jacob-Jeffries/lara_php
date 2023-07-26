<?php 
  $heading = "New Note";

  if($_SERVER['REQUEST_METHOD'] === "POST"){
    // dd('You submitted a form.');
    dd($_POST);
  }

  require 'view/newNote.view.php';
?>