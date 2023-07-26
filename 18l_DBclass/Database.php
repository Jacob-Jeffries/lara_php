<?php

  class Database {

    public $connection;

    public function __construct()
    {
      $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=password;charset=utf8mb4";
      $this->connection = new PDO($dsn);
    }

    public function query($query){
      $statement = $this->connection->prepare($query);
      $statement->execute();
      return $statement;     
      
      // FetchAll return a list even if the response only has one item
      // $posts = $statement->fetch(PDO::FETCH_ASSOC);
      // return $posts;
    }
  }

  $query_string= "select * from posts";
  $db = new Database();

  //To make selecting fetch() and fetchAll() - we can pull that method out.
  $posts = $db->query($query_string)->fetchAll(PDO::FETCH_ASSOC);

  // dd($posts);

  foreach ($posts as $post){
    echo "<li>".$post['title']."</li>";
  }

?>