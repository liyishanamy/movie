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
foreach($_POST['customer'] as $chosenCustomer) {
    //$sql = "delete t1,t2,t3,t4 FROM
//omtscustomer AS t1 INNER JOIN phonenumber AS t2 on t1.accountNum=t2.accountNum
//INNER JOIN review AS t3 on t1.accountNum = t3.accountNum
//INNER JOIN reserve AS t4 on t1.accountNum=t4.accountNum
//Where t1.accountNum='$chosenCustomer'";
    $sql="delete from omtscustomer where accountNum='$chosenCustomer'";
    $conn->query($sql);
    echo $conn->error;
    echo "$chosenCustomer" . " is being deleted from the database";
}?>
    </div>
</div>
<div class="w3-display-bottomleft w3-padding-large">
    <h2><a href="./administrator.php" target="_blank">Return to main page</a></h2>
</div>
</body>
</html>


