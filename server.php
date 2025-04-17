<?php
session_start();

//initializing variables
$username ="";
$email ="";
$errors =array();

//connect to database
$db = mysqli_connect('localhost','root','','project');

//register
if (isset($_POST['reg_user'])){
 //receive all input 
 $username = mysqli_real_escape_string($db, $_POST['username']);
 $email = mysqli_real_escape_string($db, $_POST['email']);
 $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
 $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

 //form validation
 //by adding array_push() corresponding error unto $errors array
 if (empty($username)) {array_push($errors, "Username is required");}
 if (empty($email)) {array_push($errors, "Email is required");}
 if (empty($password_1)) {array_push($errors, "Password is required");}
 if ($password_1 != $password_2) {
  array_push($errors, "The password do not match");
 }

 //check database make sure no duplicate
 $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
 $result = mysqli_query($db, $user_check_query);
 $user = mysqli_fetch_assoc($result);

 if ($user) {
  if ($user['username'] === $username) {
   array_push($errors, "Username already exists");
  }

  if ($user['email'] === $email) {
   array_push($errors, "Email already exists");
  }
 }

 //register user if no errors
 if (count($errors) == 0) {
  $password = ($password_1);

  $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
  mysqli_query($db, $query);
  $_SESSION['username'] = $username;
  $_SESSION['success'] = "You have succeessfully logged in";
  header('location: index.html');
 }

 //Login
 if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)){
        array_push($errors, "Username is required");
    }
    if (empty($password)){
        array_push($errors, "password is required");
    }

    if (count($errors) == 0){
        $password = ($password_1);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) ==1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.html');
        }else{
            array_push($errors, "Invalid username/password entered");
        }
    }
  }
}

?>