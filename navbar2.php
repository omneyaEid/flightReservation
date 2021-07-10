<?php
include 'connect.php';
?>
<html>
    <link rel ="stylesheet" href="nav.css"/>
    <div class="navbar">
    <a class ="q" href="first.html">Home</a>
    <a href="edit-profile-user.php">Update Profile</a>
    <div class="dropdown">
        <button class="dropbtn">flights
          <i class="fa fa-caret-down"></i>
        </button>
      <div class="dropdown-content">
          <a href="booking.php">book</a>
          <a href="cancling.php">cancling booking</a>
          <a href="updating.php">changing class</a>
      </div>
   </div>
        <a href="logout.php">logout</a>
  </div>
  </html>
