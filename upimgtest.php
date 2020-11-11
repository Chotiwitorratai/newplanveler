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
 <script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="jquery-3.2.1.min.js" ></script>

<script>

function saveLocation(){

var location_name  = $("#location_name").val();
var location_type  = $("#location_type option:selected").val();
var travel_type  = $("#travel_type option:selected").val();
var location_detail = $("textarea#location_detail").val();
var time_use = $("time_use").val();


var imgname = $('input[type=file]').val();
var size = $('#image_file')[0].files[0].size;
var ext = imgname.substr((imgname.lastIndexOf('.')+1));
	ext = ext.toLowerCase();
if(ext == 'jpg'){
	if(size <= 1000000){
			
		
		$.ajax({
			method:"POST",
			url:"insert2.php",
			data: new FormData($('form')[0]),
			enctype: 'multipart/form-data',
			cache:false,
			contentType:false,
			processData:false
		}).done(function(){
			alert("OK");
		});
		
	}else{
		alert('ขนาดไฟล์ใหญ่เกินกว่าที่กำหนด');
	}
}else{
	alert('ไฟล์ที่เลือกต้องเป็นชนิดรูปภาพเท่านั้น');
}


}
</script>
</head>

<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

    <body>
<nav class="navbar fixed-top navbar-inverse bg-inverse">
  <a class="navbar-brand" href="#">Planveler</a>
 </nav>


	<div class="row">

		<div class="col-8">
		<div id="map_canvas" style="width:100%;height:100vh"></div>
		</div>

		<div class="col-4">
		<div style="margin-top:70px">
		
				<form enctype="multipart/form-data">
						<div class="form-group">
						  <label for="location_name">Location Name</label>
						  <input type="text" class="form-control" id="location_name" name="location_name" placeholder="location name">
						</div>

						<div class="form-group">
								<label for="location_name">Location Type</label>
						<select class="form-control" id="location_type" name="location_type">
								<option value="1">โรงแรม</option>
								<option value="2">ร้านอาหาร</option>
								<option value="3">สถานที่ท่องเที่ยว</option>
								<option value="4">สวนสนุก</option>
								<option value="5">ถ้ำ</option>
								<option value="6">เขื่อน</option>
								<option value="7">ทุ่งหญ้า</option>
								<option value="8">เกาะ</option>
								<option value="9">ตลาด</option>
								<option value="10">เขา</option>
								<option value="11">พิพิธภัณฑ์</option>
								<option value="12">แม่น้ำ</option>
								<option value="13">ทะเล</option>
								<option value="14">วัด</option>
								<option value="15">ต้นไม้</option>
								<option value="16">น้ำตก</option>
								<option value="17">สวนน้ำ</option>
								<option value="18">สวนสัตว์</option>
							  </select>
							</div>
						
						<div class="form-group">
							<label for="Lng">Location detail</label>
							<textarea id="location_detail" name="location_detail" class="form-control" rows="3"></textarea>
						</div>

						<div class="form-group">
							<label for="image_file">Image File</label>
							<input type="file" id="image_file" name="image_file" onchange="readURL(this);">
							<img id="blah" src="#" alt="your image" />
						</div>

                        <div class="form-group">
								<label for="location_name">รูปแบบการเดินทาง</label>
						<select class="form-control" id="travel_type" name="travel_type">
								<option value="1">รถยนต์</option>
								<option value="2">รถไฟ</option>
								<option value="3">เรือ</option>
								<option value="4">เดิน</option>
								<option value="5">จักรยาน</option>
							  </select>
							</div>
                        
                        <div class="form-group">
							<label for="Lng">ระยะเวลาในการเดินทาง</label>
							<textarea id="time_use" name="time_use" class="form-control" rows="1"></textarea>
						</div>

						<button type="button" onclick="saveLocation()" class="btn btn-primary">Submit</button>
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
 <script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="jquery-3.2.1.min.js" ></script>

