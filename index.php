
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    
</head>
<body>
<form action="existingUsers.php" method="post" autocomplete="off">
        

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
        <button type ="submit" name = "submit">Login</button>

        <p>Don't have an account?
            <a href="registration.php">Register here</a>
        </p>
        </div>
        
    </form>
</body>
</html>
