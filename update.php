<?php
include "navbar.php";
?>
<html>
<link rel ="stylesheet" href="update.css"/>
<body>
    <div class="header">
<h1 class="cen">Update Aircraft </h1>
<form method="post">
<div class="container">
<div class="id">
    <label>ID Aircart </label>
    <input type="text" name='id' class="i" placeholder="Enter ID">
</div>
    <div class="type">
    <label>Type </label>
    <input type="text" name='type' class="t" placeholder="Enter Type">
    </div>
    <div class="engine">
    <label>Engine </label>
    <input type="text" name='engine' class="e" placeholder="Enter engine">
    </div>
    <div class="hors">
    <label>Horsepower </label>
    <input type="text"name='horsepower' class="h" placeholder="Enter horsepower ">
    </div>
    <div class="speed">
    <label> Speed  </label>
    <input type="text" name="speed" class="s" placeholder="Enter Speed ">
    </div>
    <div class="len">
    <label>Length </label>
    <input type="text" name="length" class="le" placeholder="Enter Length">
    </div>
    <div class="seats">
    <label>Seats  </label>
    <input type="text" name='seats' class="sea" placeholder="Enter Seats ">
    </div>
    <button type="submit"  class="button" name="update">Update</button>
</div>
</div>
</form>
<?php
if(isset($_POST["update"])){
    mysqli_query($_link,"update aircraft set type='$_POST[type]' where id='$_POST[id]'"); 
    mysqli_query($_link,"update aircraft set engine='$_POST[engine]'where id='$_POST[id]'");
    mysqli_query($_link,"update aircraft set horsepower='$_POST[horsepower]'where id='$_POST[id]'"); 
    mysqli_query($_link,"update aircraft set speed='$_POST[speed]'where id='$_POST[id]'");
    mysqli_query($_link,"update aircraft set length='$_POST[length]'where id='$_POST[id]'");  
    mysqli_query($_link,"update aircraft set seats='$_POST[seats]'where id='$_POST[id]'");  
    header('location:index.php');
} 
?>