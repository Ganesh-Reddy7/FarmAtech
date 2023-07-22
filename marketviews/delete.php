<?php
include 'connection.php';
$id=$_GET['deleteid'];
$sql="delete from `marketprices` where id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header('location:marketviews.php');
}else{
    die(mysqli_error($con));
}
?>