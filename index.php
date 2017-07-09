<!DOCTYPE HTML>
<html>
	<head>
		<title>JaikuaApp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
			<!-- JavaScript -->
		<script type="text/javascript" src="assets/javascript/modernizr.js"></script>
		<!---->

	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="revealt">
					<h1><a href="index.php">JaikuaApp</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="#">PDA</a></li>
							<li><a href="tcp.php">TCP</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="mapa">
						<!-- JavaScript -->
	
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
				<script>window.jQuery || document.write('<script src="./lib/jquery-1.11.1.min.js"><\/script>')</script>

				<script type="text/javascript" src="assets/javascript/jquery.bxslider.min.js"></script>
				<script type="text/javascript" src="assets/javascript/scotchPanels.js"></script>

				<script type="text/javascript" src="assets/javascript/slider.js"></script>
				<script>
					$("#slideshowMaster").sliderUi({
						animation: 'vertical', autoplay: true, infinite: true
					});

					$(document).ready(function(){
						$('.slidemarcas').bxSlider({
							slideWidth: 300,
							minSlides: 3,
							maxSlides: 3,
							moveSlides: 3,
							slideMargin: 10,
							auto: true,
							responsive: true
						});
					});
				</script>
				<script type="text/javascript" src="assets/javascript/jquery-2.1.4.js"></script>
				<script>window.jQuery || document.write('<script src="./lib/jquery-1.11.1.min.js"><\/script>')</script>

				<script type="text/javascript" src="assets/javascript/jquery.bxslider.min.js"></script>
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPozGTZvV4eKvTPeLeGqZ3gJdt-4hhiNA"></script>
				<script>
					// When the window has finished loading create our google map below
					google.maps.event.addDomListener(window, 'load', init);
					function init() {
						// Basic options for a simple Google Map
						// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
						var mapOptions = {
							// How zoomed in you want the map to start at (always required)
							zoom: 15,
							// The latitude and longitude to center the map (always required)
							center: new google.maps.LatLng(-25.2811115,-57.6081677), // 
							// How you would like to style the map.
							// This is where you would paste any style found on Snazzy Maps.
							styles: [{"featureType":"all","elementType":"all","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":-30}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#353535"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#656565"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#f5f5f5"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"color":"#808080"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#454545"}]},{"featureType":"transit","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":100},{"lightness":-40},{"invert_lightness":true},{"gamma":1.5}]}]
						};

						// Obtener el elemento HTML DOM que contendra¡ su mapa
						// Estamos utilizando un div con id="mapa" se muestra a continuaciÃ³n en el <body>
						var mapElement = document.getElementById('mapa');

						// Crear el mapa de Google utilizando su elemento y las opciones se han definido anteriormente
						var map = new google.maps.Map(mapElement, mapOptions);

						// TambiÃ©n vamos a aÃ±adir un marcador, mientras que estamos en Ã©l
						var marker = new google.maps.Marker({
							position: new google.maps.LatLng(-25.2811115,-57.6081677),
							map: map,
							title: 'title'
						});
					}
				</script>
				<!---->
				</section>



			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; JaikuApp. Todos los derechos reservados.</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>