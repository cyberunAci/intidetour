let map = L.map('map');

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

let control = L.Routing.control(L.extend(window.lrmConfig, {
	waypoints: [
	 L.latLng(-21.111057, 55.255802),
     L.latLng(-21.110613, 55.254953),
     L.latLng(-21.110027, 55.256230),
     L.latLng(-21.109777, 55.256979),
     L.latLng(-21.109858, 55.255959),
     L.latLng(-21.112255, 55.253803),
     L.latLng(-21.114739, 55.254983),
     L.latLng(-21.111057, 55.255802),
	],
	geocoder: L.Control.Geocoder.nominatim(),
	routeWhileDragging: true,
	reverseWaypoints: true,
	showAlternatives: true,
	altLineOptions: {
		styles: [
			{color: 'black', opacity: 0.15, weight: 9},
			{color: 'white', opacity: 0.8, weight: 6},
			{color: 'blue', opacity: 0.5, weight: 2}
		]
	}
})).addTo(map);

L.Routing.errorControl(control).addTo(map);
