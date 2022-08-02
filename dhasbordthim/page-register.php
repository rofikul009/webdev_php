
<?php

include "layout/css.php";
?>

<!DOCTYPE html>
<html lang="en">



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
                                    <input type="text" name="name" class="form-control" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pwd" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Re_Password</label>
                                    <input type="password" name="pwd" class="form-control" placeholder="Re-Password">
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input type="number" name="mobile" class="form-control" placeholder="Mobile">
                                </div>
                                <div class="form-group">
                                    <label>date</label>
                                    <input type="date" name="date" class="form-control" placeholder="Dayth of barht">
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