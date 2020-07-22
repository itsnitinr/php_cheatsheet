<?php

    require("config/config.php");
    require("config/db.php");

    // Check for submit
    if (isset($_POST["submit"])) {
        $update_id = mysqli_real_escape_string($conn, $_POST["update_id"]);
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $body = mysqli_real_escape_string($conn, $_POST["body"]);
        $author = mysqli_real_escape_string($conn, $_POST["author"]);

        $query = "UPDATE posts SET title='$title', author='$author', body='$body' WHERE id = {$update_id}";
        if (mysqli_query($conn, $query)) {
            header("Location: ".ROOT_URL);
        } else {
            echo "ERROR: ".mysqli_error($conn);
        }
    }

    // Fetch specific post using id
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $post = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);

?>

<?php include("includes/header.php"); ?>
    <h1 class="mt-5">Edit Post</h1>
    <form method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $post["title"]; ?>">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="<?php echo $post["author"]; ?>">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"><?php echo $post["body"]; ?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post["id"]; ?>">
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
    </form>
<?php include("includes/footer.php"); ?>