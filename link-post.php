<?php

$conn = mysqli_connect("localhost","root","","passionate");
if (!$conn) 
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

if(isset($_POST['upload-button'])){
    include('server.php'); 
    $usr_name = $_SESSION['usr_name'];
    $link = $_POST['post_link']; 
    $caption = $_POST['post_caption'];
    $hashtag = $_POST['post_hashtag'];
   

  $sql = "INSERT INTO post_link(usr_name,post_link,link_caption,link_hashtag) 
     VALUES('$usr_name','$link','$caption','$hashtag')";
     mysqli_query($conn,$sql);
     header("Location: link-home.php");
    }
