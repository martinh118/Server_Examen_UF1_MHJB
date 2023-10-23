<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css">
	<script src="../view/bootstrap/js/bootstrap.min.js"></script>
	<!-- Fontawesome -->
	<link rel="stylesheet" href="../view/fontello/css/fontello.css">
	<!-- Estils propis -->
	<link rel="stylesheet" href="../view/styles.css">
	<script src="../view/scripts/prevent-resend-confirmation.js"></script>
	<title>Home</title>
	<link rel="shortcut icon" href="../view/images/favicon.ico" type="image/x-icon">
</head>

<body>
	<!-- Navbar -->
	<?php require_once '../controller/navbar.php' ;
    
    llistarUsuaris()
    ?>
	
    

	<!-- Footer -->
	<?php include_once '../view/footer.view.php' ?>
</body>

</html>