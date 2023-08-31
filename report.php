<?php 
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Passionate | Report</title>
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
  </head>
  <body>
    
  <?php
  if(isset($_POST['search'])){
    $search_name = $_POST['search'];
    $search_name = preg_replace("#[^0-9a-z]#i","",$search_name);

    $query = mysqli_query($con,"SELECT * FROM usr_data WHERE usr_name LIKE '%$search_name%'"); 
    $count = mysqli_num_rows($query); 
    if($count == 0){
        $output = 'There are no result';
    }
    else{
        while($row = mysqli_fetch_array($query)){
            $name = $row['usr_name'];
            
            $output .= '<ul class="list-group">
            <li class="list-group-item search-result-item">
              <img src="assets/images/profile.jpg" alt="" />
              <div>
                <p>'.$name.'</p>
              </div>
              <div class="search-result-item-btn">
                <a href="user_profile.php"><button>View</button></a>
              </div>
            </li>';
        }
    }
}
?>
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

    <!-- section -->
    <section class="main">
      <div class="wrapper left-col">
          <h3>Report</h3>

          <form action="profile.php" method="POST">
            
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
            <h1 class="profile-user-name" style="display: block;"> <?php if(isset($_SESSION["usr_name"])): ?>
            <?php echo $_SESSION['usr_name']; ?>
            <?php endif ?></h1><br><br>
            <div class="mb-3">
              <label for="name" class="form-label">Your Username</label>
              <input
                type="text"
                class="form-control"
                name="usr_name"
                id="name"
                placeholder="Your Username"
              />
            </div>
            <div class="mb-3">
              <label for="reportname" class="form-label">Username you want to report</label>
              <input
                type="text"
                class="form-control"
                name="reportname"
                id="name"
                placeholder="Username you want to report"
              />
            </div>
            <div class="mb-3">
              <label for="report_box" class="form-label">Reason to report</label>
              <textarea
                name="report_box"
                id="bio"
                class="form-control"
                cols="30"
                rows="3"
              ></textarea>
            </div>
            <div class="mb-3">
            <button class="login-btn" id="login_btn" name="report" type="submit">
                    Report
                  </button>
            </div>
          </form>
       
      </div>
    </section>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
