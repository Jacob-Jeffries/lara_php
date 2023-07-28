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

  // NOTES
  $router->get('/notes', 'controllers/notes/index.php');

  $router->get('/notes/show', 'controllers/notes/show.php');
  $router->delete('/notes/show', 'controllers/notes/destroy.php');  
  
  $router->get('/notes/create', 'controllers/notes/create.php');
  $router->post('/notes/store', 'controllers/notes/store.php');
  
?>