<?php session_start();?>
<h1>EARLYMAN</h1>
<img src='./Early_Man_Poster.jpg'/>
<p>Early Man is a 2018 British stop-motion animated sports comedy film directed by Nick Park, written by Mark Burton and James Higginson, and starring
    the voices of Eddie Redmayne, Tom Hiddleston, Maisie Williams, and Timothy Spall. The film follows a tribe of primitive Stone Age valley dwellers
    who have to defend their land from bronze-using invaders in an association football match. The film was produced by Aardman Animations and BFI
    and was released on 26 January 2018 in the United Kingdom, and in the United States on 16 February 2018. It has received generally positive
    reviews from critics, and has grossed $36.7 million worldwide</p>
<form action="./EarlymanReview.php" method="POST">
    <textarea name="rating" rows="4" cols="30"></textarea>
    <input type="submit" name="submit" value="Submit" />
    <input type="submit" name="delete" value="delete"/>
</form>
<?php
if(isset($_SESSION['otherinfo'])){
    echo $_SESSION['otherinfo'];
}
$_SESSION['otherinfo']=Null;?>
?>

<center><h1>REVIEW</h1></center>
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
$otherReview = "Select accountNum,rating from review where title='Early Man'";
$result = $conn->query($otherReview);
$sql_row =  $result->fetch_assoc();
while($sql_row){
    //print_r($sql_row);
    echo $sql_row["accountNum"].$sql_row["rating"];?>
    <br>
<?php
    $sql_row = $result->fetch_assoc();
}?>

