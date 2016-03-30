var map;
$(document).ready(function () {
	google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {
	var map_canvas = document.getElementById('googleMap');

	var map_options = {
		center: new google.maps.LatLng(28.638902, -106.100553),
		zoom: 18,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		draggable: !("ontouchend" in document)
	};

	map = new google.maps.Map(map_canvas, map_options);

	var markerChihuahua = new google.maps.Marker({
		position: new google.maps.LatLng(28.638902, -106.100553),
		map: map,
		title: 'Alta Seguridad'
	});
}