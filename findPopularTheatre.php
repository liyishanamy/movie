<?php
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";

//echo "$accountName";
// Create connection
//$conn = new mysqli($servername,$username,$password,$dbname);
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<br>

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
            $other="SELECT theatreName,sum(total) AS summ from (select theatreName,reserve.theatreNumber,SUM(ticketNumber) AS total from reserve,theatre where reserve.theatreNumber=theatre.theatreNumber GROUP BY reserve.theatreNumber ORDER BY total DESC) as temp GROUP BY theatreName ORDER BY summ DESC";
            $otherresult=$conn->query($other);
            $otherRow=$otherresult->fetch_assoc();
            $otherRow['summ'];
            ?>

            <?php
            echo "Most popular theatre: ".$otherRow['theatreName'];?>
        <br>

    </div>



    <div class="w3-display-bottomleft w3-padding-large">
        <h4><center><a href="./administrator.php" target="_blank">Return to main page</a></center></h4>
    </div>
</div>

</body>
</html>


