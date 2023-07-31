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
  //redirect to login page -> to be made later
  $errors['user_exists'] = 'User Account already exists';
  $errors['exists_email'] = $email;
  return view('users/create.view.php', [
    'heading' => 'Errors Found',
    'errors' => $errors,
  ]);
  exit();
}else if($_SERVER['REQUEST_METHOD'] === 'POST'){

  // Always hash passwords
  $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT),
  ]);

  $_SESSION['user_email'] = $email;
  $_SESSION['logged_in'] = TRUE;

  // dd($_SESSION);

  header('Location: /');
  exit();
}

?>