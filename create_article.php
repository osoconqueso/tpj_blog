<head>
    <link type="text/css" rel="stylesheet" href="blogstyle.css"/>
</head>

<?php

include("crudfunctions.php");

if ($db) {
    $content = $_POST['content'];
    $title = $_POST['title'];
    $img_url = $_POST['img_url'];
    $table_name = "blogposts";
    create_article($table_name, $title, $img_url, $content);
} else {
    ?>
    <p>Failed to connect to database!</p>
    <?php
}

?>

<script>
    document.location="blogindex.php";
</script>
