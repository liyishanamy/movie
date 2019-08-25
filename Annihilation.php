<?php session_start();?>
<h1>Annihilation</h1>
<img src='./Annihilation.jpg'/>
<p>Annihilation is a 2018 science fiction horror film written and directed by Alex Garland, based on the novel of the same name by Jeff VanderMeer.
    The film stars Natalie Portman, Jennifer Jason Leigh, Gina Rodriguez, Tessa Thompson, Tuva Novotny, and Oscar Isaac, and follows a group of
    military scientists who enter "The Shimmer," a mysterious quarantined zone that is full of mutating landscapes and creatures. The film was
    released in the United States by Paramount Pictures on February 23, 2018, and is scheduled to be released in other markets on March 12, 2018 by
    Netflix.[3] The film received mostly positive reviews from critics, with praise for its visuals, performances, direction, and though t-provoking story.</p>
    <form action="./AnnihilationReview.php" method="POST">
        <textarea name="rating" rows="4" cols="30"></textarea>
        <input type="submit" name="submit" value="Submit" />
        <input type="submit" name="delete" value="delete"/>
    </form>

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
if(isset($_SESSION['otherinfo'])){
    echo $_SESSION['otherinfo'];
}
$_SESSION['otherinfo']=Null;?>
<center><h1>REVIEW</h1></center>

<?php
$otherReview = "Select accountNum,rating from review where title='Annihilation'";
$result = $conn->query($otherReview);
$sql_row =  $result->fetch_assoc();
while($sql_row){
    //print_r($sql_row);
    echo $sql_row["accountNum"].$sql_row["rating"];?>

    <br>
    <?php
    $sql_row = $result->fetch_assoc();
}?>


