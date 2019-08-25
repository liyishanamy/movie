<?php
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="theatrecomplex";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }?>
<html>




<link rel="stylesheet" type="text/css" href="../signupStyle.css">



<body>
<!-- Content -->
<article>
    <?php


    $chosen=$_POST['theatre'];
    $_SESSION['chosen']=$chosen;
    //echo $chosen;
    $othersql="select * from theatreComplex WHERE theatreName='$chosen'";
    $result=$conn->query($othersql);
    //echo $conn->error;
    $otherrow=$result->fetch_assoc();

    $street=$otherrow['Tstreet'];
    $_SESSION['street']=$street;

    $city= $otherrow['Tcity'];
    $_SESSION['city']=$city;

    $postCode=$otherrow['TpostalCode'];
    $_SESSION['postalCode']=$postCode;

    $phone=$otherrow['Tphone'];
    $_SESSION['phone']=$phone;



    ?>
    <div class="columnInnerContainer">
        <div class="body"></div>
        <div class="grad"></div>

        <section>

            <div class="login">
                <fieldset id="field">
                    <h1 class="title"><?php echo $_SESSION['chosen'];?></h1>
                    <form action="./insertShowing.php"  method="POST">
                        <div class="input">
                            <label for="street">street</label> <input type="text" name="street" id="street"  value=<?php echo $street;?> size="30" maxlength="100" required/>
                            <span class="error">*</span>
                        </div>

                        <div class="input">
                            <label for="city">city</label><input type="text" name="city" id="city"  value=<?php echo $city;?> size="30" maxlength="100" required/>
                            <span class="error">*</span>
                        </div>

                        <div class="input">
                            <label for="zipcode">ZIP Code</label><input type="text"  name="zipcode" id="zipcode" value=<?php echo $postCode;?> pattern="[A-Z][0-9][A-Z]-[0-9][A-Z][0-9]"  title="Five digit zip code" required/>
                        </div>


                        <div class="input">
                            <label for="phone">phone</label><input type="tel" name="phone" id="phone" value=<?php echo $phone;?> required/>
                        </div>




                            <input type="submit" name="register" value="Submit" />
                        <br><br>


                    </form>
                </fieldset>
            </div>

        </section>
    </div> <!-- .columnInnerContainer -->
</article>



</body>




</html>