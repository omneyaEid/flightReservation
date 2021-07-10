<?php
session_start();
$username = "";
$email = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'project2') or die("couldn't connect to database");
if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $role = mysqli_real_escape_string($db, $_POST['role']);
    $number = mysqli_real_escape_string($db, $_POST['number']);
    $balance = mysqli_real_escape_string($db, $_POST['balance']);
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "E-mail is required");
    }
    if (empty($password_1)) {
        array_push($errors, "password is required");
    }
    if (empty($number)) {
        array_push($errors, "number is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "passwords don't match");
    }
    $user_check_query = "select * from signin where username='$username' or email='$email'  or number='$number' limit 1";
    $results = mysqli_query($db, $user_check_query);
    $signin = mysqli_fetch_assoc($results);
    if ($signin) {
        if ($signin['username'] === $username) {
            array_push($errors, "this Username is already exists");
        }
        if ($signin['email'] === $email) {
            array_push($errors, "this E-mail is already has registered");
        }
        if ($signin['number'] === $number) {
            array_push($errors, "this Mobile number is already has registered");
        }
    }
    if (count($errors) == 0) {
        $password = md5($password_1);
        $query = "INSERT INTO signin (username , email , password,role,number,balance) 
    VALUES ('$username' , '$email' , '$password','$role','$number','$balance')";
        mysqli_query($db, $query);
        $user_id = $user_row['id'];
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        // $_SESSION ['username']=$username;
        // $_SESSION ['success']="you are now logged in";
        if ($role == 'admin') {
            header('location:index.php');
        } else if ($role == 'customer') {
            header('location:index2.php');
        }
    }
}
//login user
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $role = mysqli_real_escape_string($db, $_POST['role']);
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "password is required");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM signin WHERE username='$username' AND password='$password' AND role='$role' ";
        $results = mysqli_query($db, $query);
        $isExisted = mysqli_num_rows($results);
        if ($isExisted != 0) {
            $user_row = mysqli_fetch_array($results);
            $user_id = $user_row['id'];
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "logged in successfully";
            if ($role == 'admin') {
                header('location:index.php');
            } else if ($role == 'customer') {
                header('location:index2.php');
            }
        } else {
            echo "<div align='center'style='padding: 40px; color:red; float:right; width:25%;'>wrong username/password/role . please try again</div>";
        }
    }
}
?>