<?php

use Core\App;
use Core\Validator;
use Core\Database;

$errors = [];

$email = $_POST['email'];
$password = $_POST['password'];

// Validate Email & Password

if (!Validator::email($email)){
  $errors['email'] = 'Please Provide a valid email Address.';
}

if (!Validator::string($password, 7, 255)){
  $errors['password'] = "Please enter a password between 7 & 255 characters.";
}

if (!empty($errors)){
  return view('users/create.view.php', [
    'heading' => 'Errors Found',
    'errors' => $errors,
  ]);
}

// Check if the account already exists
// No -> Save to DB & Login -> home page

$db = App::resolve(Database::class);

$results = $db->query('SELECT * FROM users WHERE users.email=:email', [
  'email' => $email,
])->find();

// dd($results);

if($results) {
  //redirect to login page
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $db-
}

?>