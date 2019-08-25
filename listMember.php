<?php include_once "../helper.php"?>
<style>
    body{
        background-image: url("./MMP.jpg");
        background-repeat: repeat no-repeat;
        background-size:cover;


    }

</style>
<html>
<body>



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
$sql="select * from omtscustomer";
$result=$conn->query($sql);
$row=$result->fetch_assoc();?>

<center><form action="./deleteCustomer.php" method="post">
    <?php
if($row){?>
<div>
    <table>
        <?php printTableHeading("customer"); ?>
        <tbody>
        <?php
        while ($row):?>
            <tr><?php printCustomerRow($row);?></tr>
            <?php $row = $result->fetch_assoc();?>
            <br>
                <?php
        endwhile;
        }?>
        </tbody>
    </table>
</div>
        <br><br>
    <input type="submit" name="delete" value="delete" />
</form>
</center>

<div class="w3-display-bottomleft w3-padding-large">
    <a href="./administrator.php" target="_blank">back to main page</a>
</div>

</body>
</html>



