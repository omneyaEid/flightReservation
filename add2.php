<?php
if (isset($_POST['submit'])) {
    $name1 = $_POST['name1'];
    $number = $_POST['number'];
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    $dbconnect = mysqli_connect('localhost', 'root', '', 'project2');
    $sql = mysqli_query($dbconnect, "insert into data (flightID,name1,number,name2,name3,date,price) 
values (NULL,'$name1','$number','$name2','$name3','$date','$price')");
    if ($sql) {
       // echo "Data inserted successfully";
        header('location:index.php');
    } else {
        echo "Falied to insert";
        header('location:add2.php');
    }

}
?>