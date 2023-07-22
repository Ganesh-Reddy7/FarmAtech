<?php
    include '../marketviews/connection.php';
    if(!empty($_SESSION["id"])){
        $id = $_SESSION["id"];
        $result = mysqli_query($con , "select *from `users` where id = $id");
        $row = mysqli_fetch_assoc($result);

    }
    else{
        header('location:login.php');
    }
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];

        $sql = "insert into `queries` (name , email , number , message) values ('$name' , '$email' , '$number','$message')";
        $result = mysqli_query($con , $sql);
        if(!$result){
            die(mysqli_error($con));
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../footer.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">-->


        <title>Services</title>
    </head>

    <body>
        <div class="main-container d-flex">
            <div class="sidebar" id="side_nav">
                <div class="header-box px-2 pt-3 pb-4 pb-4 justify-content-between">
                    <div class="logo-container mt-0">
                        <div class="logo">
                            <img src="a.png" alt="A-logo" id="logo">
                        </div>
                        <h1 class="fs-4" id="farmA"><span class="bg-white text-dark rounded shadow px-2 me-2">Farm<span style="color: green;"><img src="a.png" style="width:20px;height:20px;margin-bottom: 8px;"></span>tech</span></h1>
                    </div>
                    <button class="btn d-md-none d-block close-btn px-1 py=0 text-white"><i class="fal fa-stream"></i></button>
                </div>
                <hr class="h-color mx-2 mt-0">
                <ul class="list-unstyled px-2">
                    <li class=""><a href="../index.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fal fa-home mx-2"></i>Home</a></li>
                    <li class=""><a href="../crops/crops.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-seedling mx-2"></i>Crops</a></li>
                    <li class=""><a href="../seeds/seeds.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fal fa-hand-holding-seedling mx-2"></i>seeds</a></li>
                    <li class=""><a href="../marketviews/marketviews.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="far fa-analytics mx-2"></i>Market Views</a></li>
                    <li class=""><a href="../pesticides/pesticides.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="far fa-prescription-bottle mx-2"></i>Pesticides</a></li>
                    <li class=""><a href="../farmingtools/farmingtools.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-tools mx-2"></i>Farming Tools</a></li>
                    <li class=""><a href="../weather/weather.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-sun-cloud mx-2"></i>Weather</a></li>
                    <li class=""><a href="../news/news.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="far fa-newspaper mx-2"></i>News</a></li>
                </ul>
                <hr class="h-color mx-2">
                <ul class="list-unstyled px-2">
                    <li class=""><a href="../services/services.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize" style="background:rgb(2,83,2);color:white;"><i class="fas fa-user-headset mx-2"></i>Services</a></li>
                    <li class=""><a href="../logout.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-sign-out-alt mx-2"></i>Log Out</a></li>
                </ul>
            </div>
            <div class="content">
                <nav class="navbar navbar-expand-md navbar-light bg-primary py-3">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between d-md-none d-block">
                            
                            <button class="btn px-1 py-0 open-btn me-2"><i class="fal fa-stream"></i></button>
                            <a class="navbar-brand fs-4" href="#" id="navtextsize"><span class="px-2 py-0"><img src="a.png" alt="A-logo" id="logo"></span></a>
                            
                        </div>
                        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <comment><span class="navbar-toggler-icon"></span></comment>
                        
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav  mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" id="navtextsize" aria-current="page" href="#">Welcome  <?php echo $row["username"];?><i class="bi bi-person-circle fa-lg" style="font-size:45px;margin-right:15px;padding-left:20px;"></i></a>
                                </li>
                                
                            </ul>
                                
                        </div>
                    </div>
                  </nav>
                <div class="dashboard-content px-2 pt-1">
                    <!--Home section starts-->
                    <center><h2>Services</h2></center>
                    <!--Banner section starts-->
                    
                    <div class="contact1" id="contact1">
                        <h2 class="heading">Get In Touch</h2>
                        <div class="row1">
                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61512.74376059566!2d80.0316239!3d15.508807749999999!
                                2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4b011c10366c03%3A0x6ee40296fd2dbcc5!2sOngole%2C%20Andhra%
                                20Pradesh!5e0!3m2!1sen!2sin!4v1685344705755!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <form method = "post">
                                <div class="inputBox">
                                    <input type="text"  name="username" required>
                                    <label>name</label>
                                </div>
                                <div class="inputBox">
                                    <input type="email" name="email" required>
                                    <label>email</label>
                                </div>
                                <div class="inputBox">
                                    <input type="number" name="number" required>
                                    <label>number</label>
                                </div>
                                <div class="inputBox">
                                    <textarea required name="message" id=" " cols="55" rows="10"></textarea>
                                    <label>message</label>
                                </div>
                                <input type="submit" value="send message" class="btn" name="submit">
                            </form>

                            
                                
                            
                            </div>
                    
                                    

                    </div> 
                    <div class="queries">
                        <h2 class="heading">Queries</h2>
                        <?php 
                        $sql1 = "select *from queries";
                        $result1 = mysqli_query($con,$sql1);
                        while($row = mysqli_fetch_assoc($result1)){
                            $name1 = $row['Name'];
                            $number1 = $row['Number'];
                            $message1 = $row['Message'];
                            echo '<hr>';
                            echo '<h4>'.$name1.'</h4><h7 style="color:blue;">'.$number1.'</h7>';
                            echo '<h5>'.$message1.'</h3>';
                            echo '<hr>';
                        }
                        ?>
                    </div>
                    <div class="footer1">
                        <div class="box-container">
                            <div class="box mx-2">
                                <h5>About us</h5>
                                <p>we are a team who work hard for you(farmers) to make your work easier and to give you what you deserve.</p>

                            </div>
                            <div class="box">
                                <h5>Branch Locations</h5>
                                <a href="#">Ongole</a>
                                <a href="#">Hyderabad</a>
                                <a href="#">vishakapatnam</a>
                                <a href="#">Vijayawada</a>
                                <a href="#">Nellore</a>
                            </div>
                            <div class="box">
                                <h5>Quick Links</h5>
                                <a href="../index.php">Home</a>
                                <a href="../crops/crops.php">Crops</a>
                                <a href="../weather/weather.php">Weather</a>
                                <a href="../marketviews/marketviews.php">Market View</a>
                                <a href="../farmingtools/farmingtools.php">Farming Tools</a>
                            </div>
                            <div class="box">
                                <h5>Follow Us</h5>
                                <a href="#">Facebook</a>
                                <a href="#">Instagram</a>
                                <a href="#">Twitter</a>
                                <a href="#">LinkedIn</a>
                            </div>
                        </div>
                        <h4 class="credit">Created By <span><a href="../group/frontpageview7.html">Web Designers</a></span> | All Rights Reserved@2023</h4>
                    </div>
                    <!--Scroll Top button-->
                    <a href="#contact1" class="scroll-top fas fa-angle-up"></a>
                  
                  
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="js/script.js"></script>
        <script src="../script.js"></script>

        <script>
            $(".sidebar ul li").on("click",function(){
                $(".sidebar ul li.active").removeClass("active");
                $(this).addClass("active");

            });
            $('.open-btn').on('click',function(){
                    $('.sidebar').addClass('active');
                });
                $('.close-btn').on('click',function(){
                    $('.sidebar').removeClass('active');
                });
            
        </script>

