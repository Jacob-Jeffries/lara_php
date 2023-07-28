<?php

  namespace Core;

  class Validator {
    
    // Pure Function - Not dependent on state of outside world
    // No reference to 'this', no API call, etc. 
    public static function string($value, $min=1, $max=INF){
      $value = trim($value);
      $length = strlen($value);
      return $length >= $min && $length <= $max;
    }

    public static function email($value){
      
      // The filter returns FALSE or the validated Email Address
      return filter_var($value, FILTER_VALIDATE_EMAIL);
    }


  }
?>