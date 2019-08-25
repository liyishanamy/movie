
<?php session_start()?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="theatrecomplex";
$user=$_SESSION['uname'];
// Create connection
//$conn = new mysqli($servername,$username,$password,$dbname);
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql= "SELECT * FROM omtscustomer WHERE accountNum='$user'";
$other="SELECT C_PhoneNumber FROM phonenumber WHERE accountNum='$user'";
$other_sql=$conn->query($other);
$other_row=$other_sql->fetch_row();
$phone1=$other_row[0];
$other_row = $other_sql->fetch_row();
$phone2=$other_row[0];

$result=$conn->query($sql);
$row=$result->fetch_assoc();
$account=$row['accountNum'];
$psw=$row['password'];
$city = $row['city'];
$credit=$row['creditCard'];
$email=$row['email'];
$expire=$row['expireDate'];
$Fname=$row['Fname'];
$Lname=$row['Lname'];
$postCode=$row['postalCode'];
$street=$row['street'];


?>
<html>

<link rel="stylesheet" type="text/css" href="./signupStyle.css">
<head>
    <meta charset="UTF-8">
    <title>Yishan</title>
</head>



<body>
<!-- Content -->
<article>
    <div class="columnInnerContainer">
        <div class="body"></div>
        <div class="grad"></div>

        <section>

            <div class="login">
                <fieldset id="field">
                    <h1 class="title">Registration</h1>
                    <form action="./database2.php"  method="POST">
                        <div class="input">
                            <label for="firstname">First name:</label> <input type="text" name="firstname" id="firstname" value=<?php echo $Fname;?> size="30" maxlength="100"  required/>
                            <span class="error">*</span>
                        </div>

                        <div class="input">
                            <label for="lastname">Last name:</label> <input type="text" name="lastname" id="lastname" value=<?php echo $Lname;?> size="30" maxlength="100"  required/>
                            <span class="error">*</span>
                        </div>


                        <div class="input">
                            <label for="street">Street</label> <input type="text" name="street" value=<?php echo $street;?> id="street"  size="30" maxlength="100" required/>
                            <span class="error">*</span>
                        </div>

                        <div class="input">
                            <label for="city">City</label><input type="text" name="city" id="city"  value=<?php echo $city;?> size="30" maxlength="100" required/>
                            <span class="error">*</span>
                        </div>

                        <div class="input">
                            <label for="zipcode">ZIP Code</label><input type="text"  name="zipcode" value=<?php echo $postCode;?> pattern="[A-Z][0-9][A-Z]-[0-9][A-Z][0-9]" id="zipcode" title="Five digit zip code" required/>
                        </div>

                        <div class="input">
                            <label for="email">Email:</label> <input type="email" name="email" id="email" value=<?php echo $email;?> size="30" required/>
                            <span class="error" id="errorMessage">*</span>
                        </div>


                        <div class="input">
                            <label for="hometelephone">Home Phone</label><input type="tel" name="hometelephone" value=<?php echo $phone1;?> id="home_telephone" placeholder="your home telephone number is.." required/>
                        </div>

                        <div class="input">
                            <label for="cellphone">Cellphone</label><input type="tel" name="cellphone" value=<?php echo $phone2;?> id="cellphone" placeholder="your home telephone number is.." required/>
                        </div>




                        <div class="input">
                            <label for="password">Password:</label> <input type="password" name="password" id="password" value=<?php echo $psw;?>  maxlength="20"  required/>
                            <span class="error">*</span>
                        </div>

                        <div class="input">
                            <label for="ccnum">Creditcard</label>
                            <input type="text" id="ccnum" name="cardnumber" maxlength=16 , value=<?php echo $credit;?> required/>
                            <span class="error">*</span>
                        </div>

                        <div class="input">
                            <label for="expire">Expire date</label>
                            <input type="date" id="expire" name="expire" value=<?php echo $expire;?> required/>
                            <span class="error">*</span>
                        </div>
                        <br>
                        <div id="sub">

                            <input type="submit" name="register" value="Submit" />
                        </div>
                        <br><br><br><br><br>

                    </form>
                </fieldset>
            </div>

        </section>
    </div> <!-- .columnInnerContainer -->
</article>



</body>




