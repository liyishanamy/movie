<?php session_start(); ?>
<html>
<link rel="stylesheet" type="text/css" href="./loginStyle.css">
<body>
<div class="body"></div>
<div class="grad"></div>
<form action="./adminCheck.php" method="POST">
    <div class="login">

        <input type="text" placeholder="Enter accountNumber" name="admin" required>

        <input type="password" placeholder="Enter Password" name="adminpsw" required>


    <p><?php if(isset($_SESSION['error1'])){
        echo $_SESSION['error1']; }?></p>
        <input type="submit" name="submit" value="Submit" />

    </div>


</form>
</body>
</html>