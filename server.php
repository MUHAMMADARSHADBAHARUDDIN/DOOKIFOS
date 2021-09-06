<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$password = "";
$code=substr(md5(mt_rand()),0,15);
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'web2021', 'web2021', 'test');

//Verify User
if(isset($_POST['signup-btn']))
{
	
	
  $query = "INSERT INTO verify (username, email, code) 
  			  VALUES('$username', '$email', '$code')";
  	mysqli_query($db, $query);
	

	$message = "Your Activation Code is ".$code."";
    $to=$email;
    $subject="Activation Code For Dooki.Com";
    $from = 'Dooki.Com';
    $body='Your Activation Code is '.$code.' Please Click On This link <a href="register.php">Verify.php?&code='.$code.'</a>to activate your account.';
    $headers = "From:".$from;
    mail($to,$subject,$body,$headers);
	
	echo "An Activation Code Is Sent To You Check You Emails";
}

// REGISTER USER
if (isset($_GET['code'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM customer WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database

  	$query = "INSERT INTO customer (username, email) 
  			  VALUES('$username', '$email')";
  	mysqli_query($db, $query);

    $query = "INSERT INTO users (username, password) 
  			  VALUES('$username', '$password')";
  	mysqli_query($db, $query);
  	
  	header('location: homepage.php');
  }
}

// ... 
// LOGIN USER
if (isset($_POST['login-btn'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {

  	  header('location: homepage.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}



?>

