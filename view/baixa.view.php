<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css">
    <script src="../view/bootstrap/js/bootstrap.min.js"></script>
    <!-- Delete confirm modal script -->
    <script src="../view/scripts/confirm-dialog.js"></script>
    <!-- jquery -->
    <script src="../view/jquery/jquery-3.6.1.min.js"></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="../view/fontello/css/fontello.css">
    <!-- Script propi -->
    <script defer src="../view/scripts/edit-form.js"></script>
    <!-- Estils propis -->
    <link rel="stylesheet" href="../view/styles.css">
    <title>Inici</title>
</head>

<body>

    <?php require_once '../controller/navbar.php' ?>

    <form action="../controller/baixa.php" method="post">
        <div>
            DE VERITAT VOLS DONARTE DE BAIXA?
        </div>
        <div>
            <button type="sumbit" name="baixa" value="SI"> SI</button>
            <button type="sumbit" name="baixa" value="NO"> NO </button>
        </div>
    </form>
    <!-- Footer -->
    <?php include_once '../view/footer.view.php' ?>
</body>

</html>