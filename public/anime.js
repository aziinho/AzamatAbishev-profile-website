
function on() {
 	document.getElementById('loginbox').style.display="block";
 	$(".loginbox").animate({opacity:"1"}, "slow");
 	document.body.style.overflow = "hidden";
 	}
function off() {
 	document.getElementById('loginbox').style.display="none";
 	document.body.style.overflow = "scroll";
 	
 	}

function sign_in(usename,passw) 
	{
	document.getElementById('loginbox').style.display="none";	
	document.getElementById('login').style.display="none";
	document.body.style.overflow = "scroll";
	document.getElementById("johnty").innerHTML=usename;
	document.getElementById("avatar").style.display="block";
	document.getElementById("usename").value="";
	document.getElementById("passw").value="";
	
	}
 function data() {
	var b = document.getElementById('logout').style.display;
	 if(b == "none"){
		document.getElementById('logout').style.display="block";
	} else{
		document.getElementById('logout').style.display="none";
	}	
 }

function logout() {
	document.getElementById("login").style.display="block";
	document.getElementById("logout").style.display="none";
	document.getElementById("avatar").style.display="none";


}




     function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 14,
          center: {  lat: 43.235331249897044, lng:76.93835820052809},  
        });

  const marker1 = new google.maps.Marker({
  position: { lat: 43.23354179631279, lng: 76.9568517838564 },
          map:map,
 
    });
  const infowindow1 = new google.maps.InfoWindow({
   content:'<h2>Hey</h2>Premier League <h5><h5>Самал-2, 111, Алматы</h5> <h5>Открыто:  10:00–22:00</h5> <h5>+77272221387</h5>'
   });
   marker1.addListener('click', function(){
   infowindow1.open(map,marker1);
   map.setCenter(marker1.getPosition());
   });
  
  const marker2 = new google.maps.Marker({
   position:{lat:43.2205860997279,lng:76.92750662138727}, 
   map:map
   });
  const infowindow2 = new google.maps.InfoWindow({
   content:'<h2>Hey</h2>Football store <h5> <h5>проспект Aль-Фараби 77/8, Алматы 050040</h5> <h5>Открыто:  10:00–22:00</h5> <h5>+77272221387</h5>'
   });
   marker2.addListener('click', function(){
   infowindow2.open(map,marker2);
   map.setCenter(marker1.getPosition());
   });
  
  const marker3 = new google.maps.Marker({
  position:{lat:43.22794313577942,lng:76.95676442323372}, 
   map:map
   });
  const infowindow3 = new google.maps.InfoWindow({
   content:'<h2>Hey</h2>KFF<h5>уг. ул. Достык, проспект Aль-Фараби 1, Алматы</h5> <h5>Открыто:  09:00–23:00</h5> <h5>+77272221387</h5>'
   });
   marker3.addListener('click', function(){
   infowindow3.open(map,marker3);
   map.setCenter(marker1.getPosition());
  });
  
     const flightPlanCoordinates = [ 
   {lat: 43.23354179631279, lng: 76.9568517838564 },
   {lat:43.2205860997279,lng:76.92750662138727}, 
   {lat:43.22794313577942,lng:76.95676442323372}, 
  ];
  const flightPath = new google.maps.Polyline({
   path: flightPlanCoordinates,
   geodesic: true,
   strokeColor: "#FF0000",
   strokeOpacity: 1.0,
   strokeWeight: 2,
  });

   flightPath.setMap(map);
   
   const cityCircle = new google.maps.Circle({
   strokeColor: "#FF0000",
   strokeOpacity: 0.5,
   strokeWeight: 2,
   fillColor: "black",
   fillOpacity: 0.35,
   map,
   center: {  lat: 43.235331249897044, lng:76.93835820052809},  
   radius: 4000,
   });
  }