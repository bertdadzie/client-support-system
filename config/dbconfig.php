<?php
if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
	$host = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'crm';
    $con = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
}else{
	$host = 'sql107.epizy.com';
    $dbUsername = 'epiz_26443311';
    $dbPassword = 'ckUswmGNZfDgqv';
    $dbName = 'epiz_26443311_robert';
    $con = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
}
    
?>