<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $firstname  = mysqli_real_escape_string ($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string ($db, $_POST['lastname']);
  $rawdate = htmlentities($_POST['dob']);
  $date = date('Y-m-d', strtotime($rawdate));
  $gender=$_POST['gender'];
  $mobile=mysqli_real_escape_string ($db, $_POST['mobile']);
  $college=mysqli_real_escape_string ($db, $_POST['college']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO `users`(`id`, `mobile`, `email`, `password`, `firstname`, `lastname`, `gender`, `dob`, `college`) VALUES  (NULL, '$mobile', '$email', '$password_1', '$firstname', '$lastname', '$gender', '$date','$college')";
  	mysqli_query($db, $query);
    $query = "INSERT INTO `login`(`log_id`, `email`, `password`)  VALUES (NULL,'$email','$password_1')";
    mysqli_query($db, $query);
  	$_SESSION['username'] = $firstname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      if ($email == 'admin@admin.com' && $password == 'admin2412') {
        $_SESSION['username'] = 'Admin';
        $_SESSION['success'] = "You are now logged in";
        $_SESSION['key'] ='admin';
        $_SESSION['email']=$email;
        header('location: admin.php');
      }
      else{
      $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
      $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $user['firstname'];
      $_SESSION['success'] = "You are now logged in";
      $_SESSION['key'] = $user['firstname'];
      header('location: index.php');
      }
    }
    else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>