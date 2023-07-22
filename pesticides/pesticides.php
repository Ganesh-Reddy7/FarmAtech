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


        <title>Pesticides</title>
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
                    <li class=""><a href="../pesticides/pesticides.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize" style="background:rgb(2,83,2);color:white;"><i class="far fa-prescription-bottle mx-2"></i>Pesticides</a></li>
                    <li class=""><a href="../farmingtools/farmingtools.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-tools mx-2"></i>Farming Tools</a></li>
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
                            <a href="#" class="logo"><i class="far fa-prescription-bottle"></i>Pesticides</a>
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
                                <img src="images/greenchilli.jpg" alt="green chilli">
                                <div class="content">
                                    <h5><b>Vegetable Crops</b></h5>
                                    <a href="#" class="btn">Order Now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/greenchilli.jpg" alt="green chilli">
                                <div class="content">
                                    <h5><b>Species Crops</b></h5>
                                    <a href="#" class="btn">Order Now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/greenchilli.jpg" alt="green chilli">
                                <div class="content">
                                    <h5><b>Cereals and Millets</b></h5>
                                    <a href="#" class="btn">Order Now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/greenchilli.jpg" alt="green chilli">
                                <div class="content">
                                    <h5><b>Pulses Crops</b></h5>
                                    <a href="#" class="btn">Order Now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/greenchilli.jpg" alt="green chilli">
                                <div class="content">
                                    <h5><b>Oil Crops</b></h5>
                                    <a href="#" class="btn">Order Now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/greenchilli.jpg" alt="green chilli">
                                <div class="content">
                                    <h5><b>Fibre Crops</b></h5>
                                    <a href="#" class="btn">Order Now</a>
                                </div>
                            </div>
                        
                            <div class="box">
                                <img src="images/greenchilli.jpg" alt="green chilli">
                                <div class="content">
                                    <h5><b>Fruit Crops</b></h5>
                                    <a href="#" class="btn">Order Now</a>
                                </div>
                            </div>
                            <div class="box">
                                <img src="images/greenchilli.jpg" alt="green chilli">
                                <div class="content">
                                    <h5><b>Plantation Crops</b></h5>
                                    <a href="#" class="btn">Order Now</a>
                                </div>
                            </div>
                            
                        </div>
                        </div>
                    </section>
                    <section class="product" id="product">
                        <h2 class="heading">Vegetable Crops</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="green chilli">
                                <h5>Green Chilli</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;"/>
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a></div>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Tomato">
                                <h5>Tomato</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Onion">
                                <h5>Onion</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Mushrooms">
                                <h5>Mushrooms</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Brinjal">
                                <h5>Brinjal</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Sweet Corn">
                                <div class="text"><h5>Sweet Corn</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a></div>
                                </div>

                            </div>
                        </div>
                    </section> 
                    <section class="product" id="product">
                        <h2 class="heading">Species Crops</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Red Chilli">
                                <h5>Red Chilli</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;"/>
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a></div>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Turmeric crop">
                                <h5>Turmeric crop</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Ginger Dry">
                                <h5>Ginger Dry</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Ajwain">
                                <h5>Ajwain</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                        </div>
                    </section >
                    <section class="product" id="product">
                        <h2 class="heading">Cereals And Millets</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Paddy">
                                <h5>Paddy</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6></div>
                                <a href="#" class="btn" style="background:red;">Can't Provide</a>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Wheat">
                                <h5>Wheat</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6></div>
                                <a href="#" class="btn" style="background:red;">Can't Provide</a>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Maize">
                                <h5>Maize</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6></div>
                                <a href="#" class="btn" style="background:red;">Can't Provide</a>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Pearl Millets">
                                <h5>Pearl Millets</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6></div>
                                <a href="#" class="btn" style="background:red;">Can't Provide</a>
                            </div>
                        </div>
                    </section>
                    <section class="product" id="product">
                        <h2 class="heading">Pulses Crops</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Bengal Gram">
                                <h5>Bengal Gram</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6></div>
                                <a href="#" class="btn" style="background:red;">Can't Provide</a>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Red Gram">
                                <h5>Red Gram</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6></div>
                                <a href="#" class="btn" style="background:red;">Can't Provide</a>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Green Gram">
                                <h5>Green Gram</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6></div>
                                <a href="#" class="btn" style="background:red;">Can't Provide</a>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Black Gram">
                                <h5>Black Gram</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6></div>
                                <a href="#" class="btn" style="background:red;">Can't Provide</a>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Horse Gram">
                                <h5>Horse Gram</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6></div>
                                <a href="#" class="btn" style="background:red;">Can't Provide</a>
                            </div>
                        </div>
                    </section>
                    <section class="product" id="product">
                        <h2 class="heading">Oil Crops</h2>
                        <div class="box-container">
                        <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Coconut Plant">
                                <h5>Coconut Plant</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Soyabeen">
                                <h5>Soyabean</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6></div>
                                <a href="#" class="btn" style="background:red;">Can't Provide</a>
                            </div>
                        </div>
                    </section>
                    <section class="product" id="product">
                        <h2 class="heading">Fibre Crops</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Jute plant">
                                <h5>Jute plant</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                        </div>
                    </section>
                    
                    <section class="product" id="product">
                        <h2 class="heading">Fruit Crops</h2>
                        <div class="box-container">
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Mango Plants">
                                <h5>Mango Plants</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;"/>
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a></div>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Banana Plants">
                                <h5>Banana Plants</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Orange Plants">
                                <h5>Orange Plants</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Pomegranate Plants">
                                <h5>Pomegranate Plants</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Guava Plants">
                                <h5>Guava Plants</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;"/>
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <div><h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a></div>
                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Papaya Plants">
                                <h5>Papaya Plants</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Custard Apple Plants">
                                <h5>Custard Apple Plants</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                            <div class="box">
                                <div class="icons">
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                </div>
                                <img src="images/greenchilli.jpg" alt="Sapota Plants">
                                <h5>Sapota Plants</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="quantity">
                                    <span>quantity : </span>
                                    <input type="number" min="500" max="30000" value="500" style="width:150px;">
                                </div>
                                <div class="price">Cost : 0.5 paise/plant</div>
                                <h6>Suited Soil:Red and Black Soil</h6>
                                <h6>Duration:4-months</h6>
                                <a href="#" class="btn">Add to Cart</a>

                            </div>
                        </div>
                    </section>
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
                                <a href="../crops/crops,php">Crops</a>
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

