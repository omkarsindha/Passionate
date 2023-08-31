<?php
session_start();
$usr_name = "";
$usr_password = "";
$usr_password1 = "";
$confirm_password = "";
$usr_email = "";
$usr_number = "";
$usr_age = "";
$gender = "";
$bio = "";
$email = "";
$errors = array();
$output = "";
$name = array();
$con = mysqli_connect('localhost', 'root', '', 'passionate');
 //if user click continue button in forgot password form
 if(isset($_POST['check-email'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $check_email = "SELECT * FROM usr_data WHERE usr_email='$email'";
    $run_sql = mysqli_query($con, $check_email);
    if(mysqli_num_rows($run_sql) > 0){
        $code = rand(999999, 111111);
        $insert_code = "UPDATE usr_data SET code = $code WHERE usr_email = '$email'";
        $run_query =  mysqli_query($con, $insert_code);
        if($run_query){
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From:passionate.website@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a passwrod reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Something went wrong!";
        }
    }else{
        $errors['email'] = "This email address does not exist!";
    }
}

//if user click check reset otp button
if(isset($_POST['check-reset-otp'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM usr_data WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['usr_email'];
        $_SESSION['usr_email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: newpassword.php');
        exit();
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click change password button
if(isset($_POST['change-password'])){
    $_SESSION['info'] = "";
    $usr_password = mysqli_real_escape_string($con, $_POST['usr_password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
    if($usr_password !== $confirm_password){
        $errors['usr_password'] = "Confirm password not matched!";
    }else{
        $code = 0;
        $email = $_SESSION['usr_email']; //getting this email using session
        $usr_password = md5($usr_password);
        $confirm_password = md5($confirm_password);
        $update_pass = "UPDATE usr_data SET code = $code, usr_password = '$usr_password', confirm_password = '$confirm_password' WHERE usr_email = '$email'";
        $run_query = mysqli_query($con, $update_pass);
        if($run_query){
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: index.php');
        }else{
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}





if(isset($_POST['report'])){
    $usr_name = mysqli_escape_string($con, $_POST['name']);
    $reportname = mysqli_escape_string($con, $_POST['reportname']);
    $report_box = mysqli_escape_string($con, $_POST['report_box']);
    $sql = "INSERT INTO usr_report(usr_name, reportname, report_box) 
    VALUES('$usr_name','$reportname','$report_box')";
    mysqli_query($con,$sql);
    header("Location: profile.php");
}


if (isset($_GET['logout'])) {
    $status = "Offline now";
    $sql3 = mysqli_query($con, "UPDATE usr_data SET `status` = '$status' WHERE usr_name = '$usr_name'");
    if($sql3){
        session_destroy();
        unset($_SESSION['usr_name']);
        header('location: index.php');
    }else{
        echo "Something went wrong. Please try again!";
    }

}
?>
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
            $_SESSION['name'] = $row['usr_name'];
            $name = $_SESSION['name'];
            $sql2 = "SELECT usr_name,img_path FROM usr_bio WHERE usr_name= '".$_SESSION['name']."' ";
                         $query2=mysqli_query($con, $sql2);
                         $select= mysqli_fetch_assoc($query2);
            $output .= '<br><br><ul class="list-group">
            <li class="list-group-item search-result-item">
        
           
            <img src="'.$select['img_path'].'"  >
                <?php
            }

          ?>
              <div>
                <p>'.$_SESSION['name'].'</p>
              </div>
              <div class="search-result-item-btn">
            <a href="user_profile.php?pid= '.$_SESSION['name'].'"><button>View</button></a>
              </div>
            </li>';
        }
    }
}
?>
                        <?php
                            $usr_name = $_SESSION['usr_name'];
                 $selectquery = "SELECT img_path from post_info WHERE usr_name = '$usr_name'";
                 $query = mysqli_query($con,$selectquery);
                 
                  $row = mysqli_fetch_assoc($query);
                  $count = mysqli_num_rows($query); 
                  if($count>1){

                  
                         $_SESSION['imgpath']=$row['img_path'];
                 $imgPath=$_SESSION['imgpath'];
                         if(isset($_POST['post_delete']))

                         {
                               $delete = "DELETE from post_info WHERE img_path = '$imgPath'";
                            $query = mysqli_query($con,$delete);
                            header("Location: profile.php?deletesuccess");
                               }
                            }
                               ?>