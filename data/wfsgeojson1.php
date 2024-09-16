<?php
	// $wfsUrl = file_get_contents("http://geoportal.slemankab.go.id/geoserver/geonode/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geonode:analisis_resiko_bencana_gunung_api&outputFormat=json");
	//admin_desa_wng
	$wfsUrl = file_get_contents("http://localhost:8080/geoserver/pendidikan_wng/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=pendidikan_wng%3Aadmin_desa_wng&maxFeatures=50&outputFormat=application%2Fjson");

	header('Content-type: application/json');
	echo ($wfsUrl);
	# Jika terdapat &maxFeatures=50 pada url wfs geojson, dihapus supaya jumlah feature tidak dibatasi
?>