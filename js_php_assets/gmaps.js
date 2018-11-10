//Functuon For Initiationg Google Map and Placing Landmark Markers

function initGMap() 
{
	//Creates Location Variables For Sights In The Map
	var key_west = {lat: 24.555059, lng: -81.779984};
	var mallory = {lat: 24.559889, lng: -81.807569};
	var fort_zach = {lat: 24.547943, lng: -81.810126};
	var duval = {lat: 24.553903, lng: -81.801313};
	var little_white = {lat: 24.556247, lng: -81.806886};
	var hem_home = {lat: 24.551205, lng: -81.8000603};
	var south_point = {lat: 24.546604, lng: -81.797477};
	var light = {lat: 24.550861, lng: -81.800878};
	
	//Creates The Google Maps Object
	var gmap = new google.maps.Map(document.getElementById('gmap'), {zoom: 4, center: key_west});
  	
	var marker0 = new google.maps.Marker({position: mallory, map: gmap});
	var marker1 = new google.maps.Marker({position: fort_zach, map: gmap});
	var marker2 = new google.maps.Marker({position: duval, map: gmap});
	var marker3 = new google.maps.Marker({position: little_white, map: gmap});
	var marker4 = new google.maps.Marker({position: hem_home, map: gmap});
	var marker5 = new google.maps.Marker({position: south_point, map: gmap});
	var marker6 = new google.maps.Marker({position: light, map: gmap});	
}
