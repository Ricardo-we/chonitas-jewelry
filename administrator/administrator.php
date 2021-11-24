<?php
    session_start();
    if(isset($_POST['admin-login'])){
        require('../utilities_php/dbconnection.php');
        $conn = new DBConnection();
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM administrator WHERE username='$username' AND password='$password'";
        $result = $conn->run_query($query);
        $result = mysqli_fetch_array($result);

        if($result['username'] !== ''){
            $_SESSION['username'] = '' . $username;
        }
    }
    else if(!isset($_SESSION['username'])){
        header('Location: admin-login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<?php require("admin-sidebar.php")?>
    
