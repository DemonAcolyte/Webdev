

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="CSS/styles.css" type="text/css">
</head>
<body>
    <nav class="navigation-bar">
    
    <div class="navdiv">
     <div class="logo">BookExchange</div>
     <ul class="design">
       <li><a href="#">About</a></li>
       <li><a href="#">Contact</a></li>
       <li><a href="index.html">Login</a></li>
     </ul>
     </div>
    </nav>
    <form action="Registration/newUsers.php" method="post" autocomplete="off">
        

        <div class="register">
        <h2>Sign Up</h2>
    
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
            
        </div>
        <div class="input-group">
            <br>
            <label>Password</label>
            <input type="password" name="password">
            
        </div>

        <div class="input-group">
            <br>
            <label>Email</label>
            <input type="email" name="email">

        </div>
        <button class="button1" type = "submit" name = "submit">Submit</button>

        <p>Already have an account?
            <a href="index.html">Login here</a>
        </p>

        </div>
      
        
    </form>
</body>
</html>

