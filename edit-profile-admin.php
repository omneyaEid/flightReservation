<?php include ('update-profile-action-admin.php') ?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title> </title>
    <link rel="stylesheet" href="myStyle.css">
</head>

<body>

  <div class="continar">
      <div class="header">
        
      </div>
<form class="box" action ="update-profile-action-admin.php" method="post">
 <?php include ('errors.php') ?>
    <h2>Update Profile Admin</h2>
   
    
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" required>
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="text" name="email" required>
    </div>

    <div>
        <label for="password">password</label>
        <input type="password" name="password_1" required>
    </div>
    
    <div>
        <label for="balance">Balance</label>
        <input type="text" name="balance" >
    </div>
    
     <div>
        <label for="number">Mobile Number</label>
        <input type="text" name="number" required>
    </div>
    <div>
        <label for="submit"></label>
        <input type="submit" name="update_admin" value="submit">
    </div>
         
      </form>
    
    
    </div>
</body>
</html>