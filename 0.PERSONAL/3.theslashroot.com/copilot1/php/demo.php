<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo - My Website</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to My Demo Section</h1>
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
            <h2>Demo Templates</h2>
            <p>This is the demo section of my website.</p>
            <?php
            // Sample PHP code to display demo templates
            $templates = [
                "Template 1" => "Description of template 1.",
                "Template 2" => "Description of template 2."
            ];
            foreach ($templates as $title => $description) {
                echo "<h3>$title</h3>";
                echo "<p>$description</p>";
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 My Website</p>
    </footer>
</body>
</html>
