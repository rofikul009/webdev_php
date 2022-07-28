<?php
  include_once 'connect.php';
  $table1 = "user";
  $sql = "Create TABLE $table1(
    id int(10)UNSIGND AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    dob date NOT NULL
    )";
    $query = mysqli_query($conn,$sql);

  // $query = mysqli_query($conn,$sql);
  // if($query){
  //     echo "database created successfuly";

  //}
 
?>