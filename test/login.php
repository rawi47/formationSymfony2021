<?php
// Start the session
session_start();
?>
<html>

<?php include("cms/head.php"); ?>

<body>
    <?php include("cms/header.php"); ?>
    <main>
        <div>
            <h1>Login </h1>
            <p>
            
            </p>
        </div>
        <div>
        <form method="post" action="login.php">
                
                <div class="form-element">
                    <label>Email</label>
                    <input type="email" name="email" />
                </div>
                <div class="form-element">
                    <label>Mot de passe</label>
                    <input type="password" name="password" />
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