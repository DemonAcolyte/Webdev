<?php
    session_start();
    include("database.php");
    

    if ($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }

        $username = $_POST['username'];
        $password = $_POST['password'];

        //Security Measure
        if (empty($username) || empty($password)){
            header("Location: index.php");
            die("Username and Password is required");
        }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        


    $sql ="SELECT username, password_hash FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
   
    if ($stmt->num_rows > 0){
        $stmt->bind_result($db_username, $db_password);
        $stmt->fetch();
        
        
        if (password_verify($password,$hashed_password)){
        $_SESSION['username'] = $db_username;
        header("Location: sample.php");
        } else{
        echo "Invalid Password";
        } 

    } else{
    echo"User not found";
    }
    $stmt->close();
    
    
    $conn->close();
    
?>