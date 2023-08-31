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
$errors_log = array();
$con = mysqli_connect('localhost', 'root', '', 'passionate');

if (isset($_POST['login'])) {
    $usr_name = mysqli_real_escape_string($con, $_POST['usr_name']);
    $usr_password1 = mysqli_real_escape_string($con, $_POST['usr_password1']);
    if (!preg_match ("/^[a-zA-z]*$/", $usr_name) ) {  
        array_push($errors_log,"Only alphabets and whitespace are allowed in username");
    } 
    if(count($errors_log) == 0){
        $sql = mysqli_query($con, "SELECT * FROM usr_data WHERE usr_name = '$usr_name'");
        if(mysqli_num_rows($sql) > 0)
        {
            $row = mysqli_fetch_assoc($sql);
            $usr_password1 = md5($usr_password1);
            $enc_pass = $row['usr_password'];
            if($usr_password1 === $enc_pass){
                $status = "Active now";
                $sql2 = mysqli_query($con, "UPDATE usr_data SET status = '$status' WHERE usr_name = '$usr_name'");
                if($sql2){
                    $_SESSION['usr_name'] = $row['usr_name'];
                    header("location: home.php");
                    echo "success";
                }else{
                    array_push($errors_log,"Something went wrong. Please try again!");
                }
            }else{
                array_push($errors_log,"Username or Password is Incorrect!");
            }
        }else{
            array_push($errors_log, "This username not exist!");
        }
    }
}

?>