<?php

  class Database {

    public $connection;

    public function __construct($config, $username='root', $password='password')
    {

      $dsn = 'mysql:'.http_build_query($config, '', ';'); // More Simple way to string together the dsn variable

      // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};user=root;password=password;charset={$config['charset']}";

      $this->connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
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
?>