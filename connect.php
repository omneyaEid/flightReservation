<?php
//session_start();
$_link=mysqli_connect("localhost","root","")or die(mysqli_error($_link));
mysqli_select_db($_link,"project2")or die(mysqli_error($_link));
if (isset($_SESSION['id'])) $current_user_ID = $_SESSION['id'];
?> 