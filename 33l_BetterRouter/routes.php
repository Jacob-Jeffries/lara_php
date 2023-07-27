<?php

  // return [
  //   '/' => 'controllers/index.php',
  //   '/about' => 'controllers/about.php',
  //   '/notes' => 'controllers/notes/index.php',
  //   '/notes/create' => 'controllers/notes/create.php',
  //   '/notes/show' => 'controllers/notes/show.php',
  //   '/contact' => 'controllers/contact.php',
  // ];



  $router->get('/', 'controllers/index.php');
  $router->get('/about', 'controllers/about.php');
  $router->get('/contact', 'controllers/contact.php');

  $router->get('/notes', 'controllers/notes/index.php');
  $router->get('/notes/create', 'controllers/notes/create.php');
  $router->get('/notes/show', 'controllers/notes/show.php');

  $router->post('/notes/create', 'controllers/notes/create.php');
  $router->delete('/notes/show', 'controllers/notes/show.php');  

  // $router->delete('/note', 'controllers/notes/destroy.php');
  
?>