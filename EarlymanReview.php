<?php
session_start();
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
}?>
<?php if (isset($_SESSION['uname'])){
    $accountName=$_SESSION['uname'];
    $comment=$_POST['rating'];
    if (isset($_POST['delete'])){
        $sql="DELETE FROM review WHERE title='Early Man' AND accountNum='$accountName'";
        $result=$conn->query($sql);
        if(!$result){
            die('Could not query:' .$result->error());
        }

        //echo "<script language='javascript'>alert('YOU HAVE DELETED YOUR COMMENT!')</script>";
        $_SESSION['otherinfo']='YOU HAVE DELETED YOUR COMMENT!';
        $home_url = './EarlyMan.php';
        header('Location:'.$home_url);
    }
    $_SESSION['otherinfo']='YOU HAVE DELETED YOUR COMMENT!';
    if (isset($_POST['submit'])&&$comment!=NULL){
        $sql="INSERT INTO review(accountNum,title,rating)
        VALUES('$accountName','Early Man','$comment')";
        $conn->query($sql);
        $_SESSION['otherinfo']='YOU HAVE SUCCESSFULLY REVIEWED THIS MOVIE';
        $home_url = './EarlyMan.php';
        header('Location:'.$home_url);
        //echo "<script language='javascript'>alert('YOU HAVE SUCCESSFULLY REVIEWED THIS MOVIE')</script>";
    }
    if(isset($_POST['submit'])&&$comment==NULL){
        $_SESSION['otherinfo']='you should enter something';
        $home_url = './EarlyMan.php';
        header('Location:'.$home_url);
        //echo "<script language='javascript'>alert('you should enter something')</script>";
    }
}?>
<?php
    if (!isset($_SESSION['uname'])){
        if(isset($_POST['delete'] )|| isset($_POST['submit'])){
            $_SESSION['otherinfo']='you have to log in!!';
            $home_url = './EarlyMan.php';
            header('Location:'.$home_url);
            //echo "<script language='javascript'>alert('you have to log in!!')</script>";
        }
    }

        ?>
