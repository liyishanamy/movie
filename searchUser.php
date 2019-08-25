<?php session_start();?>
<html>
<link rel="stylesheet" type="text/css" href="../theatreInfo.css">
<div class="body"></div>
<div class="grad"></div>
<fieldset>
<form action="reserveInfo.php" method="POST">
    <div class="input">
        <label for="account">account:</label> <input type="text" name="account" id="account"  maxlength="20"  required/>
        <span class="error">*</span>
        <input type="submit" name="search" value="Search" />
    </div>
</form>
</fieldset>

</html>