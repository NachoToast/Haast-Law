<?php
    // Version 1.0
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="img/logo.png" rel="icon" type="image/png">
    <title>Haast Law - Home</title>
</head>
<body>
    <?php include_once "header.php" ?>
    <div id="index_head">
        <h1>HERE TO HELP</h1>
        <div>
            <img src="img/arrow.png">
            <form>
                <input placeholder="Search our free resources"></input>
            </form>
            <img src="img/arrow.png">
        </div>
    </div>
    <div id="index_articles">
        <h1>Trending Law Firm Articles of the Week</h1>
        <div>
            <a class="preview_articles" href="index.php">
                <img src="img/picture.png">
                <h2>Article</h2>
            </a>
            <a class="preview_articles" href="index.php">
                <img src="img/picture.png">
                <h2>Article</h2>
            </a>
            <a class="preview_articles" href="index.php">
                <img src="img/picture.png">
                <h2>Article</h2>
            </a>
            <a class="preview_articles" href="index.php">
                <img src="img/picture.png">
                <h2>Article</h2>
            </a>
            <a class="preview_articles" href="index.php">
                <img src="img/picture.png">
                <h2>Article</h2>
            </a>
        </div>
    </div>
    <div id="index_other">
        <div id="jump_back">
            <h2>Jump back in!</h2>
            <div id="article_container">
                <a class="preview_articles3" href="index.php">
                    <img src="img/picture.png">
                    <h2>Article</h2>
                </a>
                <a class="preview_articles3" href="index.php">
                    <img src="img/picture.png">
                    <h2>Article</h2>
                </a>
                <a class="preview_articles3" href="index.php">
                    <img src="img/picture.png">
                    <h2>Article</h2>
                </a>
            </div>
        </div>
        <div id="other">
            <div id="weekly_news">
                <h2>What's new this week?</h2>
                <div id="article_container">
                <a class="preview_articles2" href="index.php">
                    <img src="img/picture.png">
                    <h2>Article Name</h2>
                    <img src="img/trending.png">
                </a>
                <a class="preview_articles2" href="index.php">
                    <img src="img/picture.png">
                    <h2>Article Name</h2>
                    <img src="img/trending.png">
                </a>
                <a class="preview_articles2" href="index.php">
                    <img src="img/picture.png">
                    <h2>Article Name</h2>
                    <img src="img/trending.png">
                </a>
                </div>
            </div>
            <div id="hypertarget">
                <h2>Hypertargeted Ads here</h2>
                <div id="hypertarget_container">
                    <div class="hypertarget"></div>
                    <div class="hypertarget"></div>
                    <div class="hypertarget"></div>
                    <div class="hypertarget"></div>
                    <div class="hypertarget"></div>
                    <div class="hypertarget"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "footer.php" ?>
</body>
</html>