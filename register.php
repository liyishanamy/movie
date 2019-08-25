<!DOCTYPE html>


<html>

<head>
    <meta charset="UTF-8">
    <title>Sign Up Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">

</head>

<style>
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }
    body {
        padding: 1em;
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 15px;
        color: #000000;
        background-image:url("./stars.png");
        background-repeat: repeat no-repeat;
        background-size:cover;


    }
    h4,h3,h2,h1 {
        color: #000000;
    }
    input,
    input[type="radio"] + label,
    input[type="checkbox"] + label:before,
    select option,
    select {
        width: 100%;
        padding: 1em;
        line-height: 1.4;
        background-color: #f9f9f9;
        border: 1px solid #e5e5e5;
        border-radius: 3px;
        -webkit-transition: 0.35s ease-in-out;
        -moz-transition: 0.35s ease-in-out;
        -o-transition: 0.35s ease-in-out;
        transition: 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
    }
    input:focus {
        outline: 0;
        border-color: #64ac15;
    }
    input:focus + .input-icon i {
        color: #7ed321;
    }
    input:focus + .input-icon:after {
        border-right-color: #7ed321;
    }
    input[type="radio"] {
        display: none;
    }
    input[type="radio"] + label,
    select {
        display: inline-block;
        width: 50%;
        text-align: center;
        float: left;
        border-radius: 0;
    }
    input[type="radio"] + label:first-of-type {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    input[type="radio"] + label:last-of-type {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }
    input[type="radio"] + label i {
        padding-right: 0.4em;
    }
    input[type="radio"]:checked + label,
    input:checked + label:before,
    select:focus,
    select:active {
        background-color: #000000;
        color: #fff;
        border-color: #000000;
    }
    input[type="checkbox"] {
        display: none;
    }
    input[type="checkbox"] + label {
        position: relative;
        display: block;
        padding-left: 1.6em;
    }
    input[type="checkbox"] + label:before {
        position: absolute;
        top: 0.2em;
        left: 0;
        display: block;
        width: 1em;
        height: 1em;
        padding: 0;
        content: "";
    }
    input[type="checkbox"] + label:after {
        position: absolute;
        top: 0.45em;
        left: 0.2em;
        font-size: 0.8em;
        color: #000000;
        opacity: 0;
        font-family: FontAwesome;
        content: "\f00c";
    }
    input:checked + label:after {
        opacity: 1;
    }
    select {
        height: 3.4em;
        line-height: 2;
    }
    select:first-of-type {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    select:last-of-type {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }
    select:focus,
    select:active {
        outline: 0;
    }
    select option {
        background-color: #7ed321;
        color: #fff;
    }
    .input-group {
        margin-bottom: 1em;
        zoom: 1;
    }
    .input-group:before,
    .input-group:after {
        content: "";
        display: table;
    }
    .input-group:after {
        clear: both;
    }
    .input-group-icon {
        position: relative;
    }
    .input-group-icon input {
        padding-left: 4.4em;
    }
    .input-group-icon .input-icon {
        position: absolute;
        top: 0;
        left: 0;
        width: 3.4em;
        height: 3.4em;
        line-height: 3.4em;
        text-align: center;
        pointer-events: none;
    }
    .input-group-icon .input-icon:after {
        position: absolute;
        top: 0.6em;
        bottom: 0.6em;
        left: 3.4em;
        display: block;
        border-right: 1px solid #e5e5e5;
        content: "";
        -webkit-transition: 0.35s ease-in-out;
        -moz-transition: 0.35s ease-in-out;
        -o-transition: 0.35s ease-in-out;
        transition: 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
    }
    .input-group-icon .input-icon i {
        -webkit-transition: 0.35s ease-in-out;
        -moz-transition: 0.35s ease-in-out;
        -o-transition: 0.35s ease-in-out;
        transition: 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
    }
    .container {
        max-width: 38em;
        padding: 1em 3em 2em 3em;
        margin: 2em auto;
        background-color: #fff;
        opacity: 0.8;
        border-radius: 4.2px;
        box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
    }
    .input {
        zoom: 1;
    }
    .input:before,
    .input:after {
        content: "";
        display: table;
    }
    .input:after {
        clear: both;
    }
    .col-half {
        padding-right: 10px;
        float: left;
        width: 50%;
    }
    .col-half:last-of-type {
        padding-right: 0;
    }
    .col-third {
        padding-right: 10px;
        float: left;
        width: 33.33333333%;
    }
    .col-third:last-of-type {
        padding-right: 0;
    }
    @media only screen and (max-width: 540px) {
        .col-half {
            width: 100%;
            padding-right: 0;
        }
    }
    .error{
        color:red;
    }
    #submitButton{
        height:50px;
        opacity: 0.8;
        background-color:black;
    }
</style>



<body>
<!-- Content -->
<article>
    <div class="container">
        <div class="body"></div>
        <div class="grad"></div>

        <section>

            <div class="login">
                <fieldset id="field">
                    <h1 class="title">Registration</h1>
                    <form action="./database.php" onsubmit="return validateForm()"  method="POST">
                        <h3>Basic Information</h3>
                        <div class="input">
                            <label><i class="fa fa-user"></i>&nbsp&nbspFirst Name</label>                   <span class="error">*</span>
                            <input type="text" name="firstname" id="firstname" placeholder="FirstName" size="30" maxlength="100"  required/>

                        </div>

                        <div class="input">
                            <br>
                            <label><i class="fa fa-user"></i>&nbsp&nbspLast Name</label>
                            <span class="error">*</span>
                            <input type="text" name="lastname" id="lastname" placeholder="LastName" size="30" maxlength="100"  required/>

                        </div>


                        <div class="input">
                            <br>
                            <label><i class="fa fa-bank"></i>&nbsp&nbspStreet</label>
                            <span class="error">*</span>
                            <input type="text" name="street" id="street"  size="30" placeholder="Street" maxlength="100" required/>

                        </div>

                        <div class="input">
                            <br>
                            <label><i class="fa fa-bank"></i>&nbsp&nbspCity</label>
                            <span class="error">*</span>
                            <input type="text" name="city" id="city"  size="30" placeholder="City" maxlength="100" required/>

                        </div>

                        <div class="input">
                            <br>
                            <label><i class="fa fa-bank"></i>&nbsp&nbspZipCode</label>
                            <span class="error">*</span>
                            <input type="text"  name="zipcode" pattern="[A-Z][0-9][A-Z]-[0-9][A-Z][0-9]"  placeholder="Zipcode" id="zipcode" title="Five digit zip code" required/>
                        </div>

                        <div class="input">
                            <br>
                            <label><i class="fa fa-envelope"></i>&nbsp&nbspEmail</label>
                            <span class="error">*</span>
                            <input type="email" name="email" id="email" placeholder="Email" size="30" required/>

                        </div>
                        <br>
                        <h3>Phone Number</h3>
                        <div class="input">
                            <br>
                            <label><i class="fa fa-mobile"></i>&nbsp&nbspHome</label>
                            <span class="error">*</span>
                            <input type="tel" name="hometelephone" id="home_telephone" placeholder="Telephone" required/>
                        </div>

                        <div class="input">
                            <br>
                            <label><i class="fa fa-mobile"></i>&nbsp&nbspCellphone</label>
                            <span class="error">*</span>
                            <input type="tel" name="cellphone" id="cellphone" placeholder="Cellphone" required/>
                        </div>
                        <br>
                        <h3>Account Information</h3>
                        <div class="input">
                            <br>
                            <label><i class="fa fa-list-alt"></i>&nbsp&nbspAccount</label>
                            <span class="error">*</span>
                            <input type="text" name="account" id="account" placeholder="Account" maxlength="20"  required/>

                        </div>
                        <div class="input">
                            <br>
                            <label><i class="fa fa-list-alt"></i>&nbsp&nbspPassword</label>
                            <span class="error">*</span>
                            <input type="password" name="password" id="password" placeholder="Password" maxlength="20"  required/>

                        </div>

                        <div class="input">
                            <br>
                            <label><i class="fa fa-list-alt"></i>&nbsp&nbspCredit Card</label>
                            <span class="error">*</span>
                            <input type="text" id="ccnum" name="cardnumber" maxlength=16  placeholder="Credit-card: 1111222233334444" required/>

                        </div>

                        <div class="input">
                            <br>
                            <label><i class="fa fa-list-alt"></i>&nbsp&nbspExpire Date</label>
                            <span class="error">*</span>
                            <input type="date" id="expire" name="expire" placeholder="MM/DD/YYYY" required/>
                            <br><br>
                        </div>



                        <div id="sub">

                            <input type="submit" name="register" value="Submit" id="submitButton" style="color:white"/>
                        </div>
                        <p>NOTES:  Red Star Means Required Field</p>
                    </form>
                </fieldset>
            </div>

        </section>
    </div> <!-- .columnInnerContainer -->
</article>



</body>

</html>