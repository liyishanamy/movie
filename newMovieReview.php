<?php
session_start();
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
}?>
<?php if (isset($_SESSION['uname'])){
    $accountName=$_SESSION['uname'];
    $comment=$_POST['rating'];
    if (isset($_POST['delete'])){
        $sql="DELETE FROM review WHERE title='Annihilation' AND accountNum='$accountName'";
        $result=$conn->query($sql);
        if(!$result){
            die('Could not query:' .$result->error());
        }

        echo "<script language='javascript'>alert('YOU HAVE DELETED YOUR COMMENT!')</script>";
    }
    if (isset($_POST['submit'])&&$comment!=NULL){
        $sql="INSERT INTO review(accountNum,title,rating)
        VALUES('$accountName','Annihilation','$comment')";
        $conn->query($sql);
        echo "<script language='javascript'>alert('YOU HAVE SUCCESSFULLY REVIEWED THIS MOVIE')</script>";
    }
    if(isset($_POST['submit'])&&$comment==NULL){
        echo "<script language='javascript'>alert('you should enter something')</script>";
    }
}?>
<?php
if (!isset($_SESSION['uname'])){
    if(isset($_POST['delete'] )|| isset($_POST['submit'])){
        echo "<script language='javascript'>alert('you have to log in!!')</script>";
    }
}

?>


















































































