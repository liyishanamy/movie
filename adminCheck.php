<?php session_start();?>
<?php
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
if(isset($_SESSION['admin'])) {//if logged in,then go to home page
    header("Location:./action.php");
}

if(isset($_GET['logout'])){// log out then clear the session
    $_SESSION['admin']=NULL;
    session_destroy();
}
if(isset($_POST['admin']) && isset($_POST['adminpsw']) && isset($_POST['submit'])) {
    $adminAccount = $_POST['admin'];
    $adminPsw = $_POST['adminpsw'];
    $query1 = "SELECT * FROM admin WHERE accountNum_A = '$adminAccount'";
    $getPassword1 = "SELECT password FROM admin WHERE password= '$adminPsw'";
    $sql1 = mysqli_query($conn, $query1);
    $userPassword1 = mysqli_query($conn, $getPassword1);
    $mysqli_row1 = $userPassword1->fetch_assoc();
    $another_row1 = $sql1->fetch_assoc();
    if (mysqli_num_rows($sql1) === 1) {// account exist
        if ($mysqli_row1["password"] == $adminPsw) {

            $home_url = './administrator/administrator.php';
            header('Location:' . $home_url);
        }//password match
        else {//psw incorrect
            $_SESSION['error1'] = "password is incorrect! try it again";
            $home_url = './administratorLogin.php';
            header('Location:' . $home_url);
        }
    }
    else{//account not exist
        $_SESSION['error1'] = "the admin account does not exist! try it again";
        $home_url = './administratorLogin.php';
        header('Location:' . $home_url);

    }
}

?>