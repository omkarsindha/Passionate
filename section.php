<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Section</title>
	<link rel="stylesheet" href="section.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Passionate</h2>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="section.php">Miscellaneous</a></li>
            <li><a href="cricket.php">Cricket</a></li>
            <li><a href="dance.php">Dance</a></li>
            <li><a href="football.php">Football</a></li>
            <li><a href="gaming.php">Gaming</a></li>
            <li><a href="photography.php">Photography</a></li>
            <li><a href="vlog.php">Vlog</a></li>
            <li><a href="link-home.php">Links</a></li>
        </ul> 
    </div>
    <div class="main_content">
        <div class="header">Explore Your Hobbies</div>  
        <div class="info">
        <?php
                 $conn = mysqli_connect("localhost","root","","passionate");
               
                 if (!$conn) 
                    {
                    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
                    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
                    exit;
                    }
                   $post = ""; 
                   $sql = "SELECT * FROM post_info ";
                   $query = mysqli_query($conn, $sql);
                   while($row = mysqli_fetch_assoc($query)){
                        $imgPath=$row['img_path'];
                        $video = "mp4";
                        $sql2 = "SELECT usr_name,img_path FROM post_info WHERE usr_name= '".$row['usr_name']."' ";
                        $query2=mysqli_query($con, $sql2);
                        $select= mysqli_fetch_assoc($query2);
                        if(strpos($imgPath,$video)){ 
                         $post =
                        '<div class="post">
                          <div class="top">
                              <div class="userDetails">
                              <div class="profile">
                              <img src="'.$select['img_path'].'" class="cover" >
                              </div>
                                <p class="username">'.$row['usr_name'].'</p>
                                </div>  
                          </div>  
                          <div class="imgBx">
                               <video controls src="'.$row['img_path'].'" class="image">
                          </div>    
                        </div>
                        <hr>';
                        echo $post;
                        }
                        else{
                            $post =
                            '<div class="post">
                            <div class="top">
                                <div class="userDetails">
                                <div class="profile">
                                <img src="'.$select['img_path'].'" class="cover" >
                                </div>
                                  <p class="username">'.$row['usr_name'].'</p>
                                  </div>  
                            </div>  
                            <div class="imgBx">
                                 <img src="'.$row['img_path'].'" class="image">
                            </div>    
                          </div>
                          <hr>';
                          echo $post;
                        }
                    }  
                        ?>
          
        </div>  
   </div>    
<script src="script.js"></script>

</body>
</html>