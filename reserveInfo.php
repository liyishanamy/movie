<?php include_once "../helper.php" ?>
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


<?php session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
$_SESSION['userName']=$_POST['account'];
$user=$_SESSION['userName'];


$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="Select * from reserve WHERE accountNum='$user'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
if($row){ // check if the user is in the database?>
<html>

<fieldset>
<div>
    <table>
        <?php printTableHeading("searchReserve"); ?>
        <tbody>
        <?php
        while ($row):?>
            <tr><?php printTableRow($row); ?></tr>
            <?php $row = $result->fetch_assoc();
        endwhile;
        }
        else{
    echo "NOT FOUND THIS USER IN THE DATABASE";
        }?>
        </tbody>
    </table>

</div>



</fieldset>
<br><br>
<div class="w3-display-bottomleft w3-padding-large">
    <h4><center><a href="./administrator.php" target="_blank">Return to main page</a></center></h4>
</div>
</html>


