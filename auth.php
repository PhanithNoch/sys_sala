<?php 
session_start();

include 'db.php'; // include the database connection 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
    }else{
        echo "Login failed";
    }

}
?>