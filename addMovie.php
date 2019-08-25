<!DOCTYPE html>


<html>

<link rel="stylesheet" type="text/css" href="../signupStyle.css">
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
                <form action="./addNewmovie.php"  method="POST">
                    <div class="input">
                        <label for="title">movie title</label> <input type="text" name="title" id="title"  size="30" maxlength="100"  required/>
                        <span class="error">*</span>
                    </div>

                    <div class="input">
                        <label for="runningtime">running time</label> <input type="int" name="runningtime" id="runningtime" placeholder="your name is.." size="30" maxlength="100"  required/>
                        <span class="error">*</span>
                    </div>



                    <div class="input">
                        <label for="rating">rating</label> <input type="text" name="rating" id="rating"  size="30" maxlength="100" required/>
                        <span class="error">*</span>
                    </div>

                    <div class="input">
                        <label for="plotSynopsis">plotSynopsis</label><input type="text" name="plot" id="city"  size="30" maxlength="100" required/>
                        <span class="error">*</span>
                    </div>

                    <div class="input">
                        <label for="startDate">startDate</label><input type="date"  name="startDate"  id="zipcode" title="Five digit zip code" required/>
                    </div>

                    <div class="input">
                        <label for="endDate">endDate:</label> <input type="date" name="endDate" id="endDate" placeholder="your email is.." size="30" required/>
                        <span class="error" id="errorMessage">*</span>
                    </div>


                    <div class="input">
                        <label for="state">movie state</label><input type="tel" name="state" id="state"  required/>
                    </div>

                    <div class="input">
                        <label for="state">img link</label><input type="text" name="link" id="link"  required/>
                    </div>




                    <div id="sub">
                        <input type="submit" name="register" value="Submit" />
                    </div>
                    <br><br><br>

                </form>
                </fieldset>
            </div>


        </section>
    </div> <!-- .columnInnerContainer -->
</article>



</body>

</html>