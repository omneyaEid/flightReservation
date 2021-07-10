<?php
session_start();
$db=mysqli_connect('localhost','root','','project2')or die ("couldn't connect to database"); 
if(isset($_SESSION['id'])) $current_user_ID = $_SESSION['id'];
$username ="";
$email="";

$errors = array();

if (isset($_POST['update_user'])) { 
    $username =mysqli_real_escape_string($db,$_POST['username']);
    $email =mysqli_real_escape_string($db,$_POST['email']);
    $password_1 =mysqli_real_escape_string($db,$_POST['password_1']);
    $number =mysqli_real_escape_string($db,$_POST['number']);
    $balance =mysqli_real_escape_string($db,$_POST['balance']);

if(empty($username)){array_push($errors , "Username is required");}
if(empty($email)){array_push($errors , "E-mail is required");}
if(empty($password_1)){array_push($errors , "password is required");}
if(empty($number)){array_push($errors , "number is required");}

$user_check_query = "select * from signin 
where username='$username'or email='$email' or number='$number'limit 1";

$results = mysqli_query($db ,$user_check_query);
$signin = mysqli_fetch_assoc($results);

if($signin)
{

   
    if($signin['username']===$username){array_push($errors , "this Username is already exists");}
    if($signin['email']===$email){array_push($errors , "this E-mail is already has registered");}
    if($signin['number']===$number){array_push($errors , "this Mobile number is already has registered");}
}
if(count ($errors)==0)
{
$update_query = "UPDATE signin SET username = '" . $username . "' WHERE id = " . $current_user_ID;
mysqli_query($db, $update_query);

$update_query = "UPDATE signin SET email = '" . $email . "' WHERE id = " . $current_user_ID;
mysqli_query($db, $update_query);

$update_query = "UPDATE signin SET password = '" . MD5($password_1) . "' WHERE id = " . $current_user_ID;
mysqli_query($db, $update_query);

$update_query = "UPDATE signin SET number = '" . $number . "' WHERE id = " . $current_user_ID;
mysqli_query($db, $update_query);
    
$update_query = "UPDATE signin SET balance = '" . $balance . "' WHERE id = " . $current_user_ID;
mysqli_query($db, $update_query);

    
 header('location:index2.php');
    
}
}
 ?> 