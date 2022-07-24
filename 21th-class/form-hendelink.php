<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
<style>
    body{
        background-image: url(/images/body-bg.webp);
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: center;
        height: 100vh;
        width: 80%;
        margin: 0 auto;
    }
    img{
        width: 100%;
        height: auto;
    }
    .container{
        width: 90%;
        margin: 0 auto;
    }
    .heder{
        background-color: aqua;
        width: 100%;
        overflow: hidden;
    }
    .manu-left{
        width: 15%;
        float: left;
        overflow: hidden;
    }
    .manu-right{
        width: 81%;
        overflow: hidden;
       
    }
    .manu-right ul{
        display: flex;
        justify-content: end;
        list-style: none;
    }
    .manu-right ul li{
        margin: 20px;
    }
    .manu-right ul li a{
        padding-top: 10px;
        color: #fff;
    }
    .login-form{
        background-image: url(/images/login-bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: auto;
        width: 40%;
        margin: 50px auto;
        border: 1px solid #000;
        border-radius: 5px;
    }
    .login-form h2{
        text-align: center;
        color: #fff;
    }
    .inner-form{
        width: 40%;
        margin: 50px auto;
    }
    .inner-form input{
        display: block;
        margin: 0 2px;
    }
    .inner-form label{
        color: #fff;
        margin: 0 2px;
    }
    button{
        margin: 50px 0;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="heder">
            <div class="manu-left">
            <img src="/images/images.jpg" alt="logo">
            </div>
            <div class="manu-right">
                <nav>
                    <ul>
                        <li><a href="login.html">Log In</a></li>
                        <li><a href="login.html">SignUp</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="login-form">
           <div class="inner-form">
             <h2>Log In Form</h2>
                <form action="#">
                    <label for="email">Enter Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" required>
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass" placeholder="*******" required>
                    <button type="submit" name="submit">Log In</button>
                </form>
           </div>
        </div>
    </div>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, mollitia harum eveniet distinctio possimus iste magni commodi vero? In, voluptate corporis. Voluptas tempora officia nam dolor consequatur deserunt saepe voluptatem.
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>
</html>