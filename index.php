<?php
include("functions.php");
?>

<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--"shrink-to-fit=no" can be added below after "initial scale=1" for Safari 9.0 users to override behaviour that scales down the page-->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>tpj blog</title>
   <!-- Bootstrap 4 CDN link -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <!-- custom css   -->
   <link rel="stylesheet" href="CSS/main.css">
   
</head>

<body>

<nav class="navbar navbar-light navbar-fixed-top">
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
                <a class="nav-link" href="#">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="glyphicon glyphicon-search"><input type="text" placeholder="Search" />
            </li>
        </ul>
    </div>
</nav>

<!--<div>-->
<!--padding-top-1 rem = p-t-1 -->
<!--    <div class="container-fluid p-t-1 bg">-->
<!--        <div class="row">-->
<!--            <div class="collapse" id="exCollapsingNavbar">-->
<!--                <div class="p-a-1">-->
<!--                    <a href="index.php">TPJ</a>-->
<!--                        <ul class="nav navbar-nav">-->
<!--                            <li class="active"><a href="index.php">Home</a></li>-->
<!--                            <li><a href="#">blogs</a></li>-->
<!--                            <li><a href="#">reports</a></li>-->
<!--                            <li><a href="#">sign-up</a></li>-->
<!--                            <li><span class="glyphicon glyphicon-search"><input type="text" placeholder="Search" /></li>-->
<!--                            <li><a href="#">about</a></li>-->
<!--                            <li><a href="#">support us</a></li>-->
<!--                            <li><a href="#">contact</a></li>-->
<!--                        </ul>-->
<!--<!--                    <h4>Menu</h4>-->
<!--<!--                    <span class="text-muted">Toggleabled crap here. Slide? </span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <nav class="navbar navbar-light">-->
<!--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">-->
<!--                    &#9776;-->
<!--                </button>-->
<!--            </nav>-->
<!--            </div>-->
<!--        </div>-->
<!--</div>-->

<!--   <div class="container">-->
<!--      <div class="navbar navbar-inverted">-->
<!--         <div class="container-fluid">-->
<!--            <div class="navbar-header">-->
<!--               <a class="navbar-brand" href="index.php">TPJ</a>-->
<!--            </div>-->
<!--            <ul class="nav navbar-nav">-->
<!--               <li class="active"><a href="index.php">Home</a></li>-->
<!--               <li><a href="#">blogs</a></li>-->
<!--               <li><a href="#">reports</a></li>-->
<!--               <li><a href="#">sign-up</a></li>-->
<!--               <li><span class="glyphicon glyphicon-search"><input type="text" placeholder="Search" /></li>-->
<!--               <li><a href="#">about</a></li>-->
<!--               <li><a href="#">support us</a></li>-->
<!--               <li><a href="#">contact</a></li>-->
<!--            </ul>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<div style="padding-top: 10rem">
      <h3>TPJ blog</h3>

      <div>
         <ul class="nav">
              <li class="sort-swap"><a href="index.php" title="sort by...">sort by</a>
                  <ul class="dropdown">
                      <li><a href="index.php?sort=id ASC">sort by date</a></li>
                      <li><a href="index.php?sort=title ASC">sort by show</a></li>
                  </ul>
              </li>
              <li class="newpost-swap"><a href="post_article.php" title="post new article">new post</a></li>
          </ul>
      </div>
    </div>


      <div id = "content">
          <?php
      
          if (isset($_GET['sort'])) {
              $sort = $_GET['sort'];
              print_all_articles($sort);
          } else {
              print_all_articles();
          }
      
          ?>
      
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
