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
        <li class="button primary"><a href="login.php">Log In</a></li>  
      </ul>
    </nav>
    <div class="container">
      <form action="signup.inc.php" method="post" class="form" id="signup">
        <h1 class="form__title">Sign Up</h1>
        
        <div class="form__input-group">
          <input type="text"  class="form__input" name="uid" autofocus placeholder="Username">
          
        </div>
        <div class="form__input-group">
          <input type="text"  class="form__input" name="mail"  autofocus placeholder="Email Address">
          
        </div>
        <div class="form__input-group">
          <input type="password" name="pwd"  class="form__input "  autofocus placeholder="Password">
          
        </div>
        <div class="form__input-group">
          <input type="password" name="pwd-repeat" class="form__input"  autofocus placeholder="Confirm Password">  
        </div>
        
        <button class="form__button" name="signup-submit" type="submit"> Next</button>

        <?php
          if (isset($_GET['error'])){
            if ($_GET['error'] == "emptyfields"){
              echo '<p class="form__message form__message--error">All fields required!</p>';
              
            }
            else if ($_GET['error'] == "invalidmail&uid");
              echo '<p class="form__message form__message--error">Invalid username or email!</p>';
              
          }

        ?>
        <!-- <p class="form__message form__message--error">hello my name is </p> -->
        <p  class="form__text1">
          <a href="login.php"  class="form__link"  id="link">Already have an account? Login</a>
        </p>
      </form>
    </div>
    

  </body>
</html>