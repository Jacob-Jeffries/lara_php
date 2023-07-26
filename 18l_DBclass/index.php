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


?>