<?php
include("../Database/database.php");

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$created_at = date(format: "Y-m-d H:i:s");

$password_hashed = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users(username, email, password_hash, created_at) 
        VALUES (?, ?, ?, ?)";

$stmt = $conn ->prepare($sql);

if ($stmt){
    $stmt->bind_param('ssss', $username, $email, $password_hashed, $created_at);

    if($stmt->execute()){
        echo'User registered';
    }
    else{
        echo "Error Registering".$stmt->error;
    }

    $stmt->close();



}else {
    echo "Error preparing statement";
}

$conn ->close();





?>