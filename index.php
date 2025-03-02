
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com"/>
    <title>Document</title>
    <link rel="stylesheet" href="CSS/styles.css" type="text/css">
    
</head>
<body>
<nav class="navigation-bar">
    
   <div class="navdiv">
    <div class="logo">BookExchange</div>
    <ul>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="registration.php">Register</a></liid>
    </ul>
    </div>
</nav>
<form action="Login/existingUsers.php" method="post" autocomplete="off">
        

        <div class="login">
        <h2>Login</h2>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Type your username">
            
        </div>
        <div class="input-group">
            <br>
            <label>Password</label>
            <input type="password" name="password" placeholder = "Type your password">
            
        </div>
        <br>
        <button class="button1" type ="submit" name = "submit">Login</button>
      
        <p>Don't have an account? <a href="registration.php">Register here</p>
        
        </div>
        
    </form>
</body>
</html>
