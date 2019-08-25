<?php include_once "./helper.php"?>
<?php session_start();?>
<html>
<link rel="stylesheet" type="text/css" href="./signupStyle.css">
<body>
<?php
$userPassword = $_POST['password'];
$userFirstname=$_POST['firstname'];
$userLastname=$_POST['lastname'];
$userStreet=$_POST['street'];
$userCity=$_POST['city'];
$userZipcode=$_POST['zipcode'];
$userHomenumber=$_POST['hometelephone'];
$userCellphone=$_POST['cellphone'];
$userEmail =$_POST['email'];
$userCreditnumber=$_POST['cardnumber'];
$userExpiredate=$_POST['expire'];
$user=$_SESSION['uname'];



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

//if(isset($_POST['account'])&&isset($_POST['password'])){
if (isset($_POST['register'])){
    $userPassword = $_POST['password'];
    $query = "SELECT * FROM omtscustomer WHERE accountNum = '$user'";
    $sql = mysqli_query($conn,$query);
    if (mysqli_num_rows($sql)>0){?>
<br><br>
        <p><center><?php echo $userFirstname?> you have updated your profile information </center></p>
        <?php
        $omtssql="UPDATE omtscustomer SET
        password='$userPassword',Fname='$userFirstname=',Lname='$userLastname',street='$userStreet',city='$userCity',postalCode='$userZipcode',email='$userEmail',creditCard='$userCreditnumber',expireDate='$userExpiredate' WHERE accountNum='$user'";

        $cellphonesql ="UPDATE phonenumber SET C_PhoneNumber='$userCellphone' WHERE accountNum='$user'";
        $homephonesql ="UPDATE phonenumber SET C_PhoneNumber='$userHomenumber' WHERE accountNum='$user'";
        try {
            $conn->query($omtssql);

            $conn->query($cellphonesql);
            $conn->query($homephonesql);
            $conn->close();
        }catch(Exception $e){
            echo "error in database.php",$e->getMessage(),"\n";
        }
        ?>
       <center>
        <?php foreach($_REQUEST as $formName  => $formValue){ ?>
            <p><?php echo $formName;?> : <?php echo prepareFormData($formValue); ?></p>
        <?php
            }

    }

}
?></center>

<div class="w3-display-bottomleft w3-padding-large">
    <h4><center><a href="./action.php" target="_blank">Return to main page</a></center></h4>
</div>
</body>
</html>
