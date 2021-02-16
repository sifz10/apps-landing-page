
/*----------------------------------------------------*/
/*  Google map js
/*----------------------------------------------------*/

if ($('#mapBox1').length) {
	var $lat = $('#mapBox1').data('lat');
	var $lon = $('#mapBox1').data('lon');
	var $zoom = $('#mapBox1').data('zoom');
	var $marker = $('#mapBox1').data('marker');
	var $info = $('#mapBox1').data('info');
	var $markerLat = $('#mapBox1').data('mlat');
	var $markerLon = $('#mapBox1').data('mlon');
	var map = new GMaps({
		el: '#mapBox1',
		lat: $lat,
		lng: $lon,
		scrollwheel: false,
		scaleControl: true,
		streetViewControl: false,
		panControl: true,
		disableDoubleClickZoom: true,
		mapTypeControl: false,
		zoom: $zoom,
		styles: [
			{
				"featureType": "administrative",
				"elementType": "labels.text.fill",
				"stylers": [
					{
						"color": "#444444"
						}
					]
				},
			{
				"featureType": "landscape",
				"elementType": "all",
				"stylers": [
					{
						"color": "#f2f2f2"
						}
					]
				},
			{
				"featureType": "poi",
				"elementType": "all",
				"stylers": [
					{
						"visibility": "off"
						}
					]
				},
			{
				"featureType": "road",
				"elementType": "all",
				"stylers": [
					{
						"saturation": -100
						},
					{
						"lightness": 45
						}
					]
				},
			{
				"featureType": "road.highway",
				"elementType": "all",
				"stylers": [
					{
						"visibility": "simplified"
						}
					]
				},
			{
				"featureType": "road.arterial",
				"elementType": "labels.icon",
				"stylers": [
					{
						"visibility": "off"
						}
					]
				},
			{
				"featureType": "transit",
				"elementType": "all",
				"stylers": [
					{
						"visibility": "off"
						}
					]
				},
			{
				"featureType": "water",
				"elementType": "all",
				"stylers": [
					{
						"color": "#fdf2d4"
						},
					{
						"visibility": "on"
						}
					]
				}
			]
	});

	map.addMarker({
		lat: $markerLat,
		lng: $markerLon,
		icon: $marker,
		infoWindow: {
			content: $info
		}
	})
}
