
<?php session_start();?>
<h1>Blackpanther</h1>
<img src='./Black_Panther_film_poster.jpg'/>
<p>Marvel Studios' “Black Panther” follows T’Challa who, after the death of his father, the King of Wakanda, returns home to the isolated,
technologically advanced African nation to succeed to the throne and take his rightful place as king. But when a powerful old enemy reappears,
T’Challa’s mettle as king—and Black Panther—is tested when he is drawn into a formidable conflict that puts the fate of Wakanda and the entire
world at risk. Faced with treachery and danger, the young king must rally his allies and release the full power
of Black Panther to defeat his foes and secure the safety of his people and their way of life.</p>
<form action="./BlackpantherReview.php" method="POST">
        <textarea name="rating" rows="4" cols="30"></textarea>
        <input type="submit" name="submit" value="Submit" />
        <input type="submit" name="delete" value="delete"/>
</form>
<?php if(isset($_SESSION['otherinfo'])){
    echo $_SESSION['otherinfo'];
}
$_SESSION['otherinfo']=Null;?>
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
$otherReview = "Select accountNum,rating from review where title='Black Panther'";
$result = $conn->query($otherReview);
$sql_row =  $result->fetch_assoc();
while($sql_row){
    //print_r($sql_row);
    echo $sql_row["accountNum"]."     ".$sql_row["rating"];?>

    <br>
<?php
    $sql_row = $result->fetch_assoc();
}

?>
