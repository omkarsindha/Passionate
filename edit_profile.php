<?php 
include 'server.php';
include 'update.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Passionate | Edit Profile</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7ae059cccb.js" crossorigin="anonymous"></script>
    <style>
      .profimg{
        border: solid;
        border-color: black;
        height: 310px;
        width: 310px;
        cursor: pointer;
        object-fit: cover;
      }
      #display_profile{
        height: 310px;
        width: 310px;
        border: 1px solid black;
        background-position: center;
        background-size: cover;
      }
      
    </style>
  </head>
  <body>
     <!-- navigation -->
  <nav class="navbar">
    <div class="nav-wrapper">
      <h1 style="font-family: 'Dancing Script', cursive;">Passionate</h1>
      <!-- <img class="brand-img" src="assets/images/logo.png" /> -->
      <form action="search.php" method="POST" id="new">
        <div class="input-group search">
          <input type="text" class="form-control" name="search" placeholder="Search for...">
          <span class="input-group-btn">
            <input class="btn btn-default" type="submit" value="Search" />
          </span>
        </div>

      </form>

      <div class="nav-items">
        <a href="home.php"><i class="icon fas fa-home" style="padding-left: 6px;"></i></a>
        <a href="login.php"><i class="fa-brands fa-rocketchat" style="padding-left: 6px;"></i>
          <a href="section.php"><i class="fa-solid fa-compass" style="padding-left: 6px;"></i></a>
          <a href="camera.php"><i class="icon fas fa-plus"></i></a>
          <a href="report.php"><i class="fa-solid fa-flag"></i></a>
          <div class="icon user-profile">
            <a href="profile.php"><i class="fas fa-user"></i></a>
          </div>
          <a href="index.php?logout='1'"><button type="button" class="btn btn-danger">Logout</button></a>
      </div>
    </div>
  </nav>
    <!-- section -->
    <section class="main">
      <div class="wrapper left-col">
          <h3>Update Profile</h3>

          <form action="update.php" method="POST" enctype="multipart/form-data">
            <?php $name = $_SESSION['usr_name'];?>
          <div class="form-control">
          <label>Select Image</label>
          <div id="display_profile">
           <label for="profcamera">
           <img class="profimg">
          <input type="file" name="file" id="profcamera" style="display: none; visibility: none; cursor: pointer;" ></input>
           </label>
           </div>

           </div>
           <br>
            <div class="mb-3">
              <label for="bio" class="form-label">Bio</label>
              <textarea
                name="bio"
                id="bio"
                class="form-control"
                cols="30"
                rows="3"
              ></textarea>
            </div>
            <div class="mb-3">
            <button class="login-btn" name="upload_bio">
                    Update
                  </button>
            </div>
          </form>
       
      </div>
    </section>

    <!-- script -->
    <script>
      const profcamera = document.querySelector("#profcamera");
      var uploaded_image = "";
      
      profcamera.addEventListener("change",function(){
        const reader = new FileReader();
        reader.addEventListener("load", () => {
          uploaded_image = reader.result;
          document.querySelector("#display_profile").style.backgroundImage  = `url(${uploaded_image})`;
        });
        reader.readAsDataURL(this.files[0]).insteadOf(profimg);
      });
      
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
