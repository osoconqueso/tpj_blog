<head>
    <link type="text/css" rel="stylesheet" href="blogstyle.css"/>
</head>

<?php

include("crudfunctions.php");

if (isset($_GET)) {
    $id = $_GET['id'];

    $article = get_article($id);
}
?>

<html>
<body>
    <div id = "new_article">
        <form action="update_article.php" method="post">
            Title: <input type="text" name="title" value="<?= $article['title'] ?>" />
            <br>
            Image URL: <input type="text" name="img_url" value="<?= $article['img_url'] ?>" />
            <br>
            Author: <input type="text" name="author" value="<?= $article['author'] ?>" />
            Content: <textarea cols="40" rows="15" name="content"><?= $article['content'] ?></textarea>
            <br>
            <input type="submit" name="submit" value="Post" />
            <input type="hidden" name="id" value="<?= $id ?>" />
    </div>
    <p class="cancel"><a href="blogindex.php">Cancel</a>
</body>
</html>
