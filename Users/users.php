<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: ../index.php");
    exit();
}

session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <nav class="navigation-bar">
    <div class="navdiv">
     <div class="logo">BookExchange</div>
     <ul>
       <li><a href="#">About</a></li>
       <li><a href="#">Contact</a></li>
       <li><a href="#">Feedback</a></liid>
     </ul>
     </div>
     <div class="home">Home</div>
    </nav>

</body>
</html>