
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="existingUsers.php" method="post" autocomplete="off">
        <h2>Login</h2>

        <div class="grid">

        <div>
            <label>Username</label>
            <input type="text" name="username">
            
        </div>
        <div>
            <br>
            <label>Password</label>
            <input type="password" name="password">
            
        </div>

        </div>
        <br>
        <button type ="submit" name = "submit">Submit</button>

        <p>Don't have an account?
            <a href="index.php">Register here</a>
        </p>
    </form>
</body>
</html>
