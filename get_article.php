<html>
<head>
    <link type="text/css" rel="stylesheet" href="blogstyle.css"/>
    <title>jessica watches too much tv</title>
</head>
<body>
    <h3>jessica watches too much tv</h3>

<?php

include("crudfunctions.php");

$id = $_GET['id'];
$article = get_article($id);
print_article($article);

?>

<p class="home"><a href="blogindex.php">Back to home</a>

</body>
</html>