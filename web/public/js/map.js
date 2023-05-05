 $(window).load(function () {  
	
	//Open street  Map
	var mapcanvas = document.getElementById("map-canvas");
	if(mapcanvas){
		//Open street  Map
		var coord = [41.909766, -91.650816]; // <--- coordinates here

		var map = L.map('map-canvas', { scrollWheelZoom:false}).setView(coord, 18);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 22,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
		}).addTo(map);

		// custom icon
		var customIcon = L.icon({
		iconUrl: '../images/logo/updated-favicon-resized.png',
		iconSize:     [54, 54], // size of the icon
		iconAnchor:   [32, 63] // point of the icon which will correspond to marker's location
		});

		// marker object, pass custom icon as option, add to map         
		var marker = L.marker(coord, {icon: customIcon}).addTo(map);
		 }
});