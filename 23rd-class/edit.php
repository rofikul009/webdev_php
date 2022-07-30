<?php
    include 'connect.php';
    if(isset($_POST['update'])){
        $email = mysqli_escape_string($conn,$_POST['email']) ;
        $password = mysqli_escape_string($conn,$_POST['password']) ;
        $dob = mysqli_escape_string($conn,$_POST['date']) ;
        $id = mysqli_escape_string($conn,$_POST['uid']) ;
        $sql ="UPDATE user SET email='$email',password='$password',dob='$dob' WHERE id = '$id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            header('location:index.php');
        }
        else{
          echo "sumething wrong".mysqli_error($conn);
        }
    }
    $id = '';
    $email = '';
    $password = '';
    $dob = '';
    if(isset($_GET['id'])){
        $sql ="SELECT * FROM user where id=".$_GET['id'];
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

<?php
 
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
  <form action="edit.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" value="<?php echo $email?>" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" value="<?php echo $password?>" class="form-control pass" id="pwd" placeholder="Enter password" name="password">
     

     
    </div>
    <div class="form-group">
      <label> Date of Birth</label>
      <input type="date" name="date" class="form-control" value="<?php echo $dob?>">
    </div>
    <div class="form-group">
     
      <input type="hidden" name="date" name="uid" class="form-control" value="<?=$id;?>">
    </div>
    <button type="submit" name="update" class="btn btn-default">Update Informtion</button>
  </form>
</div>

</body>
</html>
