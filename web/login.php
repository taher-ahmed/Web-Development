
<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Type racer</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>

<body id="login_signup_page">
  <nav>
    <ul class="menu">
      <li class="logo"><a href="index.html"><img src="Main logo.png" alt="logo" width="210" height="60" /></a></li>
      <li class="button primary"><a href="signup.php">Sign Up</a></li>  
    </ul>
  </nav>
  <div class="container">
    <form action="login.inc.php" method="post" class="form" id="login">
      <h1 class="form__title">Login</h1>
      
      <div class="form__input-group">
        <input type="text" name="mailuid" class="form__input"  autofocus placeholder="Username or email">
      
      </div>
      <div class="form__input-group">
        <input type="password"  name="pwd" class="form__input "  autofocus placeholder="Password">
      </div>
      <div class="button-box">
        <div id="btn"></div>
        <a href="main.html">
          <button class="form__button" type="submit" name="login-submit"> Next</button>
        </a>
      </div>
      <div class="form__message form__message--error">siuuu</div>
      <p  class="form__text">
        <a href="#" class="form__link" id="forgot">Forgot your password?</a>
      </p>
      <p  class="form__text">
        <a href="signup.php"  class="form__link">Don't have an account? Sing Up</a>
      </p>
    </form>
  </div>
</body>
</html>
