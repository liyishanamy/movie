<?php include_once "./helper.php"?>

<html>
<link rel="stylesheet" type="text/css" href="./theatreInfo.css">
<body>

<?php session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
$user=$_SESSION['uname'];
$i=1;
$order='temp'.$i;


$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="Select * from reserve WHERE accountNum='$user'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$temp = array();

if($row){ // check if the user is in the database
?>


<div id="backg">
    <form action="./checkRefund.php" method="POST">
    <?php
        while ($row){ ?>

        <fieldset>
            <tr><?php
                echo 'Movie: ' . $row["title"];
                array_push($temp,$row["title"]);
                ?>
                <br>
                <?php
                echo 'Date: ' . $row["movieShowTime"];
                array_push($temp,$row["movieShowTime"]);
                ?>
                <br>
                <?php echo 'Start Time: ' . $row['startTime'];
                array_push($temp,$row["startTime"]);
                ?>
                <br>
                <?php echo 'theatreNumber: ' . $row['theatreNumber'];
                array_push($temp,$row["theatreNumber"]);
                ?>
                <br>
                <?php echo 'Ticket Price: $10';
                ?>
                <br>
                <?php echo 'Ticket Number: ' . $row['ticketNumber'];
                array_push($temp,$row["ticketNumber"]);
                ?>

            </tr>
            <?php
            $_SESSION[$order]=$temp;
            ?>


        </fieldset>
        <input type="radio" id="ticket" name="ticket" value=<?php echo $order;?>>
            <?php
            $temp=array();
            $i =$i+1;
            $order='temp'.($i);
            ?>
    <br>
    <?php $row = $result->fetch_assoc();
    }?>

    <input type="submit" name="refund" value="refund" />
    </form>
    <?php

}

    else{
    ?>
        <div class="w3-padding-large w3-xlarge w3-black">
            <center><p><b>User does not buy any tickets</b></p></center>
        </div>
        <?php
            }
            ?>
    </div>
<div class="w3-display-bottomleft w3-padding-large">
    <h4><center><a href="./action.php" target="_blank">Go back to main page</a></center></h4>
</div>

</body>

</html>


