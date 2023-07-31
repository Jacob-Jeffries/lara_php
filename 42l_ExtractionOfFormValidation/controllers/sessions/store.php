<?php

  use Core\App;
  use Core\Database;
  use Core\LoginForm;

  // dd($_POST);
  $db = App::resolve(Database::class);

  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // Validate Email & Password
  
  // if (!Validator::email($email)){
  //   $errors['email'] = 'Please Provide a valid email Address.';
  // }
  
  // if (!Validator::string($password)){
  //   $errors['password'] = "Please enter a password between 7 & 255 characters.";
  // }
  
  // if (!empty($errors)){
  //   return view('sessions/create.view.php', [
  //     'heading' => 'Errors Found',
  //     'errors' => $errors,
  //   ]);
  // }

  // New form validation Class to help validate the form
  $form = new LoginForm;

  if (! $form->validate($email, $password)) {
    return view('sessions/create.view.php', [
      'heading' => 'Errors Found',
      'errors' => $form->errors(),
    ]);
    
  }

  $user = $db->query('SELECT * FROM users WHERE users.email=:email', [
    'email' => $email,
  ])->find();

  // dd($user);

 

  $form->validate($email, $password);

  if(!$user){
    $errors['email'] = 'No User found with that email address.';

    return view('sessions/create.view.php', [
      'heading' => 'Errors Found',
      'errors' => $errors,
    ]);
  }

  if(password_verify($password, $user['password'])){
    // dd($user);

    login($user);

    header('Location: /');
    exit();
  } else {
    $errors['password'] = 'Incorrect Password.';

    return view('sessions/create.view.php', [
      'heading' => 'Errors Found',
      'errors' => $errors,
    ]);
    exit();
  }

?>