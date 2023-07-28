<?php

  // return [
  //   '/' => 'controllers/index.php',
  //   '/about' => 'controllers/about.php',
  //   '/notes' => 'controllers/notes/index.php',
  //   '/notes/create' => 'controllers/notes/create.php',
  //   '/notes/show' => 'controllers/notes/show.php',
  //   '/contact' => 'controllers/contact.php',
  // ];


  // Static Pages
  $router->get('/', 'controllers/index.php');
  $router->get('/about', 'controllers/about.php');
  $router->get('/contact', 'controllers/contact.php');

  // ~NOTES~

  //Create
  $router->get('/notes/create', 'controllers/notes/create.php');
  $router->post('/notes/store', 'controllers/notes/store.php');

  //Read
  $router->get('/notes', 'controllers/notes/index.php');
  $router->get('/notes/show', 'controllers/notes/show.php');

  //Update
  $router->get('/notes/edit', 'controllers/notes/edit.php');
  $router->patch('/note', 'controllers/notes/update.php');

  //Delete
  $router->delete('/note', 'controllers/notes/destroy.php');

  // ~User~

  //Create
  $router->get('/register', 'controllers/users/create.php');
  $router->post('/register', 'controllers/users/store.php');


  
?>