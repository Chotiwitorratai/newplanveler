<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

<title>Planveler</title>

  <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css" crossorigin="anonymous">

<script type="text/javascript" src="jquery-3.2.1.min.js" ></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApC72fp4CYzOLabrQK6IOyfxzMRZq2dgg&callback=initMap"
type="text/javascript"></script>
<style>
body {
  margin: 0;
  background-color: #e3dbd1;
  font-family: Arial, Helvetica, sans-serif;
}
</style>

<script language="JavaScript">
var map,infowindow;



var icons = {
		1:{
			icon: 'icon/Hotel.png'
		},
		2:{
			icon: 'icon/Restaurant2.png'
		},
		3:{
			icon: 'icon/Restaurant2.png'
		},
		4:{
			icon: 'icon/Restaurant2.png'
		},
		5:{
			icon: 'icon/Restaurant2.png'
		},
		6:{
			icon: 'icon/Restaurant2.png'
		},
		7:{
			icon: 'icon/Restaurant2.png'
		},
		8:{
			icon: 'icon/Restaurant2.png'
		},
		9:{
			icon: 'icon/Restaurant2.png'
		},
		10:{
			icon: 'icon/Restaurant2.png'
		},
		11:{
			icon: 'icon/Restaurant2.png'
		},
		12:{
			icon: 'icon/Restaurant2.png'
		},
		13:{
			icon: 'icon/Restaurant2.png'
		},
		14:{
			icon: 'icon/Restaurant2.png'
		},
		15:{
			icon: 'icon/Restaurant2.png'
		},
		16:{
			icon: 'icon/Restaurant2.png'
		},
		17:{
			icon: 'icon/Restaurant2.png'
		},
		18:{
			icon: 'icon/Restaurant2.png'
		}

};


function sarchLocation(){
	var keyword = $("#keyword").val();
	$.ajax({
		type:"POST",
		data: {keyword:keyword},
		url: "json-search2.php",
	}).done(function(text){
		var json = $.parseJSON(text);
		if(json.length > 0){
			removeMarker();
			var t="";
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
			var makeroption = {
				map:map,
				html:html,
				position:latlng,
				icon: icons[type].icon
				};
			var marker = new google.maps.Marker(makeroption);
			markers.push(marker);	
			google.maps.event.addListener(marker,'click',function(e){
				infowindow.setContent(this.html);
				infowindow.open(map,this);
			});

			 t += 			'<div class="control-group">';
			t +='					<div class="media">';
					if(image_name != ''){
						t +='	<img class="mr-3" height="64px" src="images/'+ image_name +'" alt="Generic placeholder image">';
					}else{
						t +='	<img class="mr-3" src="images/64.svg" alt="Generic placeholder image">';
					}
			

			t +='						<div class="media-body">';
			t +='							<h5 class="mt-0">'+ json[i].location_name + '</h5>';
			t += '<div>'+json[i].location_detail+'</div>';
			t +=  '<span class="badge badge-info">'+json[i].location_type_th+'<span>';
			t +='						</div>';
			t +='					</div>';
			t +='			</div> <hr/>';
			$("#divDetail").html(t);

		}

			$("#divContent").css("display","");


			

		}else{
			$("#divDetail").html('ไม่พบข้อมูล');
		}


	});
}

var markers = [];
function removeMarker(){
for(var i =0;i<markers.length;i++){
markers[i].setMap(null);
}
markers = [];
}


</script>
</head>
<body>


  <nav class="navbar fixed-top navbar-inverse bg-inverse">
  <a class="navbar-brand" href="#">Planveler</a>
 </nav>


	<div class="row">

		<div class="col-8">
		<div id="map_canvas" style="width:100%;height:100vh"></div>
		</div>

		<div class="col-4">
		<div style="margin-top:70px;width:95%">
		
				<form >
					
						<div class="form-group row">
							
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="keyword" placeholder="keyword">
								</div>
								<button type="button" onclick="sarchLocation()" class="col-sm-2 btn btn-primary">ค้นหา</button>
						</div>
				
						<div id="divContent" style="display:none">
						<fieldset >
								<legend>ผลการค้นหา</legend>
								<div id="divDetail"></div>
						</fieldset>
					</div>
				</form>
	

	


		</div>
		</div>

	</div>

	</body>
=======
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

