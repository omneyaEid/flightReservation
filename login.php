<?php include ('server.php') ?>
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
<form class="box" action ="login.php" method="post">
    <h2> Log in </h2>

    <div>
        <label for="username">Username</label>
        <input type="text" name="username" required>
    </div>
    
    <div>
        <label for="password">password</label>
        <input type="password" name="password" required>
    </div>
    
    <div>
        <label for="role">Role</label>
        <input type="text" name="role" required placeholder="admin or customer" required>
    </div>
    
      <div>
        <label for="submit"></label>
        <input type="submit" name="login_user" value="Log In">
    </div>
    <p> <strong>Not a user? <a href="signin.php"><b>Register Here</b></a></strong></p>
      
      </form>
    </div>

</body>
</html>