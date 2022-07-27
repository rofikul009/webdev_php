<?php
    include_once 'index.php';
    $servername = "localhost";
    $username = "root";
    $pasword = "";
    $dbname = "card_db";
    $conn = mysqli_connect($servername,$username,$pasword,$dbname);
    /* 
    if(!$conn){
        die("connection failed".mysqli_connect_error());
     } else{
        echo "connection successfuly done";
    }
    mysqli_close($conn);
    */
?>