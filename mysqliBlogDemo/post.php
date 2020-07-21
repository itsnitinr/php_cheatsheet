<?php

    require("config/config.php");
    require("config/db.php");

    // Check for submit
    if (isset($_POST["delete"])) {
        $delete_id = mysqli_real_escape_string($conn, $_POST["delete_id"]);

        $query = "DELETE FROM posts WHERE id = {$delete_id}";
        
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
    <h1 class="my-3"><?php echo $post["title"]; ?></h1>
    <small>Created on <?php echo $post["created_at"]; ?> by <?php echo $post["author"]; ?></small>
    <p><?php echo $post["body"]; ?></p>
    <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>">Go Back</a>
    <hr>
    <form class="float-right" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="hidden" name="delete_id" value="<?php echo $post["id"]; ?>">
        <input type="submit" name="delete" value="Delete" class="btn btn-danger">
    </form>
    <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post["id"]; ?>">Edit</a>
<?php include("includes/footer.php"); ?>