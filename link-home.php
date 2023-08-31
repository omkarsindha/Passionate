<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>link</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="link-style.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
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
          <a href="sign-in.php?logout='1'"><button type="button" class="btn btn-danger">Logout</button></a>
      </div>
    </div>
  </nav>
  <!-- section -->
  <section class="main">

    <div style="display:block;" class="line">
      <!--POST-->
      <?php

      $conn = mysqli_connect("localhost", "root", "", "passionate");
      //$usr_name = $_SESSION['usr_name'];
      if (!$conn) {
        echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
        echo 'Error Message: ' . mysqli_connect_error() . '<br>';
        exit;
      }
      $post = "";
      //if(!empty($_SESSION['usr_name'])){

      $sql = "SELECT * FROM post_link";
      $query = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($query)) {
        $usr_name = $row['usr_name'];
        $sql2 = "SELECT img_path from usr_bio WHERE usr_name = '$usr_name' ";
        $query2=mysqli_query($con, $sql2);
        $select= mysqli_fetch_assoc($query2);
        $post = '<div class="post">
                                  <div class="info">
                                    <div class="user">
                                    <div class="profile-pic">
                                    <img src="'.$select['img_path'].'"  >
                                    </div>
                                      <p class="username">'.$row['usr_name'].'</p>
                                    </div>
                                  </div>
                                  <div class="link">
                                  <span> <a target="_blank" href="' . $row['post_link'] . '">' . $row['post_link'] . '</a> </span>
                                  </div>
                                  <div class="post-content">
                                  <div class="reaction-wrapper" style="display: block;">
              
                                    <br><br><p class="description">
                                    <span>' . $row['link_caption'] . '</span> 
                                  </p>
                                  <p class="description">
                                    <span>' . $row['link_hashtag'] . '</span> 
                                  </p>
                                  <p class="post-time">' . $row['dt'] . '</p>
                                  </div>
                                  
                                </div>
                            </div>';
        echo $post;
      }
      //}    
      ?>
    </div>
  </section>

  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>