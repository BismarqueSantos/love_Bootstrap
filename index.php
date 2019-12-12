<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo "+love"; ?> </title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
 
<div id="home">
	<?php include("./sessao/navBar.php"); ?>
	<?php include("./sessao/chamada.php"); ?>
	<?php include("./sessao/cadastro.php"); ?>
	<?php include("./sessao/podioEstabelecimento.php"); ?>
	<?php include("./sessao/quemSomos.php"); ?>
	<?php include("./sessao/parceiros.php"); ?>
	<?php include("./sessao/footer.php"); ?>
	<?php include("./sessao/barraFinal.php"); ?>
</div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/popper.min.js"></script>
</body>
</html>