<?php
include 'connect.php';
?>
<html>
    <link rel ="stylesheet" href="nav.css"/>
    <div class="navbar">
    <a class ="q" href="first.html">Home</a>
    <a href="edit-profile-admin.php">Update Profile</a>
     <div class="dropdown">
      <button class="dropbtn">Aircraft
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="add.php">ADD</a>
        <a href="update.php">update</a>
      </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">flight
          <i class="fa fa-caret-down"></i>
        </button>
      <div class="dropdown-content">
          <a href="add_flight.php">ADD</a>
          <a href="update_flight.php">update</a>
           <a href="show.php">Show flights</a>
      </div>
   </div>

        <a href="logout.php">logout</a>
  </div>
  </html>
