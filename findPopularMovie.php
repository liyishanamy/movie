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


    <div class="w3-display-middle w3-padding-large w3-xlarge w3-black">&nbsp&nbsp&nbsp <?php
        $sql = "select title,SUM(ticketNumber) AS total from reserve GROUP BY title ORDER BY total DESC";
        //$sql="select ticketNumber from reserve";

        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        echo "Accumulated most popular: ".$row['title']; ?>

        <div class="w3-padding-large w3-xlarge w3-black">
            <?php
            $other="select reserve.title,SUM(ticketNumber) AS total from reserve,movie where movie.title=reserve.title and state='new' GROUP BY reserve.title ORDER BY total DESC";
            $otherresult=$conn->query($other);
            $otherRow=$otherresult->fetch_assoc();
            ?>
            <br>
            <?php
            echo "Recently most popular: ".$otherRow['title'];?>
        </div>
    </div>



    <div class="w3-display-bottomleft w3-padding-large">
        <h4><center><a href="./administrator.php" target="_blank">Return to main page</a></center></h4>
    </div>
</div>

</body>
</html>



