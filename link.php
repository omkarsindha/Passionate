<?php 
//include 'server.php';
include 'link-post.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Link-upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="camerastyle(1).css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7ae059cccb.js" crossorigin="anonymous"></script>
     
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

    <div class="camera-container">
      <div class="camera">
        <div class="camera-image">
          
          <form action="link-post.php" method="POST" class="camera-form" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" name="post_link" class="form-control" placeholder="enter link.."/>
            </div>
            <div class="form-group">
              <input type="text" name="post_caption" class="form-control" placeholder="enter captions.." />
            </div>
            <div class="form-group">
              <input type="text" name="post_hashtag" class="form-control" placeholder="enter hashtags.."/>
            </div>
            <div class="form-group">
              <button name="upload-button" class="upload-btn">
                Post
              </button>
            </div>
          </form>
          
        </div>
      </div>
    </div>

   
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

  </body>
</html>
