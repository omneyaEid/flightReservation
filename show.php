<html>
    <link rel="stylesheet" href="show.css"/>
<body> 
    <h1>List of Flights<h1>  
        <center> 
<table >
<tr>
<th>ID</th>
<th>Flight name</th>
<th>Flight number</th>
<th>Start place</th>
<th>Destination place</th>
<th>Date</th>

</tr>
<?php
$_link=mysqli_connect("localhost","root","")or die(mysqli_error($_link));
mysqli_select_db($_link,"project2")or die(mysqli_error($_link));
$sql="select * from data";
$result=$_link->query($sql);
if($result-> num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
         echo "<tr>";
         echo"<td>"; echo $row["flightID"] ; echo"</td>" ;
         echo"<td>";echo $row["name1"]; echo "</td>";
         echo"<td>"; echo $row["number"]; echo "</td>";
         echo"<td>"; echo $row["name2"]; echo "</td>";
         echo"<td>"; echo $row["name3"]; echo "</td>";
         echo"<td>"; echo $row["date"]; echo "</td>";
         echo"<td>"; echo $row["price"]; echo "</td>";
         echo"</tr>";
    }
}
else
{
    echo "0 result";
}
$_link->close();
?>
</table>
</center>
</body>
</html>