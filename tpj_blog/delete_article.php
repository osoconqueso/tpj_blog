<head>
    <link type="text/css" rel="stylesheet" href="blogstyle.css"/>
</head>

<?php

include("crudfunctions.php");

$id = $_GET['id'];
delete_article($id);

header("Location: http://10.10.10.60/website/blog/blogindex.php");

?>

