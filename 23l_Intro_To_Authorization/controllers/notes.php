<?php 
  $heading = 'My Notes';

  $config = require "config.php";
  $db = new Database($config['database']);
  
  // dd($db);

  // $_GET gives us the URL params
  // dd($_GET); 
  $user_id = $_GET['user_id'];

  // id=:id also works (keyed value)
  // query($query, [':id' => $id])
  $query_string= "select * from notes where user_id=?";
  // dd($query_string);


  //To make selecting fetch() and fetchAll() - we can pull that method out.
  $notes = $db->query($query_string, [$user_id])->fetchAll();

  // dd($posts);



  require "view/notes.view.php";
?>