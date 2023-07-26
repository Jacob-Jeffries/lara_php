<?php 
  $heading = 'My Notes';

  $config = require "config.php";
  $db = new Database($config['database']);
  
  $query_string= "SELECT * FROM notes WHERE id=:id";

  //To make selecting fetch() and fetchAll() - we can pull that method out.
  $note = $db->query($query_string, [
    'id' => $_GET['id'],
    ]
  )->findOrFail();

  $currentUser = 1;

  // By refactoring the response status code into a higher level class we can increase readability of the code
  // if($note['user_id'] != $currentUser){
  //   abort(Response::FORBIDDEN);
  // };

  authorize($note['user_id'] === $currentUser);

  require "view/note.view.php";
?>