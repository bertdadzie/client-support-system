<?php 
    $email= $_POST['email'];
    $pword= $_POST['password'];
    $query= "SELECT * FROM `supportagents` where email = '$email'and password='$pword'";
    include('config/dbconfig.php');
    $res = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($res);
    if(mysqli_num_rows($res)==1){
        session_start();
        $_SESSION['LOGEIN']='OK';
        $_SESSION['CLIENT']='client';
        $_SESSION['ID'] = $data['supportAgents_id'];
        $_SESSION['FIRST-NAME'] = $data['first_name'];
        $_SESSION['LAST-NAME'] = $data['last_name'];
        $_SESSION['IMAGE'] = $data['image'];
        $_SESSION['TELEPHONE'] = $data['phone_number'];
        $_SESSION['EMAIL'] = $data['email'];
        $_SESSION['Gender'] = $data['gender'];
        $_SESSION['Address'] = $data['address'];
        mysqli_query($con, $query);
        header('location: index.php?n=ticket');
    }else{
        header('location: login.php?error=1');
    }

?>