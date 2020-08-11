<?php 
    session_start();
    if (!(isset($_SESSION['LOGEIN']))) {
    header('location: login.php?error=1');
    }