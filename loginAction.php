<?php 
    session_start();
    $_SESSION['CLIENT']='client';
    $email= $_POST['email'];
    $pword= $_POST['password'];
    $query= "SELECT *, (SELECT role_name FROM role p2 WHERE p1.role_id = p2.role_id) role1, (SELECT dept_name FROM department p4 WHERE p1.dept_id = p4.dept_id) department1 FROM supportagents p1 where email = '$email'and password='$pword'";
    include('config/dbconfig.php');
    $res = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($res);
    if(mysqli_num_rows($res)==1){
        $_SESSION['LOGEIN']='OK';
        $_SESSION['ID'] = $data['supportAgents_id'];
        $_SESSION['FIRST-NAME'] = $data['first_name'];
        $_SESSION['LAST-NAME'] = $data['last_name'];
        $_SESSION['IMAGE'] = $data['image'];
        $_SESSION['TELEPHONE'] = $data['phone_number'];
        $_SESSION['EMAIL'] = $data['email'];
        $_SESSION['Gender'] = $data['gender'];
        $_SESSION['Address'] = $data['address'];
        $_SESSION['PASSWORD'] = $data['password'];
        $_SESSION['role'] = $data['role1'];
        $_SESSION['dept'] = $data['department1'];
        $_SESSION['unseen'] = 0;
        //$_SESSION['seen'] = 1;
        mysqli_query($con, $query);
        header('location: index.php?n=ticket');
    }else{
        header('location: login.php?error=1');
    }

?>