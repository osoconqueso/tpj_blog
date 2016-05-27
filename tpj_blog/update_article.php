<head>
    <link type="text/css" rel="stylesheet" href="blogstyle.css"/>
</head>

<?php

include("crudfunctions.php");

if (isset($_POST)) {
    $title = $_POST['title'];
    $img_url = $_POST['img_url'];
    $content = $_POST['content'];
    $id = $_POST['id'];

    edit_article($id, $title, $img_url, $content);
}

header("Location: http://10.10.10.60/website/blog/blogindex.php");
?>
