<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<link rel="icon" type="image/x-icon" href="img/favoricon.ico">
<link rel="icon" type="image/png" href="img/favoricon.png">

<link href='https://fonts.googleapis.com/css?family=Open+Sans|Poiret+One|Josefin+Sans' rel='stylesheet' type='text/css'>

<!-- font-family: 'Open Sans', sans-serif; -->
<!-- font-family: 'Poiret One', cursive; -->
<!-- font-family: 'Josefin Sans', sans-serif; -->

<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/fonts.css">

	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/responsive-index.css">

	<link rel="stylesheet" href="css/servic.css">
	<link rel="stylesheet" href="css/responsive-servic.css">

	<link rel="stylesheet" href="css/acerca-de.css">
	<link rel="stylesheet" href="css/responsive-acerca-de.css">

	<link rel="stylesheet" href="css/contacto.css">
	<link rel="stylesheet" href="css/responsive-contacto.css">

<script type="text/javascript">

	function cambiarMenu(estado){
		var botnMenu = document.getElementById('botnMenu');
		var botnMenu2 = document.getElementById('botnMenu2');
		var botnMenu3 = document.getElementById('botnMenu3');
		if(estado) {
			botnMenu.className = 'boton-menu-activo'
			botnMenu2.className = 'boton-menu-activo'
			botnMenu3.className = 'boton-menu-activo'
			return;
		}
		botnMenu.className = 'boton-menu'
		botnMenu2.className = 'boton-menu'
		botnMenu3.className = 'boton-menu'
	};
	
</script>

<script src='js/menu_scripts.js'></script>
<script src='http://maps.googleapis.com/maps/api/js'></script>

<script>
var myCenter=new google.maps.LatLng(19.3894387,-99.136294);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  scrollwheel: false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!----------------------------- Stylesheets ------------------------------>

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/normalize.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style.min.css" rel="stylesheet" type="text/css" media="all" />

<!----------------------------- Stylesheets ------------------------------>