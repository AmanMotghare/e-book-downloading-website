<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$database="library";
$port = 4307;

$conn=mysqli_connect($servername,$username,$password,$database,$port);
if($conn){
   echo "Connection Okay";
}
else{
    echo "Connection Failed".mysqli_connect_error();
}
?>