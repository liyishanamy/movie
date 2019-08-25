<?php
$choose=$_POST['state'];
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['state'])&& isset($_POST['change'])) {
    foreach($_POST['state'] as $movie) {
        $sql="select * from movie WHERE title='$movie'";
        $result=$conn->query($sql);
        $row = $result->fetch_assoc();
        $status = $row['state'];
        if($status =="new"){
            $change1="old";
            $other1="update movie set state='$change1' WHERE title='$movie'";
            $conn->query($other1);
            echo $movie."is no longer shown in the theatre";

        }
        if($status == "old"){
            $change2="new";
            $other2="update movie set state='$change2' WHERE title='$movie'";
            $conn->query($other2);
            echo $movie."is newly released movie";
        }
    }
}

$sql="select title from movie where state='old'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
while($row){
    $title=$row['title'];
    $title=str_replace(' ','',$title);

    $_SESSION[$title] ='unset';

    $row=$result->fetch_assoc();
}
$home_url = './administrator.php';
header('Location:'.$home_url);


?>