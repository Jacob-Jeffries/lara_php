<?php 
  
  namespace Core\Middleware;
  
  class Guest{
    public function handle(){
      if($_SESSION['user_email'] ?? false){
        header('location: /');
        exit();
      }
    }
  }
?>