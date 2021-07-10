<?php
include "navbar.php";
?> 
<html>
<link rel ="stylesheet" href="add.css"/>
<body>
<div class="header" >
<h1 class="cen">Add Aircraft </h1>
<form method="post">
<div class="container">
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
    <button type="submit"  class="button" name="insert">Insert</button>
</div>
</form>

<?php
$do='insert';  
?>
</body>
</html>
<?php
if(isset($_POST["insert"])){
    mysqli_query($_link,"insert into aircraft values (NULL,'$_POST[type]','$_POST[engine]','$_POST[horsepower]','$_POST[speed]','$_POST[length]','$_POST[seats]')");
   header('location:index.php');
}
?>
</div>