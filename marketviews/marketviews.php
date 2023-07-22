<?php 
include 'connection.php';
if(!empty($_SESSION["id"])){
    $id4 = $_SESSION["id"];
    $result4 = mysqli_query($con , "select *from `users` where id = '$id4'");
    $row4 = mysqli_fetch_assoc($result4);
}
else{
    header('location:login.php');
}
if(isset($_POST['submit'])){
    $crop = $_POST['crop'];
    $market = $_POST['market'];
    $today = $_POST['todayprice'];
    $lastday = $_POST['yesterdayprice'];
    $before2 = $_POST['before2daysprice'];
    $before3 = $_POST['before3daysprice'];
    $before4 = $_POST['before4daysprice'];

    $sql = "insert into `marketprices` (cropname , market , todayprice , yesterdayprice , before2daysprice , 
    before3daysprice , before4daysprice) values ('$crop' , '$market' , '$today' , '$lastday' , '$before2' , '$before3' , '$before4')";
    $result = mysqli_query($con,$sql);
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="../footer.css">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


        <title>Market Views</title>
    </head>

    <body>
        <div class="main-container d-flex">
            <div class="sidebar" id="side_nav">
                <div class="header-box px-2 pt-3 pb-4 pb-4 justify-content-between">
                    <div class="logo-container mt-0">
                        <div class="logo">
                            <img src="../a.png" alt="A-logo" id="logo">
                        </div>
                        <h1 class="fs-4" id="farmA"><span class="bg-white text-dark rounded shadow px-2 me-2">Farm<span style="color: green;"><img src="../a.png" style="width:20px;height:20px;margin-bottom: 8px;"></span>tech</span></h1>
                    </div>
                    <button class="btn d-md-none d-block close-btn px-1 py=0 text-white"><i class="fal fa-stream"></i></button>
                </div>
                <hr class="h-color mx-2 mt-0">
                <ul class="list-unstyled px-2">
                    <li class=""><a href="../index.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fal fa-home mx-2"></i>Home</a></li>
                    <li class=""><a href="../crops/crops.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fas fa-seedling mx-2"></i>Crops</a></li>
                    <li class=""><a href="../seeds/seeds.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="fal fa-hand-holding-seedling mx-2"></i>seeds</a></li>
                    <li class=""><a href="marketviews.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize" style="background:rgb(2,83,2);color:white;"><i class="far fa-analytics mx-2"></i>Market Views</a></li>
                    <li class=""><a href="../pesticides/pesticides.php" class="text-decoration-none px-3 py-2 d-block" id="elementsize"><i class="far fa-prescription-bottle mx-2"></i>Pesticides</a></li>
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
                                    <a class="nav-link active" id="navtextsize" aria-current="page" href="#">Welcome <?php echo $row4["username"];?>
                                    <i class="bi bi-person-circle fa-lg" style="font-size:45px;margin-right:15px;padding-left:20px;"></i></a>
                                </li>
                                
                            </ul>
                                
                        </div>
                    </div>
                  </nav>
                  <div class="dashboard-content  px-3 pt-4" id="dashboard-content">
                    <center><h1 class="fs-5 "><b>Market Views</b></h1></center>
                    <h2 class="heading">Insert Market Prices</h2>
                    <div class="container my-5">
                        <form method="post">
                            <div class="my-3">
                                <label class="form-label">Crop Name</label>
                                <input type="text" class="form-control"  placeholder="Enter crop name" name="crop" autocomplete="off">
                            </div>
                            <div class="my-3">
                                <label  class="form-label">Market</label>
                                <input type="text" class="form-control"  placeholder="Enter market name" name="market" autocomplete="off">
                            </div>
                            <div class="my-3">
                                <label class="form-label">Todays Price</label>
                                <input type="text" class="form-control" placeholder="Enter Todays Price" name="todayprice" autocomplete="off">
                            </div>
                            <div class="my-3">
                                <label  class="form-label">Last Day price</label>
                                <input type="text" class="form-control" placeholder="Enter Last Day price" name="yesterdayprice" autocomplete="off">
                            </div>
                            <div class="my-3">
                                <label class="form-label">Before 2Days Price</label>
                                <input type="text" class="form-control"  placeholder="Enter Before 2Days Price" name="before2daysprice" autocomplete="off">
                            </div>
                            <div class="my-3">
                                <label  class="form-label">Before 3Days Price</label>
                                <input type="text" class="form-control" placeholder="Enter Before 3Days Price" name="before3daysprice" autocomplete="off">
                            </div>
                            <div class="my-3">
                                <label  class="form-label">Before 4Days Price</label>
                                <input type="text" class="form-control"  placeholder="Enter Before 4Days Price" name="before4daysprice" autocomplete="off">
                            </div>
                            <center><button class="btn btn-success btn-lg my-3" name="submit" style="width:200px;">Submit</button><center>
                        </form>
                    </div>
                    <h2 class="heading">View Market Prices</h2>
                    <div class="viewprice my-5">
                    <table class="table table-dark table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">S.no</th>
                            <th scope="col">Crop Name</th>
                            <th scope="col">Market</th>
                            <th scope="col">Today Price</th>
                            <th scope="col">Yesterday Price</th>
                            <th scope="col">Before 2days</th>
                            <th scope="col">Before 3days</th>
                            <th scope="col">Before 4days</th>
                            <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php     
                            $sql = "select *from marketprices";
                            $result = mysqli_query($con,$sql);
                            $inc=0;
                            while($row = mysqli_fetch_assoc($result) and $inc<=10){
                                $sno= $row['ID'];
                                $crop1= $row['cropname'];
                                $market1= $row['market'];
                                $today1= $row['todayprice'];
                                $yesterday1= $row['yesterdayprice'];
                                $before21= $row['before2daysprice'];
                                $before31= $row['before3daysprice'];
                                $before41= $row['before4daysprice'];
                                echo '<tr>
                                <th scope="row">'.$sno.'</th>
                                <td>'.$crop1.'</td>
                                <td>'.$market1.'</td>
                                <td>'.$today1.'</td>
                                <td>'.$yesterday1.'</td>
                                <td>'.$before21.'</td>
                                <td>'.$before31.'</td>
                                <td>'.$before41.'</td>
                                <td>
                                <a href="update.php?updateid='.$sno.'" class="btn btn-primary btn-sm">Update</a>
                                <a href="delete.php?deleteid='.$sno.'" class="btn btn-danger btn-sm">Delete</a>
                                <a href="marketviews.php?graphid='.$sno.'" class="btn btn-info btn-sm" name="submit2">graph</a>
                                </td>
                                </tr>';
                                $inc++;
                            }

                         ?>
                        </tbody>
                    </table>
                    </div>
                    <h2 class="heading">Search For Required Product Market Prices</h2>
                    <div class="searchprice">
                        <form method="post">
                            <input type="text" class="form-control" placeholder="search for requried market price" style="height:50px;margin-bottom:10px;" name="search">
                            <center><button class="btn btn-success btn-lg" style="width:200px;margin-bottom:20px;" name="submit1"><a style="text-decoration:none;color:white" href="#table-content">Search</a></button><center>
                        </form>
                        <div class="display-table" id="table-content">
                            <table class="table table-dark table-striped table-hover">
                                <?php
                                    if(isset($_POST['submit1'])){
                                        $search=$_POST['search'];
                                        $sql1 = "select *from `marketprices` where cropname like '%$search%'";
                                        $result1 = mysqli_query($con,$sql1);
                                        if($result1){
                                            if(mysqli_num_rows($result1)>0){
                                                echo '<thead>
                                                <tr>
                                                <th scope="col">S.no</th>
                                                <th scope="col">Crop Name</th>
                                                <th scope="col">Market</th>
                                                <th scope="col">Today Price</th>
                                                <th scope="col">Yesterday Price</th>
                                                <th scope="col">Before 2days</th>
                                                <th scope="col">Before 3days</th>
                                                <th scope="col">Before 4days</th>
                                                <th scope="col">Operation</th>
                                                </tr>
                                                </thead>';
                                                while($row = mysqli_fetch_assoc($result1)){
                                                    echo '<tbody>
                                                    <tr>
                                                    <th scope="row">'.$row['ID'].'</th>
                                                    <td>'.$row['cropname'].'</td>
                                                    <td>'.$row['market'].'</td>
                                                    <td>'.$row['todayprice'].'</td>
                                                    <td>'.$row['yesterdayprice'].'</td>
                                                    <td>'.$row['before2daysprice'].'</td>
                                                    <td>'.$row['before3daysprice'].'</td>
                                                    <td>'.$row['before4daysprice'].'</td>
                                                    <td>
                                                    <a href="update.php?updateid='.$row['ID'].'" class="btn btn-primary btn-sm">Update</a>
                                                    <a href="delete.php?deleteid='.$row['ID'].'" class="btn btn-danger btn-sm">Delete</a>
                                                    <a href="marketviews.php?graphid='.$row['ID'].'" class="btn btn-info btn-sm" name="submit2">graph</a>
                                                    </td>
                                                    </tr></tbody>';
                                                }
                                            }
                                            else{
                                                echo '<h2 class="text-danger">Data Not Found</h2>';
                                            }
                                        
                                        }
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                    <?php
                    if(empty($_GET['graphid'])){
                        echo '<h2 class="heading">select any crop to visualize graph for the market prices here</h2>';
                        $id2=7;
                        $sql2="select *from `marketprices` where id=$id2";
                        $result2=mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_assoc($result2);
                        $count=0;
                        $test=array();
                        /*$myarray=array($row2['before4daysprice'],$row2['before3daysprice'],$row2['before2daysprice'],$row2['yesterdayprice'],$row2['todayprice']);
                        $test[0]["y"]=$row2['before4daysprice'];
                        $test[1]["y"]=$row2['before3daysprice'];
                        $test[2]["y"]=$row2['before2daysprice'];
                        $test[3]["y"]=$row2['yesterdayprice'];
                        $test[4]["y"]=$row2['todayprice'];*/
                        $dataPoints = array(
                            array("y" => $row2['before4daysprice'], "label" => "before4days"),
                            array("y" => $row2['before3daysprice'], "label" => "before3days"),
                            array("y" => $row2['before2daysprice'], "label" => "before2days"),
                            array("y" => $row2['yesterdayprice'], "label" => "yesterday"),
                            array("y" => $row2['todayprice'], "label" => "Today"));

                    }else{
                        $id2 = $_GET['graphid'];
                        $sql2="select *from `marketprices` where id=$id2";
                        $result2=mysqli_query($con,$sql2);
                        $row2=mysqli_fetch_assoc($result2);
                        $count=0;
                        $test=array();
                        /*$myarray=array($row2['before4daysprice'],$row2['before3daysprice'],$row2['before2daysprice'],$row2['yesterdayprice'],$row2['todayprice']);
                        $test[0]["y"]=$row2['before4daysprice'];
                        $test[1]["y"]=$row2['before3daysprice'];
                        $test[2]["y"]=$row2['before2daysprice'];
                        $test[3]["y"]=$row2['yesterdayprice'];
                        $test[4]["y"]=$row2['todayprice'];*/
                        $dataPoints = array(
                            array("y" => $row2['before4daysprice'], "label" => "before4days"),
                            array("y" => $row2['before3daysprice'], "label" => "before3days"),
                            array("y" => $row2['before2daysprice'], "label" => "before2days"),
                            array("y" => $row2['yesterdayprice'], "label" => "yesterday"),
                            array("y" => $row2['todayprice'], "label" => "Today")
                            /*array("y" => 0, "label" => "Friday"),
                            array("y" => 20, "label" => "Saturday")*/
                        );
                    }
                    
                    
                    
                    ?> 
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>

                    
                     
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
                                <a href="marketviews.php">Market View</a>
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
                    <a href="#dashboard-content" class="scroll-top fas fa-angle-up"></a>
                    
                  </div>
                  
                  
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
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
            window.onload = function () {
            
            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Market Prices in Rupees/Quintal for <?php echo $row2['cropname'].'-'.$row2['market'].' Market';?>"
                },
                axisY: {
                    title: "Prices for respective days"
                },
                data: [{
                    type: "line",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
            
            }

            
        </script>

