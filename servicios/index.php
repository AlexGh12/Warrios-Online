<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Warrios Online</title>
	<?php include("00head.php") ?>
</head>
<body>

<a name="top" id="top"></a>

<?php include("01menu.php") ?>

<div class="bgprincipal">

	<h1 class="title-principal-servicios">
		Servicios
	</h1>

<?php

	if(isset($_GET["id"]) && !empty($_GET["id"]))
	{	
		switch ($_GET["id"])
		{
		 	case 'Hosting':
		 		echo '
	<a href="?id=Hosting" class="cicle-menuSelect">
		<span class="icoSelect icon-WarriosOnline-04"></span>
		<h1 class="title-servicio">Hosting</h1>
	</a>

	<a href="?id=VPS" class="cicle-menu">
		<span class="ico icon-WarriosOnline-03"></span>
		<h1 class="title-servicio">Servidores Virtuales</h1>
	</a>

	<a href="?id=Housing" class="cicle-menu">
		<span class="ico icon-WarriosOnline-02"></span>
		<h1 class="title-servicio">Housing</h1>
	</a>

	<a href="?id=Dominios" class="cicle-menu">
		<span class="ico icon-WarriosOnline-01"></span>
		<h1 class="title-servicio">Dominios</h1>
	</a>
		 		';
		 		break;

		 	case 'VPS':
		 		echo '
	<a href="?id=Hosting" class="cicle-menu">
		<span class="ico icon-WarriosOnline-04"></span>
		<h1 class="title-servicio">Hosting</h1>
	</a>

	<a href="?id=VPS" class="cicle-menuSelect">
		<span class="icoSelect icon-WarriosOnline-03"></span>
		<h1 class="title-servicio">Servidores Virtuales</h1>
	</a>

	<a href="?id=Housing" class="cicle-menu">
		<span class="ico icon-WarriosOnline-02"></span>
		<h1 class="title-servicio">Housing</h1>
	</a>

	<a href="?id=Dominios" class="cicle-menu">
		<span class="ico icon-WarriosOnline-01"></span>
		<h1 class="title-servicio">Dominios</h1>
	</a>
		 		';
		 		break;

		 	case 'Housing':
				echo '
	<a href="?id=Hosting" class="cicle-menu">
		<span class="ico icon-WarriosOnline-04"></span>
		<h1 class="title-servicio">Hosting</h1>
	</a>

	<a href="?id=VPS" class="cicle-menu">
		<span class="ico icon-WarriosOnline-03"></span>
		<h1 class="title-servicio">Servidores Virtuales</h1>
	</a>

	<a href="?id=Housing" class="cicle-menuSelect">
		<span class="icoSelect icon-WarriosOnline-02"></span>
		<h1 class="title-servicio">Housing</h1>
	</a>

	<a href="?id=Dominios" class="cicle-menu">
		<span class="ico icon-WarriosOnline-01"></span>
		<h1 class="title-servicio">Dominios</h1>
	</a>
				';
		 		break;

			case 'Dominios':
				echo '
	<a href="?id=Hosting" class="cicle-menu">
		<span class="ico icon-WarriosOnline-04"></span>
		<h1 class="title-servicio">Hosting</h1>
	</a>

	<a href="?id=VPS" class="cicle-menu">
		<span class="ico icon-WarriosOnline-03"></span>
		<h1 class="title-servicio">Servidores Virtuales</h1>
	</a>

	<a href="?id=Housing" class="cicle-menu">
		<span class="ico icon-WarriosOnline-02"></span>
		<h1 class="title-servicio">Housing</h1>
	</a>

	<a href="?id=Dominios" class="cicle-menuSelect">
		<span class="icoSelect icon-WarriosOnline-01"></span>
		<h1 class="title-servicio">Dominios</h1>
	</a>
				';
		 		break;

		 	default:
		 		echo '
	<a href="?id=Hosting" class="cicle-menuSelect">
		<span class="icoSelect icon-WarriosOnline-04"></span>
		<h1 class="title-servicio">Hosting</h1>
	</a>

	<a href="?id=VPS" class="cicle-menu">
		<span class="ico icon-WarriosOnline-03"></span>
		<h1 class="title-servicio">Servidores Virtuales</h1>
	</a>

	<a href="?id=Housing" class="cicle-menu">
		<span class="ico icon-WarriosOnline-02"></span>
		<h1 class="title-servicio">Housing</h1>
	</a>

	<a href="?id=Dominios" class="cicle-menu">
		<span class="ico icon-WarriosOnline-01"></span>
		<h1 class="title-servicio">Dominios</h1>
	</a>
		 		';
		 		break;
		}
	}else{
		echo '
	<a href="?id=Hosting" class="cicle-menuSelect">
		<span class="icoSelect icon-WarriosOnline-04"></span>
		<h1 class="title-servicio">Hosting</h1>
	</a>

	<a href="?id=VPS" class="cicle-menu">
		<span class="ico icon-WarriosOnline-03"></span>
		<h1 class="title-servicio">Servidores Virtuales</h1>
	</a>

	<a href="?id=Housing" class="cicle-menu">
		<span class="ico icon-WarriosOnline-02"></span>
		<h1 class="title-servicio">Housing</h1>
	</a>

	<a href="?id=Dominios" class="cicle-menu">
		<span class="ico icon-WarriosOnline-01"></span>
		<h1 class="title-servicio">Dominios</h1>
	</a>
		 		';
	}
?>

<!-- 	<a href="?id=Hosting" class="cicle-menu">
		<span class="ico icon-WarriosOnline-04"></span>
		<h1 class="title-servicio">Hosting</h1>
	</a>

	<a href="?id=VPS" class="cicle-menu">
		<span class="ico icon-WarriosOnline-03"></span>
		<h1 class="title-servicio">Servidores Virtuales</h1>
	</a>

	<a href="?id=Housing" class="cicle-menu">
		<span class="ico icon-WarriosOnline-02"></span>
		<h1 class="title-servicio">Housing</h1>
	</a>

	<a href="?id=Dominios" class="cicle-menu">
		<span class="ico icon-WarriosOnline-01"></span>
		<h1 class="title-servicio">Dominios</h1>
	</a> -->


</div>

<!-- ---------------------------------------------------------------- -->


<div class="bgprincipal2">

<?php

	if(isset($_GET["id"]) && !empty($_GET["id"]))
	{	
		switch ($_GET["id"])
		{
		 	case 'Hosting':
		 		include("hosting.php");
		 		break;

		 	case 'VPS':
		 		include("vps.php");
		 		break;

		 	case 'Housing':
				include("housing.php");
		 		break;
		 	
			case 'Dominios':
				include("dominios.php");
		 		break;

		 	default:
		 		include("hosting.php");
		 		break;
		}
	}else{
		include("hosting.php");
	}
?>

</div>

<!---------------------------- JavaScript ------------------------------>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="assets/js/smoothscroll.min.js" type="text/javascript"></script>
<script src="assets/js/appear.min.js" type="text/javascript"></script>
<script src="assets/js/backbone.js" type="text/javascript"></script>
<script src="assets/js/animations.min.js" type="text/javascript"></script>

<!---------------------------- JavaScript ------------------------------>

</body>
</html>
































