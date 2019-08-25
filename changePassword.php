<?php session_start();?>
<link rel="stylesheet" type="text/css" href="./loginStyle.css">
<html>
<body>
<div class="body"></div>
<div class="grad"></div>
<form action="./checkEmail.php" method="POST">
<div class="login"">

        <input type="text" placeholder="Enter accountNumber" name="account" required>

        <input type="text" placeholder="Enter email" name="email" required>
    <?php if(isset($_SESSION['another'])){
        echo $_SESSION['another'];
    }
    $_SESSION['another']=NULL;
?>
    <br>
        <input type="submit" name="verify" value="verify" />

</form>
</body>
</html>