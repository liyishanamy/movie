<?php include_once "./helper.php" ?>
<?php
session_start();

$_SESSION["movie"] = $_POST["movie"];
$_SESSION["theatre"] = $_POST["theatre"];
$_SESSION["date"] = $_POST["movieDate"];
$movieName = $_SESSION["movie"];
$theatreName = $_SESSION["theatre"];



//echo $date;


?>

<!DOCTYPE html>
<html>

<title>Movie</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

        <!-- Left Column -->
        <div class="w3-third">

            <div class="w3-white w3-text-grey w3-card-4">
                <div class="w3-display-container">

                    <?php
                    if ($movieName =="Black Panther"){
                        $pic = "./Black_Panther_film_poster.jpg";
                    }
                    if($movieName=="Annihilation"){
                        $pic="./Annihilation.jpg";
                    }
                    if($movieName=="Early Man"){
                        $pic="./Early_Man_Poster.jpg";
                    }

                   ?>
                    <center><img src=<?php echo $pic?>  height="300" width="300" alt="other"></center>
                </div>
                <div class="w3-container">
                    <center><p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
                        <?php echo $movieName;?></p></center>
                    <center><p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $theatreName;?></p></center>
                    <center><p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>theatre@mail.com</p></center>
                    <hr>
                </div>
            </div><br>

            <!-- End Left Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-twothird">

            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i class="w3-margin-right w3-xxlarge w3-text-teal"></i>Showtime</h2>
                <div class="w3-container">
                    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
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

                        $selectInfo="select startTime,seatAvailable,theatreNumber 
                                    from showings where theatreName= '$theatreName'
                                    and title='$movieName'";
                        $result = $conn->query($selectInfo);
                        $sql_row =  $result->fetch_assoc();?>
                        <?php
                        if($sql_row){?>
                        <div>
                            <table>
                                <?php printTableHeading("searchShowing"); ?>
                                <tbody>
                                <?php
                                while ($sql_row):?>
                                    <tr><?php printTableRow($sql_row); ?></tr>
                                    <?php $sql_row = $result->fetch_assoc();
                                endwhile;
                                }?>
                                </tbody>
                            </table>
                        </div>
                    </h6>

                    <hr>
                </div>
            </div>
        </div>


        <form action="./checkLogin.php" method="POST">
        <div class="w3-twothird">
            <div class="w3-container w3-card w3-white w3-margin-bottom">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Purchase</h2>
                <div class="w3-container">
                    <div id="ticketNumSel">
                        <label>choose Time</label>
                        <br>

                        <?php
                        $info="select startTime,seatAvailable,theatreNumber 
                                    from showings where theatreName= '$theatreName'
                                    and title='$movieName'";
                        $result = $conn->query($info);
                        $sql_row =  $result->fetch_assoc();?>
                        <?php
                        while ($sql_row){
                            $time=$sql_row["startTime"];
                            //$room=$sql_row['theatre'];
                            ?>
                            <input type="radio" name="time" value=<?php echo $time?> required/><label><?php echo $time ?></label>
                            <br>
                        <?php $sql_row = $result->fetch_assoc();
                                } ?>


                        <label>Ticket number</label>
                        <select  name="ticketnumber" id="ticketNum">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                        </select>

                        <div>
                            <input type="submit" name="buy" value="Buy" />
                            <a href="./login.php">Login</a>

                        </div>
                    </div>

                    <hr>
                </div>
            </div>
        </div>
</form>
</div>

<p><a href="./action.php" class="w3-hover-text-green">Switch to Customer View </a></p>

<footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">TEAM33</a></p>
</footer>


    </body>
</html>