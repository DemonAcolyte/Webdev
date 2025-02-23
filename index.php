

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <form action="newUsers.php" method="post" autocomplete="off">
        <h2>Sign Up</h2>

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

        <div>
            <br>
            <label>Confirm Password</label>
            <input type ="password" name="confirm-password">

        </div>

        </div>
        <br>
        <button type = "submit" name = "submit">Submit</button>

        <p>Already have an account?
            <a href="login.php">Login here</a>
        </p>
    </form>
</body>
</html>

