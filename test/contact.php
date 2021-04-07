<html>

<?php include("cms/head.php"); ?>

<body>
    <?php include("cms/header.php"); ?>
    <main>
        <div>
            <h1>Contactez bnous : </h1>
            <p>
                Laisser un message
            </p>
        </div>
        <div>
            <form method="post" action="submit.php">
            <div class="form-element">
                    <label>Nom</label>
                    <input type="text" name="name" />
                </div>
                <div class="form-element">
                    <label>Email</label>
                    <input type="email" name="email" />
                </div>
                <div class="form-element">
                    <label>message</label>
                    <textarea name="message"></textarea>
                </div>
                <div class="form-element">
                    <button name="save">Envoyer</button>
                </div>

            </form>
        </div>

    </main>
    <?php include("cms/footer.php"); ?>

</body>

</html>