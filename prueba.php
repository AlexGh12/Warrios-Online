<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style type="text/css">
		.normal_parrafo { color:#c0c; }
		.normal_titulo { color:#c0c; }
		.resaltado_parrafo { color:#804040; }
		.resaltado_titulo { color:#804040; }
	</style>

	<script type="text/javascript">
		function cambiarMenu(estado){
			var titulo = document.getElementById('titulo');
			var parrafo = document.getElementById('parrafo');
			if(estado) {
				parrafo.className = 'resaltado_parrafo';
				titulo.className = 'resaltado_titulo'
				return;
			}
			parrafo.className = 'normal_parrafo';
			titulo.className = 'normal_titulo'
		}
	</script>

</head>
<body>
	<div id="contenedor">
		<div 
			id="imagen" 
			style="height:80px; width:90px; background:#000;" 
			onMouseOver="cambiarMenu(true);" onMouseOut="cambiarMenu(false);" >
	     	
		</div>
		<!-- solo le pongo el style para que se vea -->
		<h1 id="titulo" class="normal_titulo">Título</h1>
		<p id="parrafo" class="normal_parrafo">Esto es un texto que se debe iluminar al pasar el mouse</p>
	</div>
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(19.3894387,-99.136294);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
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
</head>

<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
</body>
</html> -->
