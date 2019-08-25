<?php

$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="select * from movie where title='isle of dogs'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

    echo $row['title'];?>
    <br><?php $data=str_replace(' ','',$row['title']);
    $path="./".$data.".jpg";
    echo $path;?>

    <img src='<?php echo $path;?>'/>
<?php
    echo $row['runningTime']."\n";?>
    <br><?php
    echo $row['rating']."\n";?>
    <br><?php
    echo $row['plotSynopsis']."\n";?>
    <br><?php
    echo $row['startDate']."\n";?>
    <br><?php
    echo $row['endDate']."\n";?>
<br><?php
?>

