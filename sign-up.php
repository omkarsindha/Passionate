<?php 
 include("reg-server.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Passionate | Register</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/error.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

</head>
<style>
  body {
    background-color: #fe3b6f;
    background-image: linear-gradient(to top, #5208ff 0%, #ed1a52 100%);
  }
</style>

<body>
  <div class="container">
    <div class="main-container">
      <div class="main-content">

        <div class="form-container">
          <div class="form-content box">
         
          
            <form name="myForm" method="post" action="sign-up.php" class="login-form" autocomplete="off" id="signup-form">
            <div class="logo">
              <h1 style="font-family: 'Dancing Script', cursive;">Passionate</h1>
              <!-- <img src="assets/images/Passionate.png" alt="" class="logo-img" /> -->
            </div>
            <div class="error-text"></div>
            <?php include('errors.php'); ?><br>
              <div class="form-group">
                <div class="login-input">
                  <input type="text" name="usr_name" placeholder="Type your username..." required />
                </div>
              </div>
              <div class="form-group">
                <div class="login-input">
                  <input type="password" name="usr_password" id="usr_password" placeholder="Type your password..." required />
                </div>
              </div>

              <div class="form-group">
                <div class="login-input">
                  <input type="password" name="confirm_password" id="confirm_password" placeholder="Type your password again..." required />
                </div>
              </div>
              <div class="form-group">
                <div class="login-input">
                  <input type="number" size="10" name="usr_number" min="1111111111"
                  max="9999999999" placeholder="Type your number..." required />
                </div>
              </div>
              <div class="form-group">
                <div class="login-input">
                  <input type="email" name="usr_email" placeholder="Type your email..." required />
                </div>
              </div>
              <div class="form-group">
                <div class="login-input">
                  <input type="number" name="usr_age" size="3" min="1" max="100" placeholder="Enter your age..." required />
                </div>
              </div>
              <div class="form-check form-check-inline" style="margin-left: 9%;">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
              <div class="btn-group">
                <button class="login-btn" id="signup_btn" name="register" type="submit">
                  Sign Up
                </button>
              </div>
            </form>
            <div class="or">
              <hr />
              <span>OR</span>
              <hr />
            </div>
            <div class="goto">
              <p>Already have an account? <a href="index.php">Login</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>