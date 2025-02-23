
<?php
    session_start();
    include("database.php");


    if ($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }
    if ($_SERVER['REQUEST METHOD'] == 'POST'){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);


        if (empty($username) || empty($password)){
            die("Username and Password is required");
        }
    


    $sql = "SELECT username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
   
    if ($stmt->num_rows > 0){
        $stmt->bind_result($db_username, $db_password);
        $stmt->fetch();
    

        if (password_verify($password, $db_password)){
        $_SESSION['username'] = $db_username;
        echo "Login Successful! Welcome $db_username!";
        } else{
        echo "Invalid Password";
        }

    } else{
    echo"User not found";
    }
    $stmt->close();
    }
    $conn->close();

?>

