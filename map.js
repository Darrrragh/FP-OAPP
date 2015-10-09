$(document).ready(function(){
 
	if( navigator.geolocation )
	 navigator.geolocation.getCurrentPosition(success, fail);
	else
	 $("p").html("HTML5 Geolocation is not supported by this Broswer");
 
});
 
function success(position)
{
	var googleLatLng = new google.maps.LatLng(position.coords.latitude, 
						  position.coords.longitude);
	var mapOtn= {
zoom:18,
		center   :googleLatLng,
		mapTypeId:google.maps.MapTypeId.ROAD
	}
 
	var Pmap= document.getElementById("map");
 
	var map= new google.maps.Map(Pmap, mapOtn);
}
 
function fail(error)
{
	var errorType = {
0: "Problem Unknown, Contact Admin",
1: "Location position denied by User, Please Enable your Devices Location",
2: "User Position Not Available, make sure location is trned on",
3: "Request has timed out, please try again"
	};
 
	var errorMessage = errorType[error.code];
 
	if(error.code == 0 || error.code == 2){
		errorMessage = errorMessage+" - "+error.message;
	}
 
	$("p").html(errorMessage);
}
