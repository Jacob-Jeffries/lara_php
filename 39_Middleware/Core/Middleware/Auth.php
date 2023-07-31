<?php 
  
  namespace Core\Middleware;
  
  class Auth{
      
    public function handle(){
      if(!$_SESSION['user_email'] ?? false){
        header('location: /');
        exit();
      }

    }
    
  }

?>