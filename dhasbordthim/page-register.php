
<?php
    include 'layout/connect.php';
    $error = '';
    $lenght = '';
    $pwd = '';
    $email_check = '';

if(isset($_POST['signup'])){
    $name = mysqli_escape_string($conn,$_POST['name']);
    $email = mysqli_escape_string($conn,$_POST['email']);
    $password = mysqli_escape_string($conn,$_POST['password']);
    $re_password = mysqli_escape_string($conn,$_POST['re_password']);
    $mobile = mysqli_escape_string($conn,$_POST['mobile']);
    $email_exist = "SELECT email FROM `user` WHERE  email ='$email'";
    $query = mysqli_query($conn,$email_exist);
    if(mysqli_num_rows($query)>0){
        $email_check = "Email alredy exsist";
    }


    //echo "<script>alert('yes');</script>";
    if(empty($name)  || empty($email) || empty($password) || empty($re_password) || empty($mobile) || empty($date)){
        $error = "This Field is Requird";
    }
    elseif(strlen($name)<5){
        $lenght = "lenght must be greater then 4";
        
    }
    elseif($password!=$re_password){
        $pwd= "Your password does not match";
    }
    else{
        $password =md5($password);
        $vkey = time().$email;
        echo "<script>alert('$vkey');</script>";

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php

include "layout/css.php";
?>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.php"><span>Signup</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Register to Administration</h4>
                            <form action="page-register.php" method="post">
                                <div class="form-group">
                                    <label>Ful Name</label>
                                    <input type="text" name="name" class="form-control" placeholder=" Name">
                                    <span class="text-danger text-left"><?=$error ;?><?=$lenght;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <p class="text-danger text-left"><?=$error;?><?=$email_check?></p>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <span class="text-danger text-left"><?=$error;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Re_Password</label>
                                    <input type="password" name="re_password" class="form-control" placeholder="Re-Password">
                                    <span class="text-danger text-center"><?=$error;?><?=$pwd;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="number" name="mobile" class="form-control" placeholder="Mobile">
                                    <span class="text-danger text-left"><?=$error;?></span>
                                </div>
                               
                                
                                <button type="submit" name="signup" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Register with facebook</button>
                                        <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Register with twitter</button>
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="#"> Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>