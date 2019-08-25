<?php
session_start();
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="./theatreInfo.css">
<body>
<section id="submit">
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="theatreComplex";
    // Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $ticketNumber = $_SESSION['ticketnumber'];//number of ticket reserved
    $movie=$_SESSION['movie'];
    $startTime=$_SESSION['time'];
    $theatreComplex = $_SESSION['theatre'];
    $user=$_SESSION['uname'];
    $movieShowTime=$_SESSION['date'];


    $sql = "SELECT theatreNumber,seatAvailable FROM showings WHERE title ='$movie' AND startTime = '$startTime' AND theatreName='$theatreComplex'";


    $result = $conn->query($sql);
    $row =  $result->fetch_assoc();
    $theatre = $row['theatreNumber'];

    $seat = $row['seatAvailable'];
    $restSeat = $seat - $ticketNumber;

    $changeSeat="UPDATE showings SET seatAvailable = '$restSeat' WHERE title='$movie' AND theatreNumber='$theatre' AND startTime='$startTime'";
    $conn->query($changeSeat);
    $reserve= "INSERT INTO reserve(accountNum,title,startTime,theatreNumber,ticketNumber,movieShowTime) VALUES ('$user','$movie','$startTime','$theatre','$ticketNumber','$movieShowTime')";
    $conn->query($reserve);
    ?>

    <fieldset>
            <center>
                <?php echo 'Thank You For Your Purchase! ';?>
                <br>
                <?php echo 'Movie: '.$_SESSION["movie"];?>
                <br>
                <?php echo 'Time: '.$_SESSION["date"];?>
                <br>
                <?php echo 'Start Time: '.$startTime;?>
                <br>
                <?php echo 'Theatre Complex: '.$_SESSION["theatre"];?>
                <br>
                <?php echo 'Theatre Number: '.$theatre;?>
                <br>
                <?php echo 'Ticket Price: $10';?>
                <br>
                <?php echo 'Ticket Number: '.$ticketNumber;?>
                <br>
                <?php
                $totalTP =$ticketNumber*10;
                echo 'Total Ticket Price: '.$totalTP;?>
                <br>
                <?php $tax =$totalTP*0.13;
                    echo 'Tax: '.$tax;?>
                <br>
                <?php $total = $totalTP + $tax;
                    echo 'Total: '.$total;?>

            </center>

    </fieldset>

    <div class="w3-display-bottomleft w3-padding-large">
        <a href="./ticket.php" target="_blank">Confirm the ticket</a>
    </div>

    <div class="w3-display-bottomleft w3-padding-large">
        <h4><center><a href="./action.php" target="_blank">Return to main page</a></center></h4>
    </div>



</section>

</body>
</html>
