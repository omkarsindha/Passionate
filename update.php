<?php
$con = mysqli_connect("localhost", "root", "", "passionate");
if (!$con) 
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

if(isset($_POST['upload_bio'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt= explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');
   if(in_array($fileActualExt,$allowed)){
      if($fileError === 0){
         if($fileSize<10000000000){
            $fileNameNew = uniqid('',true).".".$fileActualExt;
            $fileDestination='profile_pic/'.$fileNameNew;  
            move_uploaded_file($fileTmpName,$fileDestination);
         
            header("Location: profile.php?uploadsucess");
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
include('server.php');
    $usr_name = $_SESSION['usr_name'];
    $bio = $_POST['bio'];
$sql1 = "DELETE FROM usr_bio WHERE usr_name='$usr_name'";
mysqli_query($con,$sql1);
    $sql = "INSERT usr_bio(usr_name, img_path, bio ) VALUES('$usr_name', '$fileDestination', '$bio')";
    mysqli_query($con,$sql);
    header("Location: profile.php");
}
?>