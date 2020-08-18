<?php
require('functions.php');
$query= addRecord($_POST,'ticket');
require('config/dbconfig.php');
$result = mysqli_query($con,$query);
$id=mysqli_insert_id($con);
     if($result){
        $file_name = $_FILES['attachment']['name'];
        if (empty($file_name)) {
            $path = 'uploads/female.png';
        }else{
            $tmp_location = $_FILES['attachment']['tmp_name'];
            $new_file = pathinfo($file_name);
            $ext = $new_file['extension'];
            $characters = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@-_";
            $fname = substr(str_shuffle($characters), 0,10);
            $path = "uploads/$fname.$ext";  
            $path_file = "uploads/$fname.$ext";  
            move_uploaded_file($tmp_location, $path_file);
        }
        $sql = "update ticket set attachment='$path' where ticket_id= $id";
        //mysqli_query($con, $sql);
        header('location: index.php?n=response');
    }else{
        header('location: index.php'); 
        //echo mysqli_error($con);
        //mysqli_query($con, $sql);
    }