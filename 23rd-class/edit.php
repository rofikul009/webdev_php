<?php
include 'connect.php';
    $id = '';
    $email = '';
    $password = '';
    $dob = '';
    if(isset($_GET['id'])){
        $sql ="SELECT * FROM `user` WHERE id=".$_GET['id'];
        $query = mysqli_query($conn,$sql);
        if($query){
            if(mysqli_num_rows($query)>0){
                while($row=mysqli_fetch_assoc($query)){
                    $id = $row['id'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $dob = $row['dob'];
                }
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Informtion</h2>
  <form action=?" method="GET">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" value="<?=$email?>;" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" value="<?$password?>;" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label> Date of Birth</label>
      <input type="date" name="date" class="form-control" value="<?$dob?>;">
    </div>
    <button type="submit" class="btn btn-default">Update Informtion</button>
  </form>
</div>

</body>
</html>
