<html>

<?php include("cms/head.php"); ?>

<body>
    <?php include("cms/header.php"); ?>
    <main>
        <div>
            <h1>Créer votre compte </h1>

        </div>
        <div>
            <form method="post" action="createUser.php">
                <div class="form-element">
                    <label>Nom</label>
                    <input type="text" name="name" />
                </div>
                <div class="form-element">
                    <label>Prénom</label>
                    <input type="text" name="prenom" />
                </div>
                <div class="form-element">
                    <label>Email</label>
                    <input type="email" name="email" />
                </div>

                <div class="form-element">
                    <label>Password</label>
                    <input type="text" name="password" />
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