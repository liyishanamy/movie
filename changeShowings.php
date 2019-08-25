<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h4 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .bgimg {
        background-image: url('./comming.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
    div {
        font-size:x-small;
    }

</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white w3-small">
    <div class="w3-display-middle w3-padding-large w3-xlarge w3-black">
<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//before
$chosen=$_SESSION['changedMovie'];
$variable=$_SESSION['index'];

$beforeName=$_SESSION[$variable][0];
$beforeStart=$_SESSION[$variable][1];
$beforeseatAvailable=$_SESSION[$variable][2];
$beforetheatreNumber=$_SESSION[$variable][3];
//after
$theatreName=$_POST['theatreName'];
$start=$_POST['start'];
$seatAvailable=$_POST['seatAvailable'];
$theatreNumber=$_POST['theatreNumber'];

$sql="UPDATE showings SET theatreName='$theatreName',startTime='$start',seatAvailable='$seatAvailable' ,theatreName='$theatreName' WHERE title='$chosen' AND
theatreName='$beforeName' AND startTime='$beforeStart'AND seatAvailable='$beforeseatAvailable'AND theatreNumber='$theatreNumber'";
$conn->query($sql);
echo $conn->error;
echo $chosen." showing information has been changed";
?>
<br>
<?php
echo $beforeName." ".$beforeStart."  ".$beforeseatAvailable." ".$beforetheatreNumber;?>
<br>
<?php echo "To";?>
<br>
<?php echo $theatreName." ".$start." ".$seatAvailable." ".$theatreNumber;?>
    </div>
</div>
<div class="w3-display-bottomleft w3-padding-large">
    <h4><center><a href="./administrator.php" target="_blank">Return to main page</a></center></h4>
</div>
</body>
</html>
