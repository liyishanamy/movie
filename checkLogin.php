<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";

$movie=$_SESSION['movie'];
$startTime=$_SESSION['time'];
// Create connection
//$conn = new mysqli($servername,$username,$password,$dbname);
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


echo $_SESSION['uname'];

if(!isset($_SESSION['uname'])){
    $_SESSION['info']='you have to log in first!';
    $home_url = './login.php';
    header('Location:'.$home_url);
}
else{
    $_SESSION['time'] = $_POST['time'];
    $sql="SELECT seatAvailable from showings where title='$movie' AND startTime='$startTime'";
    $result=$conn->query($sql);
    $row= $result->fetch_assoc();

    $seat = $row['seatAvailable'];//seat available
    echo $seat;
    $_SESSION['ticketnumber']=$_POST['ticketnumber'];//number of ticket reserved
    $reservedTicket=$_POST['ticketnumber'];//
    $_SESSION['ticketnumber'] = $reservedTicket;

    //$restSeat = $seat - $reservedTicket;



    //echo $reservedTicket;
    //echo $restSeat;

/*

    if($restSeat < 0){
        $_SESSION['info']='this showing is full,change another start time';
        $home_url = './action.php';
        header('Location:'.$home_url);

    }
*/

    if(isset($_SESSION['uname'])&& isset($_POST['time'])&&$restSeat>=0){
        $_SESSION['time']=$_POST['time'];
        $home_url = './receipt.php';
        header('Location:'.$home_url);
    }

}



?>

