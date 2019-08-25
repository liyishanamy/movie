
<?php session_start(); ?>
<html>
<link rel="stylesheet" type="text/css" href="./loginStyle.css">
<body>
<div class="body"></div>
<div class="grad"></div>
<form action="./checkPassword.php" method="POST">
    <div class="login">

        <input type="text" placeholder="Enter Account Number" name="uname" required>

        <input type="password" placeholder="Enter Password" name="psw" required>


    <p id="loginUser"><?php if(isset($_SESSION['error'])){
        echo $_SESSION['error']; }
        $_SESSION['error']=NULL;?></p>

        <input type="submit" name="submit" value="Submit" />
        <input type="reset" value="empty"/>
        <span class="psw">Forgot <a href="./changePassword.php">password?</a></span>

    </div>


</form>
</body>
</html>