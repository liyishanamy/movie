<?php include_once "../helper.php";?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";



$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}?>

<?php
$sql="select title,state from movie";
$result = $conn->query($sql);
$row=$result->fetch_assoc();?>
<html>
<link rel="stylesheet" type="text/css" href="../theatreInfo.css">
<fieldset>
<form action="./changeState.php" method="post">
    <?php
    printTableHeading('state');?>
    <br>
    <?php
    while($row){
        $title=$row['title'];
        echo $title;
        $state=$row['state'];
        ?>
        <label><?php echo $state;?></label><input type="checkbox" name="state[]" value=<?php echo '"'.$title.'"';?>>
        <br>
        <?php $row = $result->fetch_assoc();
    }
    ?>

    <input type="submit" name="change" value="change state" />
</form>
</fieldset>




</html>
