<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

<title>GIS</title>

  <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css" crossorigin="anonymous">

<script type="text/javascript" src="jquery-3.2.1.min.js" ></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApC72fp4CYzOLabrQK6IOyfxzMRZq2dgg&callback=initMap"
type="text/javascript"></script>

<script language="JavaScript">
var map,infowindow;
function initMap() { 
	var myOptions = {
	  zoom: 9,
	  center: new google.maps.LatLng(15.000682,103.728207),
	};

	 map = new google.maps.Map(document.getElementById('map_canvas'),
		myOptions);


	 infowindow = new google.maps.InfoWindow({
		map:map,
	});


	selectLocation();
}


var icons = {
		1:{
			icon: 'icon/Hotel.png'
		},
		2:{
			icon: 'icon/Food.png'
		},
		3:{
			icon: 'icon/Food.png'
		},
		4:{
			icon: 'icon/Food.png'
		},
		5:{
			icon: 'icon/Food.png'
		},
		6:{
			icon: 'icon/Food.png'
		},
		7:{
			icon: 'icon/Food.png'
		},
		8:{
			icon: 'icon/Food.png'
		},
		9:{
			icon: 'icon/Food.png'
		},
		10:{
			icon: 'icon/Food.png'
		},
		11:{
			icon: 'icon/Food.png'
		},
		12:{
			icon: 'icon/Food.png'
		},
		13:{
			icon: 'icon/Food.png'
		},
		14:{
			icon: 'icon/Food.png'
		},
		15:{
			icon: 'icon/Food.png'
		},
		16:{
			icon: 'icon/Food.png'
		},
		17:{
			icon: 'icon/Food.png'
		},
		18:{
			icon: 'icon/Food.png'
		}

};

var json;
function selectLocation(){
	$.ajax({
		type:"POST",
		url: "json-location.php",
	}).done(function(text){
		json = $.parseJSON(text);
		for(var i = 0 ;i<json.length;i++){
			var lat = json[i].lat;
			var lng = json[i].lng;
			var location_name =  json[i].location_name;
			var latlng = new google.maps.LatLng(lat,lng);
			var type = json[i].location_type;
            var location_detail = json[i].location_detail;
			var image_name = json[i].image_name;

            var html = '<h5>'+ location_name +'</h5>';
				html += '<img height="150px" src="images/'+ image_name +'" />';
                
			var id = i;
			var makeroption = {
				map:map,
				html:id,
				position:latlng,
				icon: icons[type].icon
				};
			var marker = new google.maps.Marker(makeroption);

			google.maps.event.addListener(marker,'click',function(e){
				infowindow.setContent(json[this.html].location_name);	
				infowindow.open(map,this);
				showDetail(this.html);
			});


            
		}
	});
}

function showDetail(id){
	$("#location_name").val(json[id].location_name);
	$("#lat").val(json[id].lat);
	$("#lng").val(json[id].lng);
	$("#location_type").val(json[id].location_type_th);
    $("#location_detail").val(json[id].location_detail);
    $("#image_name").val(json[id].image_name);
}


</script>
</head>
<body>


  <nav class="navbar fixed-top navbar-inverse bg-inverse">
  <a class="navbar-brand" href="#">GIS</a>
 </nav>


	<div class="row">

		<div class="col-8">
		<div id="map_canvas" style="width:100%;height:100vh"></div>
		</div>

		<div class="col-4">
		<div style="margin-top:70px">
		
				<form>
						<div class="form-group">
						  <label for="location_name">Location Name</label>
						  <input type="text" class="form-control" id="location_name" placeholder="location name">
						</div>
						<div class="form-group">
								<label for="location_type">Location Type</label>
								<input type="text" class="form-control" id="location_type" placeholder="location type">
							</div>

                        <div class="form-group">
								<label for="location_type">Location Detail</label>
								<input type="text" class="form-control" id="location_detail" placeholder="location detail">
							</div>


						<div class="form-group">
								<label for="lat">Lat</label>
								<input type="text" class="form-control" id="lat" placeholder="Lat">
						</div>
						<div class="form-group">
							<label for="Lng">Lng</label>
							<input type="text" class="form-control" id="lng" placeholder="Lng">
						</div>

                        <div class="col-sm-3">
                        <div class="card">
                            <img class="card-img-top" src="images/<?php echo $row['image_name']; ?>" alt="Avatar" style="width:100%">
                        </div>
                        </div>

					</form>
                    
	

		</div>
		</div>

	</div>

	</body>
	</html>