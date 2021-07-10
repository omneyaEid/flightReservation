<?php include ('server.php') ?>
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
<form class="box" action ="signin.php" method="post">
    <?php include('errors.php')?>
	<h2>  Egypt Air Sign In </h2>
   
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" required>
    </div>
    
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" required>
    </div>
    
    <div>
        <label for="password">password</label>
        <input type="password" name="password_1" required>
    </div>
    
    <div>
        <label for="password">confirm password</label>
        <input type="password" name="password_2" required>
    </div>
    
     <div>
        <label for="number">Mobile Number</label>
        <input type="text" name="number" required>
    </div>
    
    <div>
        <label for="balance">Balance</label>
        <input type="text" name="balance" >
    </div>
    
    
    <div>
        <label for="role">Role </label>
        <input type="text" name="role" required placeholder="admin or customer">
    </div>
    
    
    <div>
        <label for="submit"></label>
        <input type="submit" name="reg_user" value="submit">
    </div>
      
    <p><strong> Already a user? <a href="login.php"><b>Log in</b></a></strong></p>
      
      </form>
    </div>

</body>
</html>