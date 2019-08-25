<?php session_start();?>



<html>
<head>
    <title>Select</title>

    <style type="text/css">
        body,h1,h2,h3,h4,h5,h6 {

            font-family: "Raleway", Arial, Helvetica, sans-serif;
            color:#686868;

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
            background-image: url("./yaya.png");
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
        .imgtest img{width:100%;
            min-height:100%; text-align:center;}

        .button {
            background-color: #686868;
            border: none;
            color: white;
            padding: 25px 52px;
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

            <figcaption><center><b><h3><?php echo "User ID".$_SESSION['uname'];?></h3></b></center></figcaption>
            <br>
            <figcaption><center><button class="button"><a href="./changeAccountinfo.php" class="w3-bar-item w3-button w3-right w3-black w3-mobile">Edit Account Info</a></button></center></figcaption>
            <figcaption><center><button class="button"><a href="./ticket.php" class="w3-bar-item w3-button w3-right w3-black w3-mobile">&nbsp &nbsp View Ticket &nbsp &nbsp</a></button></center></figcaption>


        </div>

    </div>
</div>
</body>
</html>