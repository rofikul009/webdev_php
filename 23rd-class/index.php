
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
  <h2 class="text-center text-primary">Crud operotion</h2>
            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Email</th>
        <th>Date of barth</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
        include_once 'connect.php';

        $sql = "SELECT * FROM `user`";
        $query =mysqli_query($conn,$sql);
        if($query){
          if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query)){

        


?>
      <tr>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['dob'];?></td>
        
        <td><a href="edit.php?id=<?=$row['id'];?>" target="_blank" class="btn btn-success">Edit</a> <a href="" target="_blank" rel="noopener noreferrer"></a> <a href="#" class="btn btn-danger">Delete</a></td>
      </tr>

<?php

            }
          }
        }
?>
    </tbody>
  </table>
</div>

</body>
</html>
