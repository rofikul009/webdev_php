<?php
  
  include_once 'connect.php';
  $table2 = "users";

  $sql = "CREATE TABLE $table1(
     id int(10) UNSIGND AUTO_INCREMENT PRIMARY KEY,
     email VARCHAR(255) NOT NULL,
     pasword VARCHAR(255) NOT NULL,
     dob date NOT NULL,
     )";
   $query = mysqli_query($conn,$sql);
   if($query){
     echo "Table Create successfuly";
   }
   else{
     echo "Tabledoes not Create".mysqli_error($conn);
   }
  mysqli_close($conn);
?>



<?php
  include 'signup.php';

?>