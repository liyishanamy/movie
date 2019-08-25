
<html>
<head>
    <title>Select</title>

    <style type="text/css">
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif

        }
        .imgtest{margin:10px 5px;
            overflow:hidden;}
        .list_ul figcaption p{
            font-size:12px;
            color:#aaa;
        }
        .imgtest figure div{

            display:block;
            margin:5px auto;
            width:200px;
            height:200px;
            border-radius:100px;
            border:2px solid #fff;
            overflow:hidden;
            -webkit-box-shadow:0 0 3px #ccc;
            box-shadow:0 0 3px #ccc;
        }
        .bgimg {
            background-image: url("./ya.jpg");
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
        .imgtest img{width:100%;
            min-height:100%; text-align:center;}

        .button {
            background-color: #000000; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }


    </style>
</head>
<body >
<div class="bgimg">
    <div class="imgtest">
        <div class="container">
            <figure>
                <br><br><br><br>
                <div >
                    <img src="./timg.jpg" align="middle"/>
                </div>
                <figcaption><center><button class="button"><a href="./login.php" class="button">User</a></button></center></figcaption>
            </figure>
            <br><br>
            <figure>

                <div >
                    <img src="./timg1.jpg" align="middle"/>
                </div>
                <figcaption><center><button class="button"> <a href="./administratorLogin.php" class="button">Admin</a></button></center></figcaption>
            </figure>




        </div>

    </div>
</div>
</body>
</html>