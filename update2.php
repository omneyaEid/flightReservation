<?php 
$connection= mysqli_connect("localhost","root" ,"");
$db=mysqli_select_db($connection,'project2');
if(isset($_SESSION['flightID'])) $current_flight_ID = $_SESSION['flightID'];
if(isset($_POST['update'])){
    $number=$_POST['number'];
$query="UPDATE data SET name1='$_POST[name1]' , name2='$_POST[name2]', name3='$_POST[name3]',price='$_POST[price]' where number ='$_POST[number]'";
$query_run=mysqli_query($connection,$query);
if($query_run){
    echo"data updated";
   header('location:index.php');
}
else{
    echo "not updated";
   header('location:update2.php');
}
}
?>