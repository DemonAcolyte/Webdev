<?php
    session_start();
    include("../Database/database.php");
    

    if ($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Security Measure
        if (empty($username) || empty($password)){
            header("Location: ../index.php");
            die("Username and Password is required");
        }
       

        


    $sql ="SELECT username, password_hash FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
   
    if ($stmt->num_rows > 0){
        $stmt->bind_result($db_username, $db_password);
        $stmt->fetch();
        
       
        $_SESSION['user_id'] = 1;
        if (password_verify($password, $db_password)){
        
        $_SESSION['username'] = $db_username;
        header("Location: ../Users/users.php");
        
        exit();

        } else{
        echo "Invalid Password";
        } 

    } else{
    echo"User not found";
    }
    $stmt->close();
    
    
    $conn->close();
}
?>