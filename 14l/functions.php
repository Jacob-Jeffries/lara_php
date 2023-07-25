<?php
  
  function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
  }

  function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === '/lara_php/14l'.$value;
  }

?>