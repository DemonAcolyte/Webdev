<?php
/*session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: ../index.html");
    exit();
}

session_destroy();
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles.css" type="text/css">
    <link rel="stylesheet" href="../CSS/home.css" type="text/css">
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

  <svg xmlns="http://www.w3.org/2000/svg" id="hamburger" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
    
    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
    
  </svg>
  <div id="overlay"></div>
  <div id="sidebar">
    <h1 id="large-category">Category</h1>
    <a href="" class="sidebar-item">
    <div class="category">Engineering</div>
    </a>
    <a href="" class="sidebar-item">
    <div class="category">Arts and Sciences</div>
    </a>
    <a href="" class="sidebar-item">
      <div class="category">Law & Governance</div>
    </a>
  </div>



</body>
</html>