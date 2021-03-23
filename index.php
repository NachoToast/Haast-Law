<?php
    // Version 1.0
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="img/logo.png" rel="icon" type="image/png">
    <script defer src="js/main.js"></script>
    <title>Haast Law - Home</title>
</head>
<body class="preload">
<?php include_once "header.php" ?>

<div id="help_banner">
    <h1>HERE TO HELP</h1>
    <div>
        <img src="img/arrow.png">
        <form>
           <input placeholder="Search our free resources">
           <button></button>
        </form>
        <img src="img/arrow.png">
    </div>
</div>

<div id="trending_articles">
    <h1>Trending Law Firm Articles of the Week</h1>
    <div id="article_container">
        <a class="articles"><div>
            <img src="img/picture.png">
            <h1>Article</h1>
        </div></a>
        <a class="articles"><div>
            <img src="img/picture.png">
            <h1>Longer Article Name</h1>
        </div></a>
        <a class="articles"><div>
            <img src="img/picture.png">
            <h1>LongWorded ArticleTitle</h1>
        </div></a>
        <a class="articles"><div>
            <img src="img/picture.png">
            <h1>LongWorded ArticleTitle</h1>
        </div></a>
        <a class="articles"><div>
            <img src="img/picture.png">
            <h1>LongWorded ArticleTitle</h1>
        </div></a>
        <a class="articles"><div>
            <img src="img/picture.png">
            <h1>LongWorded ArticleTitle</h1>
        </div></a>
        <a class="articles"><div>
            <img src="img/picture.png">
            <h1>LongWorded ArticleTitle</h1>
        </div></a>
    </div>
</div>

<div id="other_stuff">
    <div id="jump">
        <h1>Jump back in!</h1>
    </div>
    <div id="new">
        <div>
            <h1>what's new this week?</h1>
        </div>
        <div>
            <h1>Hypertargeted Ads Here</h1>
        </div>
    </div>
</div>

<?php include_once "footer.php" ?>
</body>
</html>