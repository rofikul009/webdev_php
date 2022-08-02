<?php
    $servername = "localhost";
    $username = "root";
    $pasword = "";
    $dbname = "umiversity_blog";
    $db_name = "webdev_rofikul";
    $conn = mysqli_connect($servername,$username,$pasword,$dbname);

     if(!$conn){
        die("connection failed".mysqli_connect_error());
     } 
     else{
        echo "connection successfuly done";
    }
    // mysqli_close($conn);

?>