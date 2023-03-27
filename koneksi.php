<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbs = 'classicmodels';
    
    $con = mysqli_connect($host, $user, $pass, $dbs);

    mysqli_select_db($con,$dbs);

?>