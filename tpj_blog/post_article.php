<?php
include("crudfunctions.php");
?>

<html>
<head>
    <link type="text/css" rel="stylesheet" href="blogstyle.css"/>
</head>
<body>
    <div id = "new_article">
        <form action="create_article.php" method="post">
            Title: <input type="text" name="title" />
            <br>
            Image URL: <input type="text" name="img_url" />
            <br>
            Content: <textarea cols="40" rows="15" name="content"></textarea>
            <br>
            <input type="submit" name="submit" value="Post" />
    </div>
    <p><a href="blogindex.php">Back to home</a>
</body>
</html>
