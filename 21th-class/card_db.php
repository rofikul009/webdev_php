<?php
    $servername = "localhost";
    $username = "root";
    $pasword = "";
    $dbname = "card_db";
    $db_name = "webdev_rofikul";
    $conn = mysqli_connect($servername,$username,$pasword);
    if(!$conn){
        die("connection failed".mysqli_connect_error());
    } 
    $sql = "Create DATABASE $db_name";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "database created successfuly";

    }
    mysqli_close($conn);
?>