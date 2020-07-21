<?php

    require("config/config.php");
    require("config/db.php");

    // Check for submit
    if (isset($_POST["submit"])) {
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $body = mysqli_real_escape_string($conn, $_POST["body"]);
        $author = mysqli_real_escape_string($conn, $_POST["author"]);

        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

        if (mysqli_query($conn, $query)) {
            header("Location: ".ROOT_URL);
        } else {
            echo "ERROR: ".mysqli_error($conn);
        }
    }

?>

<?php include("includes/header.php"); ?>
    <h1 class="mt-5">Add Post</h1>
    <form method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">
    </form>
<?php include("includes/footer.php"); ?>