<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Site name</h1>
    <p>Site description</p>
    <img src="images/logo.png" alt="">
    <nav>
        <ul>
            <a href="#">Test</a>
            <a href="#">Test</a>
            <a href="#">Test</a>
        </ul>
    </nav>
</header>
<main>
    <form action="registr.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <label for="Password2">Repeat password:</label>
        <input type="password" name="password2">
        <input type="submit">
    </form>
    <article>
        <h2>Article name</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Harum eligendi neque aut, vel id natus, illo praesentium nobis reiciendis at sunt sed.
            Dolorem fugiat dolor corrupti cupiditate earum assumenda quasi?</p>
    </article>
</main>
<footer class="footer">
    <h3>Vsego horoshego!</h3>
    <p>&copy; Copyright by Anton 2020</p>
</footer>
</body>
</html>
