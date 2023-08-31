<?php 
include('log-server.php');
include('errors_log.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Passionate | Login</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/error.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <style>
    body{
      background-color: #fe3b6f;
    background-image: linear-gradient(to top, #5208ff 0%, #ed1a52 100%);
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="main-container">
        <div class="main-content">
          <div class="form-container">
            <div class="form-content box">
              <form method="POST" action="index.php" class="login-form" id="login-form" autocomplete="off">
                <p class="text-center alert-danger" id="error_message"></p>
                <div class="logo">
              <h1 style="font-family: 'Dancing Script', cursive;">Passionate</h1>
                <!-- <img src="assets/images/Passionate.png" alt="" class="logo-img" /> -->
              </div>
              <div class="error-text"></div>
              <br>
                <div class="form-group">
                  <div class="login-input">
                    <input
                      type="text"
                      name="usr_name"
                      placeholder="Type your Username..."
                      required
                    />
                  </div>
                </div>
                <div class="form-group">
                  <div class="login-input">
                    <input
                      type="password"
                      name="usr_password1"
                      id="password"
                      placeholder="Type your password..."
                      required
                    />
                  </div>
                </div>
                <div style="margin-left: 46px;" class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>

                <div class="btn-group">
                  <button class="login-btn" id="login_btn" name="login" type="submit">
                    Log In
                  </button>
                </div>
              </form>
              <div class="or">
                <hr />
                <span>OR</span>
                <hr />
              </div>
              <div class="goto">
                <p>Don't have an account? <a href="sign-up.php">Sign Up</a></p>
              </div>
             
            
            </div>
          </div>
        </div>
      </div>
      <script src="assets/js/login.js"></script>
      <script src="assets/js/sign-in.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