<title>Planveler</title>

  <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css" crossorigin="anonymous">

<script type="text/javascript" src="jquery-3.2.1.min.js" ></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApC72fp4CYzOLabrQK6IOyfxzMRZq2dgg&callback=initMap"
type="text/javascript"></script>
<style>
body {
  margin: 0;
  background-color: #e3dbd1;
  font-family: Arial, Helvetica, sans-serif;
}
</style>

<script language="JavaScript">
var map,infowindow;



var icons = {
		1:{
			icon: 'icon/Hotel.png'
		},
		2:{
			icon: 'icon/Restaurant2.png'
		},
		3:{
			icon: 'icon/Restaurant2.png'
		},
		4:{
			icon: 'icon/Restaurant2.png'
		},
		5:{
			icon: 'icon/Restaurant2.png'
		},
		6:{
			icon: 'icon/Restaurant2.png'
		},
		7:{
			icon: 'icon/Restaurant2.png'
		},
		8:{
			icon: 'icon/Restaurant2.png'
		},
		9:{
			icon: 'icon/Restaurant2.png'
		},
		10:{
			icon: 'icon/Restaurant2.png'
		},
		11:{
			icon: 'icon/Restaurant2.png'
		},
		12:{
			icon: 'icon/Restaurant2.png'
		},
		13:{
			icon: 'icon/Restaurant2.png'
		},
		14:{
			icon: 'icon/Restaurant2.png'
		},
		15:{
			icon: 'icon/Restaurant2.png'
		},
		16:{
			icon: 'icon/Restaurant2.png'
		},
		17:{
			icon: 'icon/Restaurant2.png'
		},
		18:{
			icon: 'icon/Restaurant2.png'
		}

};


function sarchLocation(){
	var keyword = $("#keyword").val();
	$.ajax({
		type:"POST",
		data: {keyword:keyword},
		url: "json-search2.php",
	}).done(function(text){
		var json = $.parseJSON(text);
		if(json.length > 0){
			removeMarker();
			var t="";
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
			var makeroption = {
				map:map,
				html:html,
				position:latlng,
				icon: icons[type].icon
				};
			var marker = new google.maps.Marker(makeroption);
			markers.push(marker);	
			google.maps.event.addListener(marker,'click',function(e){
				infowindow.setContent(this.html);
				infowindow.open(map,this);
			});

			 t += 			'<div class="control-group">';
			t +='					<div class="media">';
					if(image_name != ''){
						t +='	<img class="mr-3" height="64px" src="images/'+ image_name +'" alt="Generic placeholder image">';
					}else{
						t +='	<img class="mr-3" src="images/64.svg" alt="Generic placeholder image">';
					}
			

			t +='						<div class="media-body">';
			t +='							<h5 class="mt-0">'+ json[i].location_name + '</h5>';
			t += '<div>'+json[i].location_detail+'</div>';
			t +=  '<span class="badge badge-info">'+json[i].location_type_th+'<span>';
			t +='						</div>';
			t +='					</div>';
			t +='			</div> <hr/>';
			$("#divDetail").html(t);

		}

			$("#divContent").css("display","");


			

		}else{
			$("#divDetail").html('ไม่พบข้อมูล');
		}


	});
}

var markers = [];
function removeMarker(){
for(var i =0;i<markers.length;i++){
markers[i].setMap(null);
}
markers = [];
}


</script>
</head>
<body>


  <nav class="navbar fixed-top navbar-inverse bg-inverse">
  <a class="navbar-brand" href="#">Planveler</a>
 </nav>


	<div class="row">

		<div class="col-8">
		<div id="map_canvas" style="width:100%;height:100vh"></div>
		</div>

		<div class="col-4">
		<div style="margin-top:70px;width:95%">
		
				<form >
					
						<div class="form-group row">
							
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="keyword" placeholder="keyword">
								</div>
								<button type="button" onclick="sarchLocation()" class="col-sm-2 btn btn-primary">ค้นหา</button>
						</div>
				
						<div id="divContent" style="display:none">
						<fieldset >
								<legend>ผลการค้นหา</legend>
								<div id="divDetail"></div>
						</fieldset>
					</div>
				</form>
	

	


		</div>
		</div>

	</div>

	</body>
>>>>>>> 3a768d8729b0e710957054f7e46a8a661d25b3ba
	</html>