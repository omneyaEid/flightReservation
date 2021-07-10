<?php

$db=mysqli_connect('localhost','root','','project2')or die ("couldn't connect to database"); 
if(isset($_SESSION['id'])) $current_user_ID = $_SESSION['id'];
?>
<?php
include "homepage2.php";
?>