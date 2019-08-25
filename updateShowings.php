<?php session_start();?>

<html>
<link rel="stylesheet" type="text/css" href="../theatreInfo.css">
<body>


<?php
$movie=$_SESSION['changedMovie'];
$variable=$_POST['select'];
$_SESSION['index'] = $variable;
$theatreName=$_SESSION[$variable][0];
$start=$_SESSION[$variable][1];
$seatAvailable=$_SESSION[$variable][2];
$theatreNumber=$_SESSION[$variable][3];?>


<h1 class="title"><?php echo $movie?></h1>
<fieldset>
<form action="./changeShowings.php" method="POST">
    <div class="columnInnerContainer">

    <div class="input">
        <label for="theatre">theatreName</label> <input type="text" name="theatreName" id="theatreName" value=<?php echo '"'.$theatreName.'"';?> size="30" maxlength="100"  required/>
        <span class="error">*</span>
    </div>

    <div class="input">
        <label for="start">startTime</label><input type="time" name="start" id="start"  value=<?php echo $start;?> size="30" maxlength="100" required/>
        <span class="error">*</span>
    </div>

    <div class="input">
        <label for="seatAvailable">seat Available</label><input type="text"  name="seatAvailable"  id="seatAvailable" value=<?php echo $seatAvailable;?> required/>
    </div>

    <div class="input">
        <label for="theatreNumber">theatreNumber:</label> <input type="text" name="theatreNumber" id="theatreNumber" value=<?php echo $theatreNumber;?> size="30" required/>
        <span class="error" id="errorMessage">*</span>
    </div>
    <div id="sub">
        <input type="submit" name="update" value="update" />
    </div>
    </div>
</form>
</fieldset>
</body>
</html>

