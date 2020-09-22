<?php require_once('/home/anton/data/www/default/mySite/temp/header.php'); ?>
<link href="/template/css/myStyle.css" rel="stylesheet" type="text/css" media="screen" />
<div class="content">

    <h1><?= $newsItem['title'] ?></h1>
    <h2><?= $newsItem['author_name'] ?></h2>
    <h4><?= $newsItem['date'] ?></h4>
<p><?= $newsItem['content'] ?></p>

    <?php // print_r($newsItem); ?>
</div>

<?php require_once ('/home/anton/data/www/default/mySite/temp/footer.php'); ?>
