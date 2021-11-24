<?php
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);

    class DBConnection{
        function __construct(){ 
            $this->db_conn = mysqli_connect("localhost", "root", "", "jewelry");
        }

        function run_query($query){
            return mysqli_query($this->db_conn, $query);
        }

        function insert_product($title, $price, $description, $image, $table=""){
            $query = "INSERT INTO shop (title, price, description, image) VALUES ('$title', '$price', '$description', '$image')";
            $result = $this->run_query($query);
            return $result;
        }

        function update_product($id, $title, $price, $description, $image=''){
            if($image !== ''){
                $query = "UPDATE `shop` SET `title`='$title',`price`='$price',`description`='$description',`image`='$image' WHERE id='$id'";
                return $this->run_query($query);
            }
            $query = "UPDATE `shop` SET `title`='$title',`price`='$price',`description`='$description' WHERE id='$id'";
            return $this->run_query($query);
        }

        function delete_product($id){
            $query = "DELETE FROM `shop` WHERE id='$id'";
            return $this->run_query($query);
        } 

        function fetch_product($id, $product){
            $query = "SELECT * FROM shop WHERE title='$product' AND id='$id' ";
            return $this->run_query($query);
        }

        function fetch_all_products(){
            $query = "SELECT * FROM `shop`";
            $result = $this->run_query($query);
            return $result;
        }
    }
?>