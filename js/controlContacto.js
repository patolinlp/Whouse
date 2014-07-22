function initialize(){
				var mapOptions = {
			      center: new google.maps.LatLng(-34.981628, -71.246261),
			      zoom: 18,

			      mapTypeId: google.maps.MapTypeId.ROADMAP
			    }
				var map = new google.maps.Map(document.getElementById("map_canvas"),mapOptions);
}

function loadScript() {
			  var script = document.createElement("script");
			  script.type = "text/javascript";
			  script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDLlQc3Ul8F0kTtFOjel7V58e1iU3kNYrM&sensor=false&callback=initialize";
			  document.body.appendChild(script);

}
window.onload = loadScript();