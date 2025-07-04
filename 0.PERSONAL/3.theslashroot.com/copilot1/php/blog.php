
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - My Website</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to My Blog</h1>
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="demo.php">Demo</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Blog Posts</h2>
            <p>This is the blog section of my website.</p>
            <?php
            // Sample PHP code to display blog posts
            $posts = [
                "Post 1" => "This is the content of post 1.",
                "Post 2" => "This is the content of post 2."
            ];
            foreach ($posts as $title => $content) {
                echo "<h3>$title</h3>";
                echo "<p>$content</p>";
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 My Website</p>
    </footer>
</body>
</html>