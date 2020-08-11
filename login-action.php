<?php 
    $email= $_POST['email'];
    $pword= $_POST['password'];
    $query= "select * from supportagents where email = '$email'and password='$pword'";
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
        // header('location: view-member-profile.php?mid='.$data['accId']);
        header('location: ticket.php');
    }else{
        header('location: login.php?error=1');
    }

?>