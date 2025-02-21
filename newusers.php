<?php
include("database.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "INSERT INTO users(user, password, role) 
        VALUES ('$username', '$password', 'user')";

try{
    mysqli_query($conn, $sql);
    echo "User is now registered";
}
catch(mysqli_sql_exception){
    echo "could not register user";
}

mysqli_close($conn);




?>