<?php
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";

// Create connection
//$conn = new mysqli($servername,$username,$password,$dbname);
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<html>
<link rel="stylesheet" type="text/css" href="../theatreInfo.css">
<body>
<form action="./changeDetails.php" method="POST">
    <div id="showings">
        <label for="showings">update showings</label>
        <?php
        $sql="select DISTINCT  title from showings";
        $result=$conn->query($sql);
        $row=$result->fetch_row();
        while($row){
            ?>
            <br>

            <input type="radio" name="movie" value=<?php echo '"'.$row[0].'""';?>><label><?php echo $row[0]?></label>

            <?php

            $row=$result->fetch_row();
        }

        ?>

        <br>
        <input type="submit" name="update" value="update" />
    </div>
</form>
<div class="w3-display-bottomleft w3-padding-large">
    <a href="./administrator.php" target="_blank">back to the main page</a>
</div>
</body>

</html>

