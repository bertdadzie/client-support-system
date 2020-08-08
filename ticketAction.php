<?php
require('functions.php');
$query= addRecord($_POST,'ticket');
require('config/dbconfig.php');
$result = mysqli_query($con,$query);
$id=mysqli_insert_id($con);
    if($result){
            $file_name = $_FILES['attachment']['name'];
            $tmp_location = $_FILES['attachment']['tmp_name'];
            $new_file = pathinfo($file_name);
            $ext = $new_file['extension'];
            $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@-_';
            $fname = substr(str_shuffle($characters), 0,10);
            $path = 'uploads/$fname.$ext';  
            $path_file = 'uploads/$fname.$ext';  
            move_uploaded_file($tmp_location, $path_file);
        }
        //mysqli_query($con, $sql);
        //header('location: ../index.php?page=otp-verification&mid='.$id);
        //header('location: ../index.php?page=view-all-records');
    else{
        //header('location: ../index.php?page=add-record&msg=1'); 
        //echo mysqli_error($con);
    }
