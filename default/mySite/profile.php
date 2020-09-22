<?php require_once('temp/header.php'); ?>
<body>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            $(".password").show();
        });
    });
</script>

<main>
    <section>
        <div class="name">
        <img src="images/папич.jpg" alt="" class="profile">
        <p>Справжній мужик</p>
            <div class="test">
        <label for="name">Name:</label>
        <input type="text" name="name" value="Vitaliy">
            </div>
            <div class="test">
        <label for="lastname">Lastname:</label>
        <input type="text" name="lastname" value="Tsal">
            </div>
        </div>

        <button class="button">Change password</button>

        <div class="password">
            <form action="">
                <label for="">You'r current password:</label>
                <input type="password">
                <label for="">New password:</label>
                <input type="password">
                <label for="">Repeat password:</label>
                <input type="password">
            </form>
        </div>
    </section>
</main>
<?php require_once('temp/footer.php'); ?>

</body>
</html>
