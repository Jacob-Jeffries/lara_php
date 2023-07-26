<?php 

  $heading = 'Home';

  require "./functions.php";
  // require "./router.php";

  // if ($uri === '/') {
  //   require 'controllers/index.php';
  // } elseif ($uri === '/about') {
  //   require 'controllers/about.php';
  // } elseif ($uri === '/contact') {
  //   require 'controllers/contact.php';
  // } else {
  //   echo "Things went wrong - are you using the PHP server or the Apache Server?";
  // }

  // Connect to MySQL database - PDO
  // dsn - Data Source String 

  // $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=password;charset=utf8mb4";
  // $pdo = new PDO($dsn);
  // $statement = $pdo->prepare("select * from posts");
  // $statement->execute();
  // $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
  // foreach ($posts as $post){
  //   echo "<li>".$post['title']."</li>";
  // }

  require "Database.php";

  $config = require "config.php";

  $query_string= "select * from posts";

  // Since we made the database key:value we need to call that specifically
  $db = new Database($config['database']);

  //To make selecting fetch() and fetchAll() - we can pull that method out.
  $posts = $db->query($query_string)->fetchAll();

  dd($posts);

  foreach ($posts as $post){
    echo "<li>".$post['title']."</li>";
  }
?>