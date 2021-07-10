<?php
session_start();
$username = "";
$email = ""; 
$db = mysqli_connect('localhost', 'root', '', 'project2') or die("couldn't connect to database");
if (isset($_SESSION['id'])) $current_user_ID = $_SESSION['id'];
$flightID = mysqli_real_escape_string($db, $_POST['flight_ID']);
$sql = "select flightID from data where flightID='$flightID'";
$flights = mysqli_query($db, $sql) or die(mysqli_error($db));
$isExisted = mysqli_num_rows($flights);

if (isset($_POST['booking'])) {
    if ($isExisted > 0) {
        $query = "INSERT INTO booking (user_id,flight_id) VALUES ('$current_user_ID','$flightID')";
        mysqli_query($db, $query) or die(mysqli_error($db));
        header('location:send_mail.php');        
    }
}
if (isset($_POST['cancling'])) {
    if ($isExisted > 0) {
        $query = "DELETE from booking  WHERE flight_id='$flightID' AND user_id='$current_user_ID'";
        mysqli_query($db, $query) or die(mysqli_error($db));
        header('location:index2.php');
    }
}
if (isset($_POST['updating'])) {
    if ($isExisted > 0) {
        $query = "UPDATE booking SET flight_id = '" . $flightID . "' WHERE user_id = " . $current_user_ID;
        mysqli_query($db, $query) or die(mysqli_error($db));
        header('location:index2.php');
    }
}
?>
