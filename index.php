<?php
//include("functions.php");
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--"shrink-to-fit=no" for Safari 9.0 users to override behaviour that scales down the page-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>tpj blog</title>
    <!-- Bootstrap 4 CDN link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <!-- custom css   -->
    <link rel="stylesheet" href="CSS/main.css">
    <script src="js/tpj.js" type="text/javascript" ></script>

</head>

<body onload="colorFade()">

<nav class="navbar navbar-light navbar-fixed-top" id="topnav">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#tpjNavbar">
        &#9776;

    </button>
    <a class="navbar-brand" href="#">TPJ(logo)</a>
    <div class="collapse navbar-toggleable-xs" id="tpjNavbar">
        <ul class="nav navbar-nav pull-md-right"> <!--pull to right medium and lgr screens-->
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><input class="search" type="text" placeholder="Keyword" />
            </li>
        </ul>
    </div>
</nav>

<!--grayscale image-->
<div id="splishbottom">
    <!-- color image -->
    <div id="splishtop">
        <div id="splish-cap">
            <h1>Texans for Public Justice</h1>
            <p id="signup-btn">
                <a href="" class="btn btn-md btn-info" style="display: inline">Sign up</a>
            </p>
            <div class="input-group" id="emailsignup">
                <input type="text" class="form-control" placeholder="Email">
                <span class="input-group-btn">
                    <button class="btn btn-info" type="button">Sign up!</button>
                </span>

            </div>
        </div>
    </div>
</div>

<section id="homeblogs">
    <p class="text-xs-center downward">&#x25bd; &#x25bd; &#x25bd;</p>


    <!--  container-fluid is for full width  container, spanning entire viewport width  -->
    <div class="container-fluid">
        <div class="row">
            <div class="feature-content">
                <h3>TPJ blog</h3>
                <div class="dropdown closed">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        sort articles by
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="index.php?sort=id ASC">sort by date</a>
                        <a class="dropdown-item" href="index.php?sort=title ASC">sort by show</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h5>
        Slap owner's face at 5am until human fills food dish lie on your belly and purr when you are asleep
    </h5>
    <p>

        Blogs here. Tap/Click to expand.<br>
    </p>

</section>
<footer>
    Ignore the squirrels, you'll never catch them anyway. Eat a plant, kill a hand.
</footer>





<div id = "content">
    <!--    --><?php
    //
    //    if (isset($_GET['sort'])) {
    //        $sort = $_GET['sort'];
    //        print_all_articles($sort);
    //    } else {
    //        print_all_articles();
    //    }
    //
    //    ?>

</div>
<!--<div>-->
<!--    <p>Color palette brought to you by <a href="http://pokepalettes.com/#geodude">Geodude</a></p>-->
<!--    <p>Summaries from <a href="http://imdb.com">IMDB</a></p>-->
<!--</div>-->
</div>
<!-- jQuery library followed by Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>




</body>
</html>
