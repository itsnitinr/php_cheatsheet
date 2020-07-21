<?php

    require("config/config.php");
    require("config/db.php");

    // Fetching all posts
    $query = "SELECT * FROM posts ORDER BY created_at DESC ";
    $result = mysqli_query($conn, $query);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

?>

<?php include("includes/header.php"); ?>
    <h1 class="mx-5 my-3">Posts</h1>
    <?php foreach($posts as $post): ?>
        <div class="well m-5">
            <h3><?php echo $post["title"]; ?></h3>
            <small>Created on <?php echo $post["created_at"]; ?> by <?php echo $post["author"]; ?></small>
            <p><?php echo $post["body"]; ?></p>
            <a class="btn btn-primary" href="post.php?id=<?php echo $post["id"]; ?>">Read More</a>
        </div>
    <?php endforeach; ?>
<?php include("includes/footer.php"); ?>