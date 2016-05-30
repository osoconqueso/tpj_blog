<?php
include("functions.php");
?>

<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--    <link type="text/css" rel="stylesheet" href="blogstyle.css"/>-->
   <title>tpj blog</title>
   <link rel="stylesheet" type="text/css" href="main.css">
   
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css" integrity="sha384-XXXXXXXX" crossorigin="anonymous">

   
   
   
</head>

<body>
   <div class="container">
      <div class="navbar navbar-inverted">
         <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="index.php">TPJ</a>
            </div>
            <ul class="nav navbar-nav">
               <li class="active"><a href="index.php">Home</a></li>
               <li><a href="#">blogs</a></li>
               <li><a href="#">reports</a></li>
               <li><a href="#">sign-up</a></li>
               <li><span class="glyphicon glyphicon-search"><input type="text" placeholder="Search" /></li>
               <li><a href="#">about</a></li>
               <li><a href="#">support us</a></li>
               <li><a href="#">contact</a></li>
            </ul>
         </div>
      </div>
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
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
   
   <!-- Latest compiled JavaScript -->
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
   <!--Bootstrap JavaScript. Unsure of use-->
   <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js" integrity="sha384-XXXXXXXX" crossorigin="anonymous"></script>
</body>
</html>
