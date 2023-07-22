<?php
    include 'connection.php';
    $id=$_GET['updateid'];
    $sql="select *from `marketprices` where ID=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $crop1= $row['cropname'];
    $market1= $row['market'];
    $today1= $row['todayprice'];
    $yesterday1= $row['yesterdayprice'];
    $before21= $row['before2daysprice'];
    $before31= $row['before3daysprice'];
    $before41= $row['before4daysprice'];
    if(isset($_POST['update'])){
    $crop1= $_POST['crop'];
    $market1= $_POST['market'];
    $today1= $_POST['todayprice'];
    $yesterday1= $_POST['yesterdayprice'];
    $before21= $_POST['before2daysprice'];
    $before31= $_POST['before3daysprice'];
    $before41= $_POST['before4daysprice'];
    $sql="update `marketprices` set cropname='$crop1', market='$market1' , todayprice='$today1' , yesterdayprice='$yesterday1' , 
    before2daysprice='$before21' , before3daysprice='$before31' , before4daysprice='$before41' where ID=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:marketviews.php');
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

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


        <title>Update</title>
    </head>
    <body>
        <h2 style="text-align:center;font-weight:bolder;margin-top:15px;">Update Data Here</h2>
        <div class="container my-5" style="border:.2rem solid rgba(0,0,0,.3);">
        <form method="post">
            <div class="my-3">
                <label class="form-label">Crop Name</label>
                 <input type="text" class="form-control"  placeholder="Enter crop name" name="crop" autocomplete="off" value=<?php echo $crop1?>>
            </div>
            <div class="my-3">
              <label  class="form-label">Market</label>
              <input type="text" class="form-control"  placeholder="Enter market name" name="market" autocomplete="off" value=<?php echo $market1?>>
            </div>
            <div class="my-3">
                <label class="form-label">Todays Price</label>
                <input type="text" class="form-control" placeholder="Enter Todays Price" name="todayprice" autocomplete="off" value=<?php echo $today1?>>
            </div>
            <div class="my-3">
                <label  class="form-label">Last Day price</label>
                <input type="text" class="form-control" placeholder="Enter Last Day price" name="yesterdayprice" autocomplete="off" value=<?php echo $yesterday1?>>
            </div>
            <div class="my-3">
                <label class="form-label">Before 2Days Price</label>
                <input type="text" class="form-control"  placeholder="Enter Before 2Days Price" name="before2daysprice" autocomplete="off" value=<?php echo $before21?>>
            </div>
            <div class="my-3">
                <label  class="form-label">Before 3Days Price</label>
                <input type="text" class="form-control" placeholder="Enter Before 3Days Price" name="before3daysprice" autocomplete="off" value=<?php echo $before31?>>
            </div>
            <div class="my-3">
                <label  class="form-label">Before 4Days Price</label>
                <input type="text" class="form-control"  placeholder="Enter Before 4Days Price" name="before4daysprice" autocomplete="off" value=<?php echo $before41?>>
            </div>
            <button class="btn btn-dark btn-lg my-3" name="update">Update</button>
        </form>
        </div>


    </body>