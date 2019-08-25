<!DOCTYPE html>
<html>
<title>Theatre Complex</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card w3-black">
        <a href="#home" class="w3-bar-item w3-button"><b>AJR</b>&nbspTheatre Complex</a>

    </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="./cine.png" style="float:left;width:1500px;height:520px;">
</header>






<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

    <!-- Project Section -->
    <div class="w3-container w3-padding-32" id="projects">
        <br>
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b>Address</b></h3>
    </div>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql= "SELECT theatreName,Tstreet,Tcity,TpostalCode,Tphone FROM theatreComplex";
$result = $conn->query($sql);
$row= $result->fetch_assoc();
$i=1;
?>


<div class="w3-row-padding w3-padding-16">
    <?php
while($row){
    $name=$row["theatreName"];

    ?>

        <div class="w3-third w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft  w3-padding"><?php $name?></div>
                <?php $path='./t'.$i.'.jpg';?>
                <img src= '<?php echo $path;?>' w3-black width="400" height="500">
                <p><?php echo $row["theatreName"];?></p>
                <p><?php echo $row["Tstreet"];?></p>
                <p><?php echo $row["Tcity"];?></p>
                <p><?php echo $row["TpostalCode"];?></p>
                <p><?php echo $row["Tphone"]?></p>
            </div>
        </div>

<?php
    $row = $result->fetch_assoc();
    $i=$i+1;
}
?>
</div>
        <!-- End page content -->
    </div>
<footer class="w3-center w3-black w3-padding-16">
    <p><a href="./action.php" title="W3.CSS" target="_blank" class="w3-hover-text-green"><b>Back to Main Page</b></a></p>
</footer>

</body>
</html>