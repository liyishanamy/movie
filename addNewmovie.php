<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";

$title = $_POST['title'];

$runningtime=$_POST['runningtime'];

$rating=$_POST['rating'];

$plot=$_POST['plot'];

$start=$_POST['startDate'];

$end=$_POST['endDate'];

$state=$_POST['state'];

$link=$_POST['link'];//img link

$_SESSION['img']=$link;
$_SESSION['movieTitle']=$title;
if($state=="new"){
    $_SESSION[$title]='set';
}

if($state=="old"){
    $_SESSION[$title]='unset';
}


$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql ="INSERT INTO movie(title,runningTime,rating,plotSynopsis,startDate,endDate,state)
       VALUES ('$title','$runningtime','$rating','$plot','$start','$end','$state')";
$conn->query($sql);

$home_url = './administrator.php';
header('Location:'.$home_url);


?>





