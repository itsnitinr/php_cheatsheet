<?php

    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DB_NAME", "pdoposts");

    // Set DSN (Data Source Name)
    $dsn = "mysql:host=" . HOST . ";dbname=" . DB_NAME;

    // Create PDO instance
    $pdo = new PDO($dsn, USER, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // PDO query
    $stmt = $pdo->query("SELECT * FROM posts");

    // Fetching as associative array
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row["title"] . "<br>";
    }

    // Fetching as object
    while ($row = $stmt->fetch()) {
        echo $row->title . "<br>";
    }

    // Prepared statements

    # Unsafe method
    $author = "Nitin";
    $sql = "SELECT * FROM posts WHERE author = $author";

    # Safe method

    // Fetch multiple posts
    // Positional params
    $author = "Nitin";
    $sql = "SELECT * FROM posts WHERE author = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$author]);
    $posts = $stmt->fetchAll();

    foreach ($posts as $post) {
        echo $post->title . "<br>";
    }

    // Fetch multiple posts
    // Named params
    $author = "Nitin";
    $is_published = true;
    $sql = "SELECT * FROM posts WHERE author = :author && is_published = :is_published";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["author" => $author, "is_published" => $is_published]);
    $posts = $stmt->fetchAll();

    // Fetch single post
    $id = 1;
    $sql = "SELECT * FROM posts WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["id" => $id]);
    $post = $stmt->fetch();
    echo $post->body . "<br>";

    // Get row count
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE author = ?");
    $stmt->execute([$author]);
    $postCount = $stmt->rowCount();
    echo $postCount . "<br>";

    // Insert data
    $title = "Some random title";
    $body = "Some random body";
    $author = "Nitin";

    $sql = "INSERT into posts(title, body, author) VALUES(:title, :body, :author)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["title" => $title, "body" => $body, "author" => $author]);
    echo "Post added<br>";

    // Update data
    $id = 2;
    $body = "This is the updated post";

    $sql = "UPDATE posts SET body = :body WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["body" => $body]);
    echo "Post updated<br>";

    // Delete data
    $id = 3;

    $sql = "DELETE FROM posts WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["id" => $id]);
    echo "Post deleted<br>";

    // Search data
    $search = "%post%";
    $sql = "SELECT * FROM posts WHERE title LIKE ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$search]);
    $posts = $stmt->fetchAll();

    foreach ($posts as $post) {
        echo $post->title . "<br>";
    }

    // Limit posts
    $sql = "SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$author, $is_published]);

?>