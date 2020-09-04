<?php
require('functions.php');
$query = editRecord($_POST, 'supportagents', 'supportAgents_id');
$id = $_POST['supportAgents_id'];
require('config/dbconfig.php');
$result = mysqli_query($con, $query);
    if($result){
        $file_name = $_FILES['image']['name'];
        if (empty($file_name)) {
            $path = $_POST['oldimage'];
        }else{
            $tmp_location = $_FILES['image']['tmp_name'];
            $new_file = pathinfo($file_name);
            $ext = $new_file['extension'];
            $characters = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@-_";
            $fname = substr(str_shuffle($characters), 0,10);
            $path = "uploads/$fname.$ext";
            $path_file = "/uploads/$fname.$ext";  
            move_uploaded_file($tmp_location, $path_file);
        }
        $sql = "update supportagents set image='$path' where supportAgents_id= $id";
       //echo mysqli_query($con, $sql);
    header('location: index.php?n=profile');       
    }else{
    	//echo mysqli_error();
    }