<script>

function saveLocation(){

var location_name  = $("#location_name").val();
var location_type  = $("#location_type option:selected").val();
var travel_type  = $("#travel_type option:selected").val();
var location_detail = $("textarea#location_detail").val();
var time_use = $("time_use").val();


var imgname = $('input[type=file]').val();
var size = $('#image_file')[0].files[0].size;
var ext = imgname.substr((imgname.lastIndexOf('.')+1));
	ext = ext.toLowerCase();
if(ext == 'jpg'){
	if(size <= 1000000){
			
		
		$.ajax({
			method:"POST",
			url:"insert2.php",
			data: new FormData($('form')[0]),
			enctype: 'multipart/form-data',
			cache:false,
			contentType:false,
			processData:false
		}).done(function(){
			alert("OK");
		});
		
	}else{
		alert('ขนาดไฟล์ใหญ่เกินกว่าที่กำหนด');
	}
}else{
	alert('ไฟล์ที่เลือกต้องเป็นชนิดรูปภาพเท่านั้น');
}


}
</script>
</head>

<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

    <body>
<nav class="navbar fixed-top navbar-inverse bg-inverse">
  <a class="navbar-brand" href="#">Planveler</a>
 </nav>


	<div class="row">

		<div class="col-8">
		<div id="map_canvas" style="width:100%;height:100vh"></div>
		</div>

		<div class="col-4">
		<div style="margin-top:70px">
		
				<form enctype="multipart/form-data">
						<div class="form-group">
						  <label for="location_name">Location Name</label>
						  <input type="text" class="form-control" id="location_name" name="location_name" placeholder="location name">
						</div>

						<div class="form-group">
								<label for="location_name">Location Type</label>
						<select class="form-control" id="location_type" name="location_type">
								<option value="1">โรงแรม</option>
								<option value="2">ร้านอาหาร</option>
								<option value="3">สถานที่ท่องเที่ยว</option>
								<option value="4">สวนสนุก</option>
								<option value="5">ถ้ำ</option>
								<option value="6">เขื่อน</option>
								<option value="7">ทุ่งหญ้า</option>
								<option value="8">เกาะ</option>
								<option value="9">ตลาด</option>
								<option value="10">เขา</option>
								<option value="11">พิพิธภัณฑ์</option>
								<option value="12">แม่น้ำ</option>
								<option value="13">ทะเล</option>
								<option value="14">วัด</option>
								<option value="15">ต้นไม้</option>
								<option value="16">น้ำตก</option>
								<option value="17">สวนน้ำ</option>
								<option value="18">สวนสัตว์</option>
							  </select>
							</div>
						
						<div class="form-group">
							<label for="Lng">Location detail</label>
							<textarea id="location_detail" name="location_detail" class="form-control" rows="3"></textarea>
						</div>

						<div class="form-group">
							<label for="image_file">Image File</label>
							<input type="file" id="image_file" name="image_file" onchange="readURL(this);">
							<img id="blah" src="#" alt="your image" />
						</div>

                        <div class="form-group">
								<label for="location_name">รูปแบบการเดินทาง</label>
						<select class="form-control" id="travel_type" name="travel_type">
								<option value="1">รถยนต์</option>
								<option value="2">รถไฟ</option>
								<option value="3">เรือ</option>
								<option value="4">เดิน</option>
								<option value="5">จักรยาน</option>
							  </select>
							</div>
                        
                        <div class="form-group">
							<label for="Lng">ระยะเวลาในการเดินทาง</label>
							<textarea id="time_use" name="time_use" class="form-control" rows="1"></textarea>
						</div>

						<button type="button" onclick="saveLocation()" class="btn btn-primary">Submit</button>
					  </form>
	

		</div>
		</div>

	</div>

	</body>
>>>>>>> 3a768d8729b0e710957054f7e46a8a661d25b3ba
</html>