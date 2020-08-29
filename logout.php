<?php 
session_start();
        unset ($_SESSION['LOGEIN']);
        unset ($_SESSION['CLIENT']);
        unset ($_SESSION['ID']);
        unset ($_SESSION['FIRST-NAME']);
        unset ($_SESSION['LAST-NAME']);
        unset ($_SESSION['IMAGE']);
        unset ($_SESSION['TELEPHONE']);
        unset ($_SESSION['EMAIL']);
        unset ($_SESSION['Gender']);
        unset ($_SESSION['Address']);
        unset ($_SESSION['PASSWORD']);
        unset ($_SESSION['role']);
        unset ($_SESSION['dept']);
session_destroy();
header('location: login.php?error=2');
 ?>