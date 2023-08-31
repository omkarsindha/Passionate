<?php 
    include 'server.php';
    include 'camera-post.php'; 
    include 'update.php';
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets\css\style-profile.css">
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
    <header class="profile-header">
      <div class="profile-container">
        <div class="profile">
          <div class="profile-image">
          <?php 
              $usr_name = $_SESSION['usr_name'];
              $selectquery = "SELECT img_path from usr_bio WHERE usr_name = '$usr_name' ";
              $query = mysqli_query($con,$selectquery);
              //$result = mysqli_fetch_array($query);
              while($result = mysqli_fetch_array($query)){
                  ?>
                   <img src="<?php echo $result['img_path']; ?>" alt="" width="420px" height="420px"> 
                  <?php
              }

            ?>
          </div>
          <div class="profile-user-settings">
          <h1 class="profile-user-name"> <?php if(isset($_SESSION["usr_name"])): ?>
            <?php echo $_SESSION['usr_name']; ?>
            <?php endif ?></h1>
            <hr>
          </div>
          <!-- <div class="profile-stats">
            <ul>
              <li><span class="profile-stat-count">345</span> posts</li>
              <li><span class="profile-stat-count">1345</span> followers</li>
              <li><span class="profile-stat-count">1945</span> following</li>
            </ul>
          </div> -->
          <div class="profile-bio">
            <p>
              <span class="profile-real-name"><h1>Bio</h1></span> <br>
              <h1 class="profile-user-name"> 
            <?php 
            $usr_name = $_SESSION['usr_name'];
            $sql = "SELECT * FROM usr_bio WHERE usr_name = '$usr_name'";
            $result = mysqli_query($con,$sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
              while($row = mysqli_fetch_assoc($result)){
                echo $row['bio'] ."<br>";
              }
            }
            ?>
           </h1><br>
            
             <a href="edit_profile.php"><button class="profile-btn profile-edit-btn">Edit Bio</button></a>
            <button
              class="profile-btn profile-settings-btn"
              aria-label="profile settings"
            >
              <i class="fas fa-cog"></i>
            </button>
            </p>
          </div>
      </div>
    </header>
              <!-- $usr_name = $_SESSION['usr_name'];
              $selectquery = "SELECT img_path from post_info WHERE usr_name = '$usr_name'";
              $query = mysqli_query($con,$selectquery); -->
    <main>
      <div class="profile-container">
      
        <div class="gallery">
          <div class="gallery-item">
          <section class="main">
      
         <div style="display:block;" class="line">
          <!--POST-->
          <?php
          
                 $conn = mysqli_connect("localhost","root","","passionate");
                 $usr_name = $_SESSION['usr_name'];
                 $selectquery = "SELECT img_path from post_info WHERE usr_name = '$usr_name'";
                 $query = mysqli_query($conn,$selectquery);
                 
                  while($row = mysqli_fetch_assoc($query)){
                         $imgPath=$row['img_path'];
                         $video = "mp4";
                         $vid = strpos($imgPath,$video);
                         ;
                        
                         if($vid){ 
                          $post ='<div class="post">
                                  
                                  
                                  <video  width="630px" controls src="'.$row['img_path'].'" class="post-image"></video>
                                  <form action="profile.php" method="post">
                                  
              <div class="btn-group">
              <button class="login-btn" id="signup_btn" style="background-color:red;" name="post_delete" type="submit">
                Delete Post
              </button>
            </div>
                                  </form>
                                 </div>';
                               print_r($post);
                               if(isset($_POST['delete']))
                               { $delete = "DELETE img_path from post_info WHERE img_path = '$imgPath'";
                                 $query = mysqli_query($conn,$delete);
                                 header("Location: profile.php?deletesuccess");
                                    }
                         }
                            else{
                              $post ='<div class="post">
                              
                               
                              <img   src="'.$row['img_path'].'" class="post-image" >
                              <form action="profile.php" method="post">
                              
              <div class="btn-group">
              <button class="login-btn" id="signup_btn" style="background-color:red;" name="post_delete" type="submit">
                Delete Post
              </button>
            </div>
                              </form>
                              </div>';
                          print_r($post);
                          if(isset($_POST['delete']))
                          { $delete = "DELETE img_path from post_info WHERE img_path = '$imgPath'";
                            $query = mysqli_query($conn,$delete);
                            header("Location: profile.php?deletesuccess");
                               }
                            }
                          }  
                       
                           ?>   
           </div>
    </section>
            
          </div>
          
      
        </div>
      </div>
    </main>

    <!--Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
