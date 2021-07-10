<?php
session_start();
unset($_SESSION['signin']);
unset($_SESSION['id']);
unset($_SESSION['flight_ID']);
header("Location: first.html");
?>
