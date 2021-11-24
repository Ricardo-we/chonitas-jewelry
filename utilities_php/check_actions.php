<?php
    require("dbconnection.php");
    
    check_request();

    function check_request(){
        $db = new DBConnection();
        if(isset($_POST['save_product'])){
            $title = $_POST['title'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            echo "$title, $price, $description";
            $result = $db->insert_product($title, $price, $description, $image);
            header("Location: ../administrator/administrator-products.php");
        }
        else if(isset($_POST['update_product'])){        
            $id = $_POST['id'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            if(isset($_POST['image'])){
                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $result = $db->update_product($id, $title, $price, $description, $image);
            }
            else{
                $result = $db->update_product($id, $title, $price, $description);
            }
            header("Location: ../administrator/administrator-products.php");        
        }
        else if(isset($_POST['delete_product'])){
            $id = $_POST['id'];
            $db->delete_product($id);
            header("Location: ../administrator/administrator-products.php");
        }
        else if(isset($_POST['add_user'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "INSERT INTO `administrator`(`username`, `password`) VALUES ('$username', '$password')";
            $db->run_query($query);
            header('Location: ../administrator/administrator-users.php');
        }
        else if(isset($_POST['delete_user'])){
            $id = $_POST['id'];
            $query = "DELETE FROM `administrator` WHERE id='$id'";
            $db->run_query($query);
            header('Location: ../administrator/administrator-users.php');            
        }
        else if(isset($_POST['update_user'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "UPDATE `administrator` SET username='$username',password='$password' WHERE username='$username' AND password='$password'";
            $db->run_query($query);
            header('Location: ../administrator/administrator-users.php');                
        }
    }
?>