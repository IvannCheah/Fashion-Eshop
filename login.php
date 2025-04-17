<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login to QI & JIN | Best Fashion Online Store</title>
 <link rel="stylesheet" href="css/form-style.css">
 <link rel="stylesheet" href="css/home.css">
</head>


<nav class="navbar"></nav>


<body>
 <div class="header">
  <h1>Login</h1>
 </div>

 <form action="login.php" method="post">
 <?php include('errors.php'); ?>
  <div class="input-group">
   <label>Username</label>
   <input type="text" name="username">
  </div>

  <div class="input-group">
   <label>Password</label>
   <input type="password" name="password">
  </div>

  <div class="input-group">
   <button type="submit" class="btn" name="login_user">Login</button>
  </div>

  <div class="signup_link">
    <a href="register.php">Forgot Password</a>
    <br>
    Not a member? <a href="register.php">Sign up</a>
  </div>
 </form>

 <footer></footer>

 <script src="js/navstyle.js"></script>
 <script src="js/footer.js"></script>

</body>
</html>