<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h4 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .bgimg {
        background-image: url('./administrator/comming.jpg');
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
    <div class="w3-display-middle w3-padding-large w3-xlarge w3-black">&nbsp&nbsp&nbsp
        <?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
//$user=$_SESSION['uname'];


$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo $_POST['ticket'];

$variable=$_POST['ticket'];



$movieTime=$_SESSION[$variable][1];
$date=str_replace('-','/',$movieTime);
$before=date('Y-m-d',strtotime($date."-1 days"));

$title=$_SESSION[$variable][0];
$movieShowTime=$_SESSION[$variable][1];
$startTime=$_SESSION[$variable][2];
$theatreNumber=$_SESSION[$variable][3];
$ticketNumber=$_SESSION[$variable][4];
$user=$_SESSION['uname'];



$today=date("Y-m-d");?>
        <div class="w3-padding-large w3-xlarge w3-black">
        <?php
//echo $today."\n";
if ($before>=$today){
    echo "Refund Successfully";
    //$sql="select ticketNumber from reserve where ";
   // $sql="SELECT ticketNumber FROM reserve WHERE title='$title' AND movieShowTime='$movieShowTime' AND startTime='$startTime',theatre"

    $sql="SELECT seatAvailable FROM showings where theatreNumber='$theatreNumber' AND startTime='$startTime' AND title='$title'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $seatAvailable= $row['seatAvailable'];
    //echo $seatAvailable;
    $seat=$seatAvailable+$ticketNumber;
    $other="UPDATE showings SET seatAvailable='$seat' WHERE theatreNumber='$theatreNumber' AND startTime='$startTime' AND title='$title'";
    $conn->query($other);
    $query="DELETE FROM reserve WHERE theatreNumber='$theatreNumber' AND startTime='$startTime' AND title='$title' AND accountNum='$user' AND movieShowTime='$movieShowTime'";
    $conn->query($query);
}

else{
    echo "You can't refund this tickets anymore!tickets can only be refunded one day in advance";
}
?>
        </div>
</body>
</html>
