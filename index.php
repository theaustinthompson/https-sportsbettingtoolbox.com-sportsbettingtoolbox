<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Betting Toolbox</title>
    <meta name="description" content="Your go-to resource for sports betting tips and tools.">
    <meta name="keywords" content="sports, betting, toolbox, tips, tools">
    <meta name="author" content="Austin Thompson">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        window.onload = function() {
            var videoElement = document.getElementById('hero-video');
            var videos = ['video1.mp4', 'video2.mp4', 'video3.mp4', 'video4.mp4'];
            var randomVideo = videos[Math.floor(Math.random() * videos.length)];
            videoElement.src = 'video/' + randomVideo;
        };
    </script>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/BettingToolbox" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com/BettingToolbox" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/BettingToolbox" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <!-- Navigation Menu -->
        <nav>
            <ul class="menu">
                <li><a href="index.php#">Football</a></li>
                <li><a href="index.php#">Basketball</a></li>
                <li><a href="index.php#">Baseball</a></li>
                <li><a href="index.php#">Hockey</a></li>
                <li><a href="index.php#">Fantasy Sports</a></li>
                <li><a href="index.php#">Sports Betting</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <video autoplay muted loop id="hero-video">
            <source src="video/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <!-- Divider Line -->
    <hr class="divider-line">

    <!-- Blog Section -->
    <section class="blog">
        <div class="blog-header">
            <h2>Latest Blog Posts</h2>
        </div>
        <div class="blog-posts">
            <?php
            $blogDirectory = 'blog/';
            $blogFiles = glob($blogDirectory . '*.html');
            foreach ($blogFiles as $file) {
                $content = file_get_contents($file);
                preg_match('/<title>(.*?)<\/title>/', $content, $titleMatches);
                preg_match('/<meta name="subject" content="(.*?)">/', $content, $subjectMatches);
                preg_match('/<meta name="hero-image" content="(.*?)">/', $content, $imageMatches);
                $title = $titleMatches[1];
                $subject = $subjectMatches[1];
                $image = $imageMatches[1];
                $filename = basename($file, '.html');
                echo "<div class='blog-post'>";
                echo "<img src='$image' alt='$title'>";
                echo "<h3><a href='$file'>$title</a></h3>";
                echo "<p>Category: $subject</p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Sports Betting Toolbox. All Rights Reserved.</p>
    </footer>
</body>
</html>
