<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Sign up to QI & JIN | Best Fashion Online Store</title>
 <link rel="stylesheet" href="css/form-style.css">
 <link rel="stylesheet" href="css/home.css">
</head>

<nav class="navbar"></nav>

<body>
 <div class="header">
  <h1>Sign Up</h1>
 </div>

 <form action="register.php" method="post">
  <?php include('errors.php'); ?>
  <div class="input-group">
   <label>Username</label>
   <input type="text" name="username">
  </div>

  <div class="input-group">
   <label>Email</label>
   <input type="email" name="email">
  </div>

  <div class="input-group">
   <label>Password</label>
   <input type="password" name="password_1">
  </div>

  <div class="input-group">
   <label>Confirm password</label>
   <input type="password" name="password_2">
  </div>

  <p><span><input type="checkbox"></span> I agree to the terms of services</p>
  
  <div class="input-group">
   <button type="submit" class="btn" name="reg_user">Register</button>
  </div>
  
  <div class="signup_link">
    Already have an account? <a href="login.php">Log In</a>
  </div>
 </form>

 <footer></footer>

 <script src="js/navstyle.js"></script>
 <script src="js/footer.js"></script>

</body>
</html>