
<?php session_start();?>
<?php
    $userAccount = $_POST['account'];
    $userEmail = $_POST['email'];
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="theatrecomplex";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }?>

<?php
    $match = "SELECT email,accountNum,password FROM omtscustomer WHERE accountNum = '$userAccount' AND email = '$userEmail'";
    $checkMatching = mysqli_query($conn, $match);
    $_SESSION['account'] = $userAccount;
    $_SESSION['email'] = $userEmail;
    //$data_row = $checkMatching ->fetch_assoc();
    if(mysqli_num_rows($checkMatching) === 1){//valid to change password?>
        <html>
        <link rel="stylesheet" type="text/css" href="./loginStyle.css">
        <body>
        <div class="body"></div>
        <div class="grad"></div>
            <form action="./newPassword.php" method="POST">
                <div class="login">

            <input type="password" placeholder="Enter new Password" name="psw1" required>


            <input type="password" placeholder="Enter new Password again" name="psw2" required>


            <input type="submit" name="submit" value="Submit" /></form>
        </div>
        </body>
        </html>
<?php }
    else{
        $_SESSION['another'] = "Verification fails";
        $home_url = './changePassword.php';
        //$home_url = './changePassword.php';
        header('Location:'.$home_url);

       //$_SESSION['info'] = "verification fails!";
    }
?>