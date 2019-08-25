
<?php session_start();?>
<?php
// connect to the database
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
// Create connection
//$conn = new mysqli($servername,$username,$password,$dbname);
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>


<?php if(empty($_SESSION)){session_start();} ?>
<?php
if(isset($_SESSION['uname'])) {//if logged in,then go to home page
    header("Location:./action.php");
}

if(isset($_GET['logout'])){// log out then clear the session
    $_SESSION['uname']=NULL;
    session_destroy();
}

//if(!isset($_SESSION['uname'])) {//if not logged in
  //  header("Location:./login.php");
//}
if (isset($_POST['uname']) && isset($_POST['psw']) && isset($_POST['submit'])) {
    $userAccount = $_POST['uname'];
    $Password = $_POST['psw'];
        //$userName=$_POST['firstname'];
    $query = "SELECT * FROM omtscustomer WHERE accountNum = '$userAccount'";
    $getPassword = "SELECT password FROM omtscustomer WHERE accountNum = '$userAccount'";
    $sql = mysqli_query($conn, $query);
    $userPassword = mysqli_query($conn, $getPassword);
    $mysqli_row = $userPassword->fetch_assoc();
    $another_row = $sql->fetch_assoc();
    if (mysqli_num_rows($sql) === 1) {// account exist
        if ($mysqli_row["password"] == $Password) {


                // $message = "log in successfully!";
            $userName = $another_row["Fname"];
            //$_SESSION['name'] = $userName;
            //echo "<script language='javascript'>alert('log in successfully!')</script>";
            $_SESSION['uname'] = $userAccount;
            $_SESSION['message'] = "WELCOME " . $userName;
            $home_url = './action.php';
            header('Location:'.$home_url);
        }//password match
        else {
            $_SESSION['error'] = "Password is incorrect!";
            $home_url = './login.php';
            header('Location:'.$home_url);
            //echo "<script language='javascript'>alert('password is incorrect!')</script>";
        } //password does not match
    } else { //not exist
            // $name_error = "the account does not exist";
        $_SESSION['error'] = "The account does not exist";
        $home_url = './login.php';
        header('Location:'.$home_url);
        //echo "<script language='javascript'>alert('the account does not exist')</script>";
    }
}

?>

