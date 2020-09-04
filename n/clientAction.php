<?php 
require('functions.php');
$query = addRecord($_POST, 'supportagents');
require('config/dbconfig.php');
$result = mysqli_query($con, $query);
$id=mysqli_insert_id($con);
if($result){
            $file_name = $_FILES['image']['name'];
            if (empty($file_name)) {
            $path = 'upload/default.jpg';
             }else{
            $tmp_location = $_FILES['image']['tmp_name'];
            $new_file = pathinfo($file_name);
            $ext = $new_file['extension'];
            $characters = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@-_";
            $fname = substr(str_shuffle($characters), 0,10);
            $path = "uploads/$fname.$ext";  
            $path_file = "upload/$fname.$ext";  
            move_uploaded_file($tmp_location, $path_file);
        }
        $sql = "update supportagents set image='$path' where supportAgents_id= $id";
        mysqli_query($con, $sql);
        header('location: index.php?n=profile');
    }else{
        //echo $result;
        //header('location: index.php?page=add-product&msg=1'); 
        echo mysqli_error($con);
    }
