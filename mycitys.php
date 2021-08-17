<!DOCTYPE html>
<html>
	<head>		
		<title>My City's</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
		<link rel="stylesheet" href="assets/plugin/leaflet/leaflet.css"/>
		<link rel="stylesheet" href="assets/css/style.css">

		<script src="assets/plugin/leaflet/leaflet.js"></script>		
	</head>
	<body>
		<div id="addCity">
			<form action="addCity.php" method="post">
				<p>Ville à ajouter : <input type="text" name="city" id=""> <input type="button" value="OK"></p>
			</form>
		</div>

		<div id="mapid"></div>
		<script>

			var mymap = L.map('mapid').setView([49.226828, -0.303448], 13);

			L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
				maxZoom: 18,
				id: 'mapbox/streets-v11',
				tileSize: 512,
				zoomOffset: -1
			}).addTo(mymap);
			// Marker d'accueil
			L.marker([49.226828, -0.303448]).addTo(mymap)
				.bindPopup("<b>Bureau AVD</b>").openPopup();

			// Liste des marker dans la bdd
			L.marker([50.4, 1.6]).addTo(mymap)
				.bindPopup("<b>Berck</b>");
			L.marker([50.7167, 1.6167]).addTo(mymap)
				.bindPopup("<b>Boulogne-sur-mer</b>");
			L.marker([50.6333, 3.0667]).addTo(mymap)
				.bindPopup("<b>Lille</b>");
			L.marker([50.433, 2.8279]).addTo(mymap)
				.bindPopup("<b>Lens</b>");

			var popup = L.popup();

		</script>
	</body>
</html>
