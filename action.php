<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>Theatre Complex</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    #account{
        color:white;
        font-size: 11px;
    }
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
    #parent {
        background: bottom;
        width: 100%;
        height: 30px;
        overflow: hidden;
    }

    #parent select {
        background: transparent;
        border: none;
        padding-left: 10px;
        width: 100%;
        height: 100%;
    }
</style>


<!-- Navigation Bar -->
<div class="w3-bar w3-black w3-large">
    <a href="./theatreComplex.php" class="w3-bar-item w3-button w3-mobile w3-black ">Theatre Complex</a>
    <a href="./userAccount.php" class="w3-bar-item w3-button w3-right w3-black w3-mobile"><?php
            if(isset($_GET['logout'])){// log out then clear the session
                $_SESSION['uname']=NULL;
                session_destroy();
                $home_url = './action.php';
                header('Location:'.$home_url);

            }
            if(isset($_SESSION['message'])){

            echo $_SESSION['message'];} ?></a>

    <a href=./action.php?logout=1" class="w3-bar-item w3-button w3-right w3-black w3-mobile">Login Out</a>
    <a href="./userLogin.php" class="w3-bar-item w3-button w3-right w3-black w3-mobile">Login Now</a>
    <a href="./register.php" class="w3-bar-item w3-button w3-right w3-black w3-mobile">Sign Up</a>

</div>

<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
    <img class="w3-image" src="./max.jpg" style="min-width:1000px" width="1500" height="400">
    <div class="w3-display-left w3-padding w3-col l4 m2">
        <div class="w3-container w3-black">
            <h2><i class="fa fa-desktop w3-margin-right"></i>Ticket Information</h2>
        </div>
        <div class="w3-container w3-white w3-padding-16">
            <form action="./movieTitle.php" target="_blank" method="post">



                <div class="w3-margin-bottom" >
                    <label><i class="fa fa-calendar-o"></i>&nbsp&nbspTheatre Complex</label>
                    <div id="parent">
                        <select name="theatre">
                            <option value="Complex Domino">Complex Domino</option>
                            <option value="Complex Forum">Complex Forum</option>
                            <option value="Complex Hollywood">Complex Hollywood</option>
                        </select>

                    </div>
                </div>

                <div class="w3-margin-bottom" >
                    <label><i class="fa fa-calendar-o"></i>&nbsp&nbspMovies</label>
                    <div id="parent">
                        <select name="movie">
                            <option value="Black Panther">&nbsp&nbspBlack Panther</option>
                            <option value="Annihilation">&nbsp&nbspAnnihilation</option>
                            <option value="Early Man">&nbsp&nbspEarlyman</option>
                        </select>

                    </div>
                </div>
                <div class="w3-margin-bottom">
                    <label><i class="fa fa-calendar-o"></i>&nbsp&nbspDate</label>
                    <input type="date" name="movieDate" min="2018-03-26" max="2018-04-26" required>
                </div>

                <div class="w3-margin-bottom">
                    <button class="w3-button w3-block w3-black" input type="submit" ><i class="fa fa-search w3-margin-right"></i> Search availability</button>
                </div>


                <?php if(isset($_SESSION['info'])){
                    echo $_SESSION['info'];
                }
                $_SESSION['info']=NULL;
                ?>


            </form>


        </div>
    </div>
</header>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="select title,state from movie";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
while($row){
    $title=$row['title'];
    $status=$row['state'];
    $title=str_replace(' ','',$title);
    if($status=="new"){
        $_SESSION[$title] ='set';

    }
    if($status=="old"){
        $_SESSION[$title] ='unset';

    }

    $row=$result->fetch_assoc();
}






?>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

    <div class="w3-container w3-margin-top" id="Movies">
        <h3>Movies</h3>
        <p>"Yesterday is history, tomorrow is a mystery, today is a gift of God, which is why we call it the present."</p>
    </div>
    <div class="w3-container w3-margin-top">
        <form action="./searchMovie.php" method="post"?>
        <input type="text" placeholder="Search.." name="search">
        <input type="submit"><i class="fa fa-search"></i></input>
        </form>
    </div>
    <?php
    if($_SESSION['BlackPanther']=='set'){?>
    <div class="w3-row-padding w3-padding-16">
        <div class="w3-third w3-margin-bottom">
            <img src="./black.jpg"  width="400" height="500">
            <div class="w3-container w3-white">
                <h3>Black Panther</h3>

                <a href="./userReview/userReview/index.php" class="w3-button w3-block w3-black w3-margin-bottom">More details</a>

            </div>
        </div>

        <?php }

        if(isset($_SESSION['Annihilation'])=='set'){?>
        <div class="w3-third w3-margin-bottom">
            <img src="./Annihilation.jpg"  width="400" height="500">
            <div class="w3-container w3-white">
                <h3>Annihilation</h3>

                <a href="./userReview/userReview/index1.php" class="w3-button w3-block w3-black w3-margin-bottom">More details</a>
            </div>
        </div>

        <?php }
        if($_SESSION['EarlyMan']=='set'){?>
        <div class="w3-third w3-margin-bottom">
                <img src="./Early_Man_Poster.jpg"  width="400" height="500">
                <div class="w3-container w3-white">
                    <h3>Early Man</h3>

                    <a href="./userReview/userReview/index2.php" class="w3-button w3-block w3-black w3-margin-bottom">More details</a>
                </div>
        </div>
            <?php }

        error_reporting(0);
            if($_SESSION['isleofdogs']==='set'){
        error_reporting(0);
        ?>


        <div class="w3-third w3-margin-bottom">
            <img src='./isleofdogs.jpg' width="400" height="500">
            <div class="w3-container w3-white">
                <h3>Isle of dogs</h3>

                <a href="./userReview/userReview/index3.php" class="w3-button w3-block w3-black w3-margin-bottom">More details</a>
            </div>
        </div>
    </div>


    <?php

            }
            ?>

</div>



</body>
</html>

