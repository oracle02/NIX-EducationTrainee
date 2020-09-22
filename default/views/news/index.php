
<?php require_once('/home/anton/data/www/default/mySite/temp/header.php'); ?>
<link href="/template/css/myStyle.css" rel="stylesheet" type="text/css" media="screen" />
<div class="content">
<main>
        <article>
            <?php for($i = 0; $i < count($newsList); $i++): ?>
            <div class="post">
       <h1><?= $newsList[$i]['title'] ?></h1>

        <h4><?= $newsList[$i]['author_name'] ?></h4>
        <p><?= $newsList[$i]['short_content'] ?></p>
            <h4><?= $newsList[$i]['date'] ?></h4>
            </div>
        </article>
<?php endfor; ?>
</main>
</div>
<?php require_once('/home/anton/data/www/default/mySite/temp/footer.php'); ?>
</body>
</html>