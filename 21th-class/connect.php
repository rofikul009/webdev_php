<?php
    include_once 'index.php';
    $servername = "localhost";
    $username = "root";
    $pasword = "";
    $dbname = "card_db";
    $db_name = "webdev_rofikul";
    $conn = mysqli_connect($servername,$username,$pasword,$db_name);

    // if(!$conn){
    //     die("connection failed".mysqli_connect_error());
    //  } else{
    //     echo "connection successfuly done";
    // }
    // mysqli_close($conn);

?>