

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
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php
  include_once 'connect.php';

  $sql = "SELECT * FORM user";
  $query = mysqli_query($conn,$sql);
  if($query){
    if(mysqli_num_rows($query)>0){
      while($rww=mysqli_fetch_assoc($query)){

  

?>
      <tr>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['dob']?></td>
        
        <td>john@example.com</td>
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


