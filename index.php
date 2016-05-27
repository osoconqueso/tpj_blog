<?php
include("functions.php");
?>

<html>
<head>
<!--    <link type="text/css" rel="stylesheet" href="blogstyle.css"/>-->
   <title>tpj blog</title>
   <link rel="stylesheet" type="text/css" href="main.css">
   
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
   
   <!-- Latest compiled JavaScript -->
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

<h3>tpj blog</h3>

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
</body>
</html>
