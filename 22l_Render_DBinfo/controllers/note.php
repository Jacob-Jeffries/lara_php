<?php 
  $heading = 'My Notes';

  $config = require "config.php";
  $db = new Database($config['database']);
  
  // dd($db);

  // $_GET gives us the URL params
  // dd($_GET); 
  $id = $_GET['id'];

  // id=:id also works (keyed value)
  // query($query, [':id' => $id])
  $query_string= "select * from notes where id=?";
  // dd($query_string);


  //To make selecting fetch() and fetchAll() - we can pull that method out.
  $note = $db->query($query_string, [$id])->fetch();

  // dd($note);

  require "view/note.view.php";
?>