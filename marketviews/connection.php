<?php
session_start();
$con=mysqli_connect('localhost','root','','farmatech');
if(!$con){
    die(mysqli_error("Error"+$con));
}


?>