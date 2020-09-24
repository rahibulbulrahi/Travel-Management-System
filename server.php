<?php

session_start();

$username = "";
$email = "";

$errors = array();

$db = mysqli_connect('localhost','root','','tourism') or die('Couold not connect database');

//register users

$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$username = mysqli_real_escape_string($db, $_POST['username']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$password = mysqli_real_escape_string($db, $_POST['password']);

/*
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$password = $_POST['password'];
*/
if(empty($fullname)) {array_push($errors, "Fullname is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($username)) {array_push($errors, "Username is required");}
if(empty($phone)) {array_push($errors, "Phone Number is required");}
if(empty($password)) {array_push($errors, "Password is required");}

$user_check_query = "SELECT * FROM user WHRE username ='$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($usre)
{
    if($user['username'] === $username){array_push($errors,"User already Exist");}
    if($user['email'] === $email){array_push($errors, "This email alaready registared");}
}

if(count($errors) == 0)
{
    $password = md5($password);
    $repeatpassword = md5($repeatpassword);
    $query = "INSERT INTO user (fullname,email,username,phone,password) VALUES ('$fullname','$email','$username','$phone','$password')";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are registared";

    header('location:dashboard.php');
}

?>