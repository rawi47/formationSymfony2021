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
            <h1>Profile </h1>
            <p>
            <?php echo $_SESSION["name"] ?>
            </p>
        </div>

    </main>
    <?php include("cms/footer.php"); ?>

</body>

</html>