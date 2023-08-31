<?php

$conn = mysqli_connect("localhost","root","","passionate");
if (!$conn) 
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

if(isset($_POST['upload-button'])){
   $usrname = "";
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  $fileExt= explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpg','jpeg','png','mp4');
  if(in_array($fileActualExt,$allowed)){
     if($fileError === 0){
        if($fileSize<100000000000){
           $fileNameNew = uniqid('',true).".".$fileActualExt;
           $fileDestination='uploads/'.$fileNameNew;  
           move_uploaded_file($fileTmpName,$fileDestination);
           include('server.php'); 
    $usr_name = $_SESSION['usr_name'];
             $caption = $_POST['post_caption'];
             $hashtag = $_POST['post_hashtag'];
             $section = $_POST['post_section'];

             $sql = "INSERT INTO post_info(usr_name,img_path, post_caption,post_hashtag,post_section) 
             VALUES('$usr_name','$fileDestination','$caption','$hashtag','$section')";
             mysqli_query($conn,$sql);
             header("Location: profile.php");
        }
        else{
            echo"File size should be less than 10mb";
        }
     }
     else{
         echo"error uploading";
     }
  } 
  else{
      echo"no upload of this type only jpg png allowed";
   } 
 }
   
    ?>