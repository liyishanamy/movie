<?php session_start();?>
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
if(isset($_POST['update'])){
    $movie=$_SESSION['changedMovie'];
    $theatreName=$_SESSION['theatreName'];
    $startTime=$_SESSION['start'];
    $seatAvailable=$_SESSION['seatAvailable'];
    $theatreNumber=$_SESSION['theatreNumber'];
    echo $movie."'s showing information has been changed'";
    $sql="update showings set theatreName='$theatreName',startTime='$startTime',seatAvailable='$seatAvailable',theatreNumber='$theatreNumber' WHERE title='$movie'";
    $conn->query($sql);
    echo $movie."'s showing has been changed";

}?>