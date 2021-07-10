<?php 
session_start();
if(isset($_SESSION['id'])) $current_user_ID = $_SESSION['id'];
?>
<!doctype html>
<html> 
   <head>
      <title> </title>
      <link rel="stylesheet" href="myStyle.css">
   </head>
   <body>
      <div class="continar">
         <div class="header">
         </div>
         <form class="box" action ="flightsAction.php" method="POST">
            <h2> Update flight </h2>
            <div>
               <label for="flight_ID">Enter flight ID </label>
               <input type="text" name="flight_ID" required>
            </div>
            <div>
               <label for="submit"></label>
               <input type="submit" name="updating" value="cancling">
            </div>
         </form>
      </div>
   </body>
</html>