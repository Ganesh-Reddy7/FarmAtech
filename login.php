<?php
    include 'marketviews/connection.php';
    if(!empty($_SESSION["id"])){
        header('location:index.php');
    }
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $duplicate = mysqli_query($con, "select *from `users` where username='$username' OR email='$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo 
            "<script> alert ('Username or Email already has been taken');</script>";
        }
        else{
            if($password == $confirmpassword){
                $sql = "insert into `users` (username , email, password) values('$username' , '$email' , '$password')";
                $result = mysqli_query($con,$sql);
                if($result){
                    echo "<script>alert('Registration Successfull');</script>";
                }
            }
            else{
                echo "<script>alert('Password does not Matched');</script>";
                die(mysqli_error($con));
            }
        }
        
    }
    if(isset($_POST['submit1'])){
        $email1 = $_POST['email'];
        $password1 = $_POST['password'];
        $result = mysqli_query($con , "select *from `users` where email='$email1'");
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($password1 == $row['password']){
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header('location:index.php');
            }
            else{
                echo 
                "<script> alert('Incorrect Password');</script>";
            }
        }
        else{
            echo 
            "<script> alert('User Not Registered');</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <style media=screen>


        </style>


        <title>Login And Registration Page</title>
    </head>
    <body style="background:url('crops/images/agri9.jpg') no-repeat;background-size:cover;">
        <header>
        <div class="logo">
            <img src=a.png alt="A-logo" class="logo1">
            <h2>FarmAtech</h2>
        </div>
        <nav class="navigation">
                <a href="group/frontpageview7.html">About Us</a>
                <button class="btnLogin-popup">Login In</a>

        </nav>
        </header>
        <div class="text">
            <h2 class="heading">WELCOME,Dear Farmers</h2>
            <p>Once in our lifes we need a doctor,a lawyer,a police man and </p>
            <p>and a preacher,but everyday,three times a day,we need you</p> 
            </p>FARMERS.Now Your Smart farm is in Our Palm</p>
            <button class="btn-primary" style="width:12rem;height:4rem;border-radius:8px;margin-top:10px;">Let's Farm</button>
        </div>
        <div class="wrapper">
                <span class="icon-close">
                <ion-icon name="close"></ion-icon>
                </span>
                <div class="form-box login">
                    <h2>Login</h2>
                    <form method="post" autocomplete="off">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></script></span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="Password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="remeber-forgot">
                            <label><input type="checkbox">Remember Me</label>
                            <a href="#">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn" name="submit1">Login</button>
                        <div class="login-register">
                            <p>Don't have an account?<a href="#" class="register-link">Register</a>
                        </div>
                    </form>
                </div>
                <div class="form-box register">
                    <h2>Registration</h2>
                    <form method="post" autocomplete="off">
                    <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input type="text" name="username" required>
                            <label>Username</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="Password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="Password" name="confirmpassword" required>
                            <label>Confirm Password</label>
                        </div>
                        <div class="remeber-forgot">
                            <label><input type="checkbox">I Agree to the terms & conditions</label>
                        </div>
                        <button type="submit" class="btn" name="submit">Register</button>
                        <div class="login-register">
                            <p>Alreay have an account?<a href="#" class="login-link">Login</a>
                        </div>
                    </form>
                </div>
            </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="script.js"></script>
        
    </body>
</html>
