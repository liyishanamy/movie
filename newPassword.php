<?php session_start(); ?>
<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="theatrecomplex";
 $newpassword1 = $_POST['psw1'];
 $newpassword2=$_POST['psw2'];
 $userAccount = $_SESSION['account'];

 $userEmail = $_SESSION['email'];
 $conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
 if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
 }


 if (isset($_POST['submit']) && ($newpassword1 ==$newpassword2)&&$newpassword1!=NULL &&$newpassword2!=NULL ){?>
     <?php //echo "password  changed successfully!";
     $_SESSION['error'] = "Password  changed successfully!";
     $query = "UPDATE omtscustomer SET password='$newpassword1' WHERE email='$userEmail' AND accountNum ='$userAccount'";
     $conn->query($query);
     $home_url = './login.php';
     header('Location:'.$home_url);



    }
if(isset($_POST['submit']) && ($newpassword1 !=$newpassword2)&&$newpassword1!=NULL &&$newpassword2!=NULL){//new password not the same
?><?php
    $_SESSION['error'] = "Please confirm your new password!";
    $home_url = './login.php';
    header('Location:'.$home_url);



            }
    ?>
<?php
    $_SESSION['account']= NULL;
    $_SESSION['email'] =NULL;
    //session_destroy();
    ?>
