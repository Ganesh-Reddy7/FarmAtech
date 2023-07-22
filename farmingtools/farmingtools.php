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

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../footer.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">-->


        <title>Farming Tools</title>
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
                    <li class=""><a href="farmingtools.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize" style="background:rgb(2,83,2);color:white;"><i class="fas fa-tools mx-2"></i>Farming Tools</a></li>
                    <li class=""><a href="../weather/weather.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-sun-cloud mx-2"></i>Weather</a></li>
                    <li class=""><a href="../news/news.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="far fa-newspaper mx-2"></i>News</a></li>
                </ul>
                <hr class="h-color mx-2">
                <ul class="list-unstyled px-2">
                    <li class=""><a href="../services/services.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-user-headset mx-2"></i>Services</a></li>
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
                    <header>
                        <div class="header-1" id="header-1">
                            <div class="share">
                                <span>follow us : </span>
                                <a href="#" class="fab fa-facebook-f"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-instagram"></a>
                                <a href="#" class="fab fa-linkedin"></a>

                            </div>
                            <div class="call">
                                <span> call us : </span>
                                <a href="#" >+91 9010545180</a>
                            </div>
                        </div>
                        <div class="header-2">
                            <a href="#" class="logo"><i class="fas fa-tools"></i>Farming Tools</a>
                            <form action="" class="search-bar-container">
                                <input type="search" id="search-bar" placeholder="search here...">
                                <label for="search-bar" class="fas fa-search"></label>
                            </form>
                        </div>
                        <div class="header-3">

                        </div>
                    </header>
                    <!--Home section starts-->
                    <section class="home">
                        <div class="swiper-container home-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="box" style="background: url(images/agri2.webp);">
                                        <div class="content">
                                            <span>Invest less Gain more</span>
                                            <h3>Dear Farmers,Your Farm is in our Palm</h3>
                                            <a href="#" class="btn">Let's Farm</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box" style="background: url(images/agri8.webp);">
                                        <div class="content">
                                            <span>Invest less Gain more</span>
                                            <h3>Lets Farm Together and Lets Grow Together</h3>
                                            <a href="#" class="btn">Lets Farm</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box" style="background: url(images/agri10.jpg);">
                                        <div class="content">
                                            <span><b>AGRICULTURE</b> is the</span>
                                            <h3>Most Healthful, Most Useful and Most Noble Employment of Man</h3>
                                            <a href="#" class="btn">Lets Farm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </section>
                    <!--Banner section starts-->
                    
                    <section class="category" id="category">
                        <h2 class="heading">Order By Category</h2>
                        <div class="box-container">
                            <div class="box">
                                <img src="images/cultivationtools.jpg" alt="Soil Cultivation Tools">
                                <div class="content">
                                    <h5><b>Soil Cultivation Tools</b></h5>
                                    <a href="#Soil Cultivation Tools" class="btn">Shop now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/plantingtools.avif" alt="green chilli">
                                <div class="content">
                                    <h5><b>Planting Tools</b></h5>
                                    <a href="#Planting Tools" class="btn">Shop now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/pestapplication.jpg" alt="Pest&fest aplly Tools">
                                <div class="content">
                                    <h5><b>Pest&fest aplly Tools</b></h5>
                                    <a href="#Pest&fest aplly Tools" class="btn">Shop now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/irrigation.jpg" alt="green chilli">
                                <div class="content">
                                    <h5><b>Irrigation Tools</b></h5>
                                    <a href="#Irrigation Tools" class="btn">Shop now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/harvesting.png" alt="Harvesting Tools">
                                <div class="content">
                                    <h5><b>Harvesting Tools</b></h5>
                                    <a href="#Harvesting Tools" class="btn">Shop now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/postharvesting.jpg" alt="Post-Harvesting Tools">
                                <div class="content">
                                    <h5><b>Post-Harvesting Tools</b></h5>
                                    <a href="#Post-Harvesting Tools" class="btn">Shop now</a>
                                </div>
                            </div>
                        
                            <div class="box">
                                <img src="images/othertools.webp" alt="Other Tools">
                                <div class="content">
                                    <h5><b>Other Tools</b></h5>
                                    <a href="#Other Tools" class="btn">Shop now</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>
                    <section class="product" id="Soil Cultivation Tools">
                        <h2 class="heading">Soil Cultivation Tools</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="image">
                                    <img src="images/plough.webp" alt="Plough">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Plough</h5>
                                    <div class="price">Cost : <span>&#8377;</span>25000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/cultivator.webp" alt="Cultivator">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Cultivator</h5>
                                    <div class="price">Cost : <span>&#8377;</span>20000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/regularlight.webp" alt="Regular Light">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Regular Light</h5>
                                    <div class="price">Cost : <span>&#8377;</span>30,000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/smartserieschaindrive.webp" alt="green chilli">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Mini Chain Drive</h5>
                                    <div class="price">Cost : <span>&#8377;</span>32,000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/trally.webp" alt="Trally">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Trally</h5>
                                    <div class="price">Cost : <span>&#8377;</span>1,50,000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/rotarytrailer.webp" alt="Rotary Trailer">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Rotary Trailer</h5>
                                    <div class="price">Cost : <span>&#8377;</span>0.5 /plant</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/seriesgeardrive.webp" alt="Mini Series Drive">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Mini Series Drive</h5>
                                    <div class="price">Cost : <span>&#8377;</span>0.5 /plant</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/tractor.webp" alt="Tractor">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Tractor</h5>
                                    <div class="price">Cost : <span>&#8377;</span>5,00,000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                   </div>
                                
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </section> 
                    <section class="product" id="Planting Tools">
                        <h2 class="heading">Planting Tools</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="image">
                                    <img src="images/rake.jpg" alt="Rake">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Rake</h5>
                                    <div class="price">Cost : <span>&#8377;</span>460</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/wheelborrow.jpg" alt="Wheel Borrow">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Wheel Borrow</h5>
                                    <div class="price">Cost : <span>&#8377;</span>2000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/showel.webp" alt="Showel">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Showel</h5>
                                    <div class="price">Cost : <span>&#8377;</span>1100</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/pruningshears.jpg" alt="Pruning Shears">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Pruning Shears</h5>
                                    <div class="price">Cost : <span>&#8377;</span>500</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/wateringcan.jpg" alt="Watering Can">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Watering Can</h5>
                                    <div class="price">Cost : <span>&#8377;</span>500</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="product" id="Pest&fest aplly Tools">
                        <h2 class="heading">Pesticides and Fertilizers application Tools</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="image">
                                    <img src="images/backpacksprayer.jpg" alt="BackPacksprayer">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>BackPack Sprayer</h5>
                                    <div class="price">Cost : <span>&#8377;</span>15000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/handheldsprayer.jpg" alt="Handheld Sprayer">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Handheld Sprayer</h5>
                                    <div class="price">Cost : <span>&#8377;</span>2500</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/granularspreader.jpg" alt="Granular Spreader">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Granular Spreader</h5>
                                    <div class="price">Cost : <span>&#8377;</span>1100</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="product" id="Irrigation Tools">
                        <h2 class="heading">Irrigation Tools</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="image">
                                    <img src="images/pipes.jpg" alt="Pipes">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Pipes</h5>
                                    <div class="price">Cost : <span>&#8377;</span>450/pipe</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/sprinkler.jpg" alt="Sprinler">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Sprinkler</h5>
                                    <div class="price">Cost : <span>&#8377;</span>5000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/hoe.jpg" alt="Hoe">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Hoe</h5>
                                    <div class="price">Cost : <span>&#8377;</span>800</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/dripwire.jpg" alt="Drip Wire">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Drip Wire</h5>
                                    <div class="price">Cost : <span>&#8377;</span>1500/10meter</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/pumpset.jpg" alt="Pumpset">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Pumpset</h5>
                                    <div class="price">Cost : <span>&#8377;</span>30,000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/motor.jpg" alt="motor">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Motor</h5>
                                    <div class="price">Cost : <span>&#8377;</span>12,000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="product" id="Harvesting Tools">
                        <h2 class="heading">Harvesting Tools</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="image">
                                    <img src="images/sickle.jpg" alt="sickle">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Sickle</h5>
                                    <div class="price">Cost : <span>&#8377;</span>450/pipe</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/flail.jpg" alt="Flair">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Flair</h5>
                                    <div class="price">Cost : <span>&#8377;</span>50,000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/riceharvestor.jpg" alt="Rice Harvestor">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Rice Harvestor</h5>
                                    <div class="price">Cost : <span>&#8377;</span>50,000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/shear.jpg" alt="Shear">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Shear</h5>
                                    <div class="price">Cost : <span>&#8377;</span>800</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </section>
                        <section class="product" id="Post-Harvesting Tools">
                        <h2 class="heading">Post-Harvesting Tools</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="image">
                                    <img src="images/multithresher.png" alt="Multicrop Thresher">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Multicrop Thresher</h5>
                                    <div class="price">Cost : <span>&#8377;</span>450/pipe</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/maizethreasher.jpg" alt="Maize Thresher">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Maize Thresher</h5>
                                    <div class="price">Cost : <span>&#8377;</span>50,000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="image">
                                    <img src="images/castorthreasher.webp" alt="Castor Threasher">
                                    <div class="icons">
                                        <a href="#" class="fas fa-heart"></a>
                                        <a href="#" class="cart-btn">Add To Cart</a>
                                        <a href="#" class="fas fa-share"></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Castor Threasher</h5>
                                    <div class="price">Cost : <span>&#8377;</span>50,000</div>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <hr><hr>
                    <div class="footer1">
                        <div class="box-container">
                            <div class="box">
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
                                <a href="farmingtools.php">Farming Tools</a>
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
                    <a href="#header-1" class="scroll-top fas fa-angle-up"></a>


                </div> 
                  
                  
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

