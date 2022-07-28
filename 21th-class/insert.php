<?php
include_once 'connect.php';
    if(isset($_POST['submit'])) {
       // echo "sumting";
        $email = mysqli_escape_string($conn, $_POST['email']);
        $password = mysqli_escape_string($conn,md5($_POST['password']));
        $dob = mysqli_escape_string($conn, $_POST['date']);

        $sql ="INSERT INTO user (email,password,dob) VALUES ('$email','$password','$dob')";
        $query =mysqli_query($conn,$sql);
        if($query){
            header('location:insert.php');
            http_response_code(200);
            echo "successfuly";

        }
        else{
            http_response_code(500);
            echo "sumting rong";
        }
    }
    else{
        http_response_code(400);
        echo "sumting wend rong";
    }

?>
<?php
    include 'signup.php';
?>