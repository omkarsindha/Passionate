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
$con = mysqli_connect('localhost', 'root', '', 'passionate');

if (isset($_POST['register'])) {
    $usr_name = mysqli_real_escape_string($con, $_POST['usr_name']);
    $usr_password = mysqli_real_escape_string($con, $_POST['usr_password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
    $usr_email = mysqli_real_escape_string($con, $_POST['usr_email']);
    $usr_number = mysqli_real_escape_string($con, $_POST['usr_number']);
    $usr_age = mysqli_real_escape_string($con, $_POST['usr_age']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    if (!preg_match ("/^[a-zA-z]*$/", $usr_name) ) {  
        array_push($errors,"Only alphabets and whitespace are allowed in username");
    } 
    $length = strlen ($usr_password);
    if ( $length <6 ) { 
        array_push($errors,"Please create a strong password");
    }
    if ($usr_password != $confirm_password) {
        array_push($errors,"Both the password should match");
    }
    if(empty($gender)){
        array_push($errors,"Gender cannot be empty");
    }

    if (count($errors) == 0) {
        $sql0 = mysqli_query($con, "SELECT * FROM usr_data WHERE usr_name = '$usr_name'");
            if(mysqli_num_rows($sql0) > 0){
                array_push($errors,"This username already exist!");
            }
            else
            {
        $usr_password = md5($usr_password);
        $confirm_password = md5($confirm_password);
        $sql = "INSERT INTO usr_data (usr_name, usr_password, confirm_password, usr_number, usr_email, usr_age, gender, dt) VALUES ('$usr_name', '$usr_password', '$confirm_password', '$usr_number', '$usr_email', '$usr_age', '$gender', current_timestamp());";
        mysqli_query($con, $sql);
        $_SESSION['usr_name'] = $usr_name;
        $_SESSION['success'] = "You have registered successfully!";
        header('location: index.php');
    }
    }
}
?>