
<?php require_once ('temp/header.php'); ?>
<?php require_once ('posts_data.php'); ?>
<div class="content">
<main>
        <article>
       <h1><?= $data['post1']['header'] ?></h1>
        <img src=<?= $data['post1']['img'] ?> alt="images/alt.jpg">
        <p><?= $data['post1']['text'] ?></p>
        </article>
    <article>
        <h1><?= $data['post2']['header'] ?></h1>
        <img src=<?= $data['post2']['img'] ?> alt="images/alt.jpg">
        <p><?= $data['post2']['text'] ?></p>
    </article>
    <article>
        <h1><?= $data['post3']['header'] ?></h1>
        <img src=<?= $data['post3']['img'] ?> alt="images/alt.jpg">
        <p><?= $data['post3']['text'] ?></p>
    </article>

</main>
</div>
<?php require_once ('temp/footer.php'); ?>
</body>
</html>
