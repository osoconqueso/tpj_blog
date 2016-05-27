<?php

$db_name = "";
$db = connect_to_database("127.0.0.1", "root", "root", "$db_name");

function connect_to_database($local_host, $user, $pw, $database) {
    $db = mysqli_connect($local_host, $user, $pw, $database);
    if (!$db) {
        echo "connection error";
    } else {
        return $db;
    }
}

function get_article($id, $table_name) {
    global $db;
    $result = mysqli_query($db, "SELECT * FROM $table_name WHERE id = '$id'");
    return mysqli_fetch_assoc($result);
};

function print_article($article) {
    date_default_timezone_set("America/Chicago")
    ?>
    <article>
        <h1 class="title"><a href="get_article.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a></h1>
        <div class="image"><img src="<?= $article['img_url'] ?>"></div>
        <div class="author">Written by <?= $article['author'] ?></div>
        <div class="content">
            <p><?= $article['content'] ?></p>
        </div>
        <div class="date_and_links">
            <p class="date"><?= date("D, n/j/Y @ g:ia T", strtotime($article['date']))?></p>
            <div class="edit_and_delete">
                <div><a href="edit_article.php?id=<?= $article['id'] ?>" class="edit-swap" title="edit article"></a></div>
                <div><a href="comment.php?id=<?= $article['id'] ?>" class="comment-swap" title="add comment"></a></div>
                <div><a onclick="confirm_delete(<?= $article['id'] ?>)" class="delete-swap" title="delete article"></a></div>
            </div>
        </div>
    </article>
    <?php
}

function get_all_articles($sort="id DESC") {
    $table_name = "";
    global $db;
    if ($db) {
        $result = mysqli_query($db, "SELECT * FROM $table_name ORDER BY $sort");
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        ?>
        <p class="error">Failed to connect to database- can't retrieve articles</p>
        <?php
    }
}

function print_all_articles($sort="id DESC") {
    $rows = get_all_articles($sort);
    foreach ($rows as $row => $field_names) {
        date_default_timezone_set("America/Chicago");
        print_article($field_names);
        ?>
        <br><br>
        <?php
    }
}

function create_article ($table_name, $title, $img_url, $content) {
    global $db;
    $stripped_title = mysqli_real_escape_string($db, $title);
    $stripped_img_url = mysqli_real_escape_string($db, $img_url);
    $stripped_author = mysqli_real_escape_string($db, $author);
    $stripped_content = mysqli_real_escape_string($db, $content);
    mysqli_query($db, "INSERT INTO $table_name (title, img_url, author, content) VALUES ('$stripped_title', '$stripped_img_url', '$stripped_author', '$stripped_content')") or die(mysqli_error($db));
};

?>

<script>
    function confirm_delete($article_id) {
        if (confirm('Are you sure you want to delete this post?')) {
            document.location = "delete_article.php?id="+$article_id;
            return true;
        } else {
            return false;
        }
    }
</script>

<?php

function edit_article($id, $title, $img_url, $content) {
    global $db;
    $stripped_title = mysqli_real_escape_string($db, $title);
    $stripped_content = mysqli_real_escape_string($db, $content);
    $stripped_img_url = mysqli_real_escape_string($db, $img_url);
    $table_name = "blogposts";
    mysqli_query($db, "UPDATE $table_name SET title = '$stripped_title', img_url = '$stripped_img_url', content = '$stripped_content' WHERE id = '$id'");
};

function delete_article($id) {
    $table_name = "";
    global $db;
    mysqli_query($db, "DELETE FROM $table_name WHERE id = $id");
};

