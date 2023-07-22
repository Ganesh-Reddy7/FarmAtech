<?php
    include 'marketviews/connection.php';
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
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


        <title>Home page</title>
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
                    <li class=""><a href="index.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize" style="background:rgb(2,83,2);color:white;"><i class="fal fa-home mx-2"></i>Home</a></li>
                    <li class=""><a href="crops/crops.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-seedling mx-2"></i>Crops</a></li>
                    <li class=""><a href="seeds/seeds.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fal fa-hand-holding-seedling mx-2"></i>seeds</a></li>
                    <li class=""><a href="marketviews/marketviews.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="far fa-analytics mx-2"></i>Market Views</a></li>
                    <li class=""><a href="pesticides/pesticides.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="far fa-prescription-bottle mx-2"></i>Pesticides</a></li>
                    <li class=""><a href="farmingtools/farmingtools.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-tools mx-2"></i>Farming Tools</a></li>
                    <li class=""><a href="weather/weather.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-sun-cloud mx-2"></i>Weather</a></li>
                    <li class=""><a href="news/news.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="far fa-newspaper mx-2"></i>News</a></li>
                </ul>
                <hr class="h-color mx-2">
                <ul class="list-unstyled px-2">
                    <li class=""><a href="services/services.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-user-headset mx-2"></i>Services</a></li>
                    <li class=""><a href="logout.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-sign-out-alt mx-2"></i>Log Out</a></li>
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
                <div class="dashboard-content  px-1 pt-1 " id="dashboard-content">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="crops/images/agri13.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h5>Farmer,farming is everything</h5>
                                <p>Farming is a calling. A calling to risk everything, to provide everything, for everyone.</p>
                                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="crops/images/agri14.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h5>Farmer,farming is everything</h5>
                                <p>Every day is Earth Day when you work in agriculture.</p>
                                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="crops/images/agri15.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h5>Farmer,farming is everything</h5>
                                <p>The discovery of agriculture was the first big step toward a civilized life.</p>
                                <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    
                  </div>
                </div>
                <div id="about" class="about section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="about-img">
                                    <img src="crops/images/paddy1.jpg" alt="paddy" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
                                <div class="about-text">
                                    <h2 class="heading">Paddy</h2>
                                    <p>
                                        Rice crop needs a hot and humid climate. It is best suited to regions which have high humidity,
                                        prolonged sunshine and an assured supply of water. The average temperature required throughout the
                                        life period of the crop ranges from 21 to 37º C. Maximum temp which the crop can tolerate 400C to 
                                        42 0C.In India Rice is mainly grown in two types of soils i.e., (i) uplands and (ii) low lands. 
                                        The method of cultivation of rice in a particular region depends largely on factors such as situation of
                                         land, type of soils, irrigation facilities, availability of labourers intensity and distribution of 
                                         rainfalls. The crop of rice is grown with the following methods.
                                         Dry or Semi-dry upland cultivation
                                            <br>1.Broadcasting the seedSowing 2.the seed behind the plough or drilling
                                        <br>Wet or lowland cultivation
                                            <br>1.Transplanting in puddled fields 2.Broadcasting sprouted seeds in puddled fields.

                                    </p>
                                    <a href="#" class="btn btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        
                            <hr>
                            <div class="row">
                            <div class="col-lg-4 col-md-12 col-12 order-1 order-lg-2">
                                <div class="about-img">
                                    <img src="crops/images/redgram1.webp" alt="paddy" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 order-2 order-lg-1">
                                <div class="about-text">
                                    <h2 class="heading">Red Gram </h2>
                                    <p>
                                    Red gram, also known as pigeon pea, is a legume that is native to tropical and subtropical regions. It is a
                                    drought-tolerant crop that can be grown in a variety of soils, but it prefers well-drained, loamy soils
                                    with a pH of 6.5 to 7.5. Red gram requires full sun and warm temperatures to grow well. The optimum 
                                    temperature for growth is 20 to 28 degrees Celsius.Prepare the soil by tilling it to a depth of 6 to 8 inches.
                                    Add compost or manure to the soil to improve fertility.Sow the seeds 1 to 2 inches deep and 6 to 8 inches apart.
                                    Water the seeds regularly, keeping the soil moist but not soggy.Apply a fertilizer application once the plants are 6 to 8 inches tall.
                                    Thin the plants to 12 to 18 inches apart.Protect the plants from pests and diseases.Harvest the pods when they are fully ripe.

                                    </p>
                                    <a href="#" class="btn btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="about-img">
                                    <img src="crops/images/redchilli1.jpg" alt="paddy" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
                                <div class="about-text">
                                    <h2 class="heading">Chilli</h2>
                                    <p>Red chilies are a tropical and subtropical crop that requires warm temperatures and full sun to grow well.
                                        They can be grown in a variety of soils, but they prefer well-drained, fertile soil with a pH of 6.0 to
                                        6.5.Prepare the soil by tilling it to a depth of 6 to 8 inches.Add compost or manure to the soil to improve fertility.
                                        Sow the seeds 1/2 to 1 inch deep and 12 to 18 inches apart.Water the seeds regularly, keeping the soil moist but not soggy.
                                        Apply a fertilizer application once the plants are 6 to 8 inches tall.Thin the plants to 6 to 8 inches apart.
                                        Protect the plants from pests and diseases.Harvest the chilies when they are fully ripe.<br>
                                        <b>Pests:</b> Red chilies are susceptible to a variety of pests, including aphids, beetles, caterpillars, and whiteflies.<br>
                                        <b>Diseases:</b> Red chilies are susceptible to a variety of diseases, including blight, mildew, and rust.<br>
                                        <b>Nutrient deficiency:</b> Red chilies need a balanced diet of nutrients to grow well. If they do not get enough nutrients, they will not produce fruit or the fruit will be small and misshapen.
                                    </p>
                                    <a href="#" class="btn btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <hr><hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12 order-1 order-lg-2">
                                <div class="about-img">
                                    <img src="crops/images/tomato2.jpg" alt="paddy" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 order-2 order-lg-1">
                                <div class="about-text">
                                    <h2 class="heading">Tomato</h2>
                                    <p>
                                    Tomatoes are a warm-season crop that require full sun and well-drained soil. They prefer a slightly acidic 
                                    soil pH of 6.2 to 6.8. Tomatoes can be grown in containers or in the ground.To grow tomatoes in the ground, 
                                    prepare the soil by tilling it to a depth of 6 to 8 inches. Add compost or manure to the soil to improve 
                                    fertility. Rake the soil smooth and level. Plant the tomato plants 24 to 36 inches apart.Water the tomato plants regularly,
                                    keeping the soil moist but not soggy. Fertilize the plants every two weeks with a balanced fertilizer.
                                    Tomatoes are susceptible to a number of pests and diseases, including:Aphids,Blister beetles,Cutworms,Flea beetles,Leaf miners
                                    ,Nematodes,Spider mites,Squash bugs,Thrips,Whiteflies.<br>
                                    To control pests and diseases, inspect the plants regularly and remove any signs of infestation. You can 
                                    also use insecticidal soap or neem oil to control pests. If you have a serious infestation, you may need to 
                                    use a more powerful pesticide.<br>
                                    Tomatoes are ready to harvest when they are ripe. The fruit will be red, orange, yellow, or green, depending
                                     on the variety. Harvest the tomatoes by cutting them from the stem.

                                    </p>
                                    <a href="#" class="btn btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <hr><hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="about-img">
                                    <img src="crops/images/turmeric1.jpg" alt="paddy" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
                                <div class="about-text">
                                    <h2 class="heading">Turmeric</h2>
                                    <p>
                                        
                                    Turmeric is a tropical plant that requires warm, moist conditions to grow well. It can be grown in USDA zones
                                     8-11, but it will do best in zones 9-10. Turmeric prefers full sun, but it can tolerate partial shade. The 
                                     ideal soil for turmeric is loose, well-draining, and slightly acidic. The soil should have a pH of 6.0-6.5.
                                     Prepare the soil by tilling it to a depth of 12 inches.Add compost or manure to the soil to improve fertility.
                                     Plant the rhizomes (the root-like part of the plant) 2-3 inches deep and 6-8 inches apart.Water the rhizomes well and keep the soil moist but not soggy.
                                     Apply a fertilizer application once the plants are 6-8 inches tall.Thin the plants to 12-18 inches apart.
                                     Protect the plants from pests and diseases.Harvest the rhizomes when they are fully mature, which is usually 9-10 months after planting.<br>
                                     <b>Pests:</b> Turmeric can be susceptible to pests such as aphids, beetles, and snails. These pests can be controlled with insecticidal soap or neem oil.<br>
                                     <b>Diseases:</b>Turmeric can be susceptible to diseases such as leaf spot, root rot, and wilt. These diseases can be prevented by planting in well-drained soil and avoiding overwatering.<br>
                                     <b>Poor growth:</b> Turmeric plants that are not growing well may be lacking nutrients or water. Fertilize the plants and water them regularly.
                                    </p>
                                    <a href="#" class="btn btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <hr><hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12 order-1 order-lg-2">
                                <div class="about-img">
                                    <img src="crops/images/mango1.jpg" alt="paddy" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 order-2 order-lg-1">
                                <div class="about-text">
                                    <h2 class="heading">Mango</h2>
                                    <p>
                                    Mango trees are tropical trees that can grow in a variety of climates, but they prefer warm, sunny weather.
                                    They can tolerate some frost, but they will not survive temperatures below 25 degrees Fahrenheit. Mango trees
                                    need full sun and well-drained soil. They are susceptible to a number of pests and diseases, so it is important
                                    to inspect the tree regularly and take steps to control pests and diseases.Choose a sunny spot with well-drained soil.
                                    Prepare the soil by tilling it to a depth of 12 inches.Add compost or manure to the soil to improve fertility.
                                    Plant the mango tree at the same depth as it was growing in the nursery pot.Water the mango tree regularly, keeping the soil moist but not soggy.
                                    Fertilize the mango tree once a month during the growing season.Prune the mango tree to maintain its shape and size.
                                    Protect the mango tree from pests and diseases.Harvest the mangoes when they are ripe.
                                    </p>
                                    <a href="#" class="btn btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <hr><hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="about-img">
                                    <img src="crops/images/cotton1.jpg" alt="paddy" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
                                <div class="about-text">
                                    <h2 class="heading">Cotton</h2>
                                    <p>Cotton is a warm-season crop that requires a long growing season with plenty of sunlight and warm 
                                        temperatures. The ideal temperature for cotton growth is between 70 and 95 degrees Fahrenheit. Cotton 
                                        can be grown in a variety of soils, but it prefers well-drained, loamy soils with a pH of 6.0 to 6.5.
                                        Prepare the soil by tilling it to a depth of 6 to 8 inches. Add compost or manure to the soil to improve fertility.
                                        Sow the cotton seeds 1/2 to 1 inch deep and 12 to 18 inches apart.Water the seeds regularly, keeping the soil moist but not soggy.
                                        Apply a fertilizer application once the plants are 6 to 8 inches tall. Thin the plants to 6 to 8 inches apart.
                                        Protect the plants from pests and diseases.Harvest the cotton bolls when they are fully opened and the cotton fibers are dry.<br>
                                        Cotton is a water-intensive crop.Cotton is a labor-intensive crop.Cotton is a susceptible to a variety of pests and diseases.
                                        Cotton is a volatile commodity, so prices can fluctuate significantly.

                                    </p>
                                    <a href="#" class="btn btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <hr><hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12 order-1 order-lg-2">
                                <div class="about-img">
                                    <img src="crops/images/groundnut1.jpg" alt="paddy" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 order-2 order-lg-1">
                                <div class="about-text">
                                    <h2 class="heading">Ground Nut</h2>
                                    <p>Groundnut, also known as peanut, is a legume that is native to tropical and subtropical regions. It is a 
                                        warm-season crop that requires full sun and warm temperatures to grow well. The optimum temperature for 
                                        growth is 21 to 26 degrees Celsius. Groundnut can be grown in a variety of soils, but it prefers well-dra
                                        ined, sandy loam soils with a pH of 6.0 to 6.5.Prepare the soil by tilling it to a depth of 6 to 8 inches.
                                        Add compost or manure to the soil to improve fertility.Sow the seeds 1 to 2 inches deep and 2 to 3 inches apart.
                                        Water the seeds regularly, keeping the soil moist but not soggy.Apply a fertilizer application once the plants are 6 to 8 inches tall.
                                        Thin the plants to 6 to 12 inches apart.Protect the plants from pests and diseases.Harvest the pods when they are fully ripe.
                                        <br><b>Pests:</b> Groundnut is susceptible to a number of pests, including aphids, beetles, and nematodes.<br>
                                        <b>Diseases: </b>Groundnut is susceptible to a number of diseases, including leaf spot, rust, and wilt.<br>
                                        <b>Drought: </b>Groundnut is a drought-tolerant crop, but it will not produce well if the soil is too dry.<br>
                                        <b>Waterlogging: </b>Groundnut is susceptible to waterlogging, which can cause the roots to rot.
                                    </p>
                                    <a href="#" class="btn btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <hr><hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-12">
                                <div class="about-img">
                                    <img src="crops/images/onion2.jpg" alt="paddy" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-12 ps-lg-5">
                                <div class="about-text">
                                    <h2 class="heading">Onion</h2>
                                    <p>Onions are a cool-season crop that can be grown in most parts of the United States. They prefer full sun 
                                        and well-drained soil with a pH of 6.0 to 6.8. Onions can be grown from seeds or sets. Seeds should be 
                                        planted indoors about 6 weeks before the last frost, while sets can be planted directly in the garden 
                                        after the soil has warmed to at least 60 degrees Fahrenheit.<br>
                                        When planting onions, space them 6 to 8 inches apart in rows that are 12 to 18 inches apart. Onions need
                                        regular watering, especially during hot, dry weather. They should also be fertilized once or twice during
                                        the growing season.Onions are ready to harvest when the necks have begun to turn brown and the tops have
                                         fallen over. To harvest, simply pull the onions out of the ground. If you want to store your onions for 
                                         long periods of time, allow them to dry for a few days before placing them in a cool, dry place.<br>
                                         <b>Inspecting your plants regularly:</b> This will help you to identify any problems early on, when they are easier to control.<br>
                                         <b>Onion maggots: </b>These pests can damage the roots and leaves of onions. To control onion maggots, plant onion sets that have been treated with a pesticide.<br>
                                         <b>Onion thrips: </b>These pests can damage the leaves of onions. To control onion thrips, spray the plants with an insecticidal soap or neem oil.<br>
                                    </p>
                                    <a href="#" class="btn btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <hr><hr>

                        
                    </div>
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
                                <a href="index.php">Home</a>
                                <a href="crops/crops.php">Crops</a>
                                <a href="weather/weather.php">Weather</a>
                                <a href="marketviews/marketviews.php">Market View</a>
                                <a href="farmingtools/farmingtools.php">Farming Tools</a>
                            </div>
                            <div class="box">
                                <h5>Follow Us</h5>
                                <a href="#">Facebook</a>
                                <a href="#">Instagram</a>
                                <a href="#">Twitter</a>
                                <a href="#">LinkedIn</a>
                            </div>
                        </div>
                        <h4 class="credit">Created By <span><a href="group/frontpageview7.html">Web Designers</a></span> | All Rights Reserved@2023</h4>
                    </div>
                    <!--Scroll Top button-->
                    <a href="#dashboard-content" class="scroll-top fas fa-angle-up"></a>
                    
                  
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script.js"></script>

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

