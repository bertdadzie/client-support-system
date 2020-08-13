<?php
    $query= "select * from supportagents";
    require('config/dbconfig.php');
    $res = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($res);
    if(mysqli_num_rows($res)==1){
        session_start();
        $_SESSION['LOGEIN']='OK';
        $_SESSION['ID'] = $data['supportAgents_id'];
        $_SESSION['FIRST-NAME'] = $data['first_name'];
        $_SESSION['LAST-NAME'] = $data['last_name'];
        $_SESSION['IMAGE'] = $data['image'];
        $_SESSION['TELEPHONE'] = $data['phone'];
        $_SESSION['EMAIL'] = $data['email'];
        $_SESSION['Gender'] = $data['gender'];
        $_SESSION['Address'] = $data['address'];
       }
?>