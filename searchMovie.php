<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h4 {font-family: "Raleway", sans-serif}
    body, html {height: 100%}
    .bgimg {
        background-image: url('./administrator/comming.jpg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
    div {
        font-size:x-small;
    }

</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white w3-small">


    <div class="w3-display-middle w3-padding-large w3-xlarge w3-black">&nbsp&nbsp&nbsp <?php

$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
$query=$_POST['search'];//user input


$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql=" SELECT title FROM movie WHERE title='$query' AND '$query' IN (select title from movie)";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$i='';
if($row['title']=="Black Panther"){
    $i='';

}
if($row['title']=="Annihilation"){
    $i=1;

}
if($row['title']=="Early Man"){
    $i=2;

}
if($row['title']=="isle of dogs"){
    $i=3;

}
echo $i;

if(mysqli_num_rows($result)==1){//exist
    $row['title']=str_replace(' ','',$row['title']);

    $url="./userReview/userReview/index"."$i".".php";
    echo $url;
    $home_url = $url;
    header('Location:'.$home_url);
}
else{
    echo "Not found this movie in our database";
}
?>
    </div>
</div>
<div class="w3-display-bottomleft w3-padding-large">
    <h4><center><a href="./action.php" target="_blank">Return to main page</a></center></h4>
</body>
</html>