<?php 
  $heading = 'All Notes';

  require 'Validator.php';

  // dd(Validator::email('joe@example.omd'));

  $config = require "config.php";
  $db = new Database($config['database']);
  
  // dd($db);

  // $_GET gives us the URL params
  // dd($_GET); 
  $user_id = $_GET['user_id'];

  // id=:id also works (keyed value)
  // query($query, [':id' => $id])
  $query_string= "SELECT * from notes";
  // dd($query_string);


  //To make selecting fetch() and fetchAll() - we can pull that method out.
  $notes = $db->query($query_string)->get();

  // dd($posts);

  require "view/notes.view.php";
?>