<?php include_once "./helper.php"?>

<?php
$userAccount=$_POST['account'];
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
?>
<html>
<link rel="stylesheet" type="text/css" href="./signupStyle.css">
<body>

<?php
//if(isset($_POST['account'])&&isset($_POST['password'])){
if (isset($_POST['register'])){
    $userAccount=$_POST['account'];
    $userPassword = $_POST['password'];
    $query = "SELECT * FROM omtscustomer WHERE accountNum = '$userAccount'";
    $sql = mysqli_query($conn,$query);
    if (mysqli_num_rows($sql)>0){?>
        <p id="exist"><center><h1><?php echo $userFirstname;?><b><br> Account number has already existed!<br>Please enter a new one!</h1> </center></p>
        <?php
    }
    else{
        $omstsql="INSERT INTO omtscustomer(accountNum,password,Fname,Lname,street,city,postalCode,email,creditCard,expireDate)
         VALUES ('$userAccount','$userPassword','$userFirstname','$userLastname','$userStreet','$userCity','$userZipcode','$userEmail','$userCreditnumber','$userExpiredate')";
        $cellphonesql ="INSERT INTO phonenumber(accountNum,C_PhoneNumber)
        VALUES ('$userAccount','$userCellphone')";
        $homephonesql ="INSERT INTO phonenumber(accountNum,C_PhoneNumber)
        VALUES ('$userAccount','$userHomenumber')";
        try {
            // $conn->query($omstsql);
            if($conn->query($omstsql)===TRUE){
                echo "succuss";
            }
            else{
                echo $conn->error;
            }
            $conn->query($cellphonesql);
            $conn->query($homephonesql);
            $conn->close();
        }catch(Exception $e){
            echo "error in database.php",$e->getMessage(),"\n";
        }
        ?>

            <p class="temp">
                <?php

                echo 'YOU HAVE SUBMITTED THE APPLICATION!!! ' . $userFirstname . '!';
                ?>
            </p>
            <?php foreach($_REQUEST as $formName  => $formValue){ ?>
                <p class="temp"><?php echo $formName;?> : <?php echo prepareFormData($formValue); ?></p>
                <?php
            }

            }

            }?>



</body>
<center><p><a href="./action.php" class="w3-hover-text-green">Switch to Customer View </a></p></center>
</html>

