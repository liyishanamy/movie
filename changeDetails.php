<html>


<link rel="stylesheet" type="text/css" href="../signupStyle.css">


<body>
<?php
session_start();
$selected=$_POST['movie'];
$_SESSION['changedMovie']=$selected;


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
$sql="select * from showings where title='$selected'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$temp=array();
$i=1;
$order='temp'.$i;?>
<form action="./updateShowings.php" method="post">
    <?php
while ($row){
    $theatreName=$row['theatreName'];
    $_SESSION['theatreName']=$theatreName;
    $start=$row['startTime'];
    $_SESSION['start'] = $start;
    $seatAvailable=$row['seatAvailable'];
    $_SESSION['seat']=$seatAvailable;
    $theatreNumber=$row['theatreNumber'];
    $_SESSION['theatreNumber']=$theatreNumber;
    ?>

    <!-- Content -->

        <div class="columnInnerContainer">
            <div class="body"></div>
            <div class="grad"></div>

                <div class="login">
                    <fieldset id="field">
                        <h1 class="title"><?php echo $selected?></h1>
                        <form action="./updateDone.php" method="POST">

                            <div class="input">
                                <label for="theatre">theatreName</label> <input type="text" name=<?php echo $theatreName;?> id="theatreName" value=<?php echo '"'.$theatreName.'"';?> size="30" maxlength="100"  required/>
                                <span class="error">*</span>
                            </div>
                            <?php  array_push($temp,$theatreName);
                            ?>




                            <div class="input">
                                <label for="start">startTime</label><input type="time" name=<?php echo $start;?> id="start"  value=<?php echo $start;?> size="30" maxlength="100" required/>
                                <span class="error">*</span>
                            </div>
                            <?php  array_push($temp,$start);
                            ?>

                            <div class="input">
                                <label for="seatAvailable">seat Available</label><input type="text"  name=<?php echo $seatAvailable;?> id="seatAvailable" value=<?php echo $seatAvailable;?> required/>
                            </div>
                            <?php  array_push($temp,$seatAvailable);
                            ?>

                            <div class="input">
                                <label for="theatreNumber">theatreNumber:</label> <input type="int" name=<?php echo $theatreNumber;?> id="theatreNumber" value=<?php echo $theatreNumber;?> size="30" required/>
                                <span class="error" id="errorMessage">*</span>
                            </div>
                            <?php  array_push($temp,$theatreNumber);
                            ?>

                            <p>NOTES:red star means required field</p>

                        <?php
                        $_SESSION[$order]=$temp;
                        ?>

                    </fieldset>
                    <input type="radio" id="select" name="select" value=<?php echo $order;?>>
                    <?php
                    $temp=array();

                    $i =$i+1;
                    $order='temp'.($i);
                    ?>
                </div>

        </div> <!-- .columnInnerContainer -->
    <?php

   $row=$result->fetch_assoc();


}?>

       <input type="submit" id="center" name="update" value="update" />

    </form>


    </body>
    </html>









