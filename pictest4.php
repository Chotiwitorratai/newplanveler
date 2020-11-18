<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE user set username='" . $_POST['username'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', tel='" . $_POST['tel'] . "' ,job='" . $_POST['job'] . "',image_user='" . $_POST['image_user'] . "' WHERE username='" . $_POST['username'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_GET['username'] . "'");

$row= mysqli_fetch_array($result);

?>
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
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApC72fp4CYzOLabrQK6IOyfxzMRZq2dgg&callback=initMap&language=th"
type="text/javascript"></script>

<script>
function saveLocation(){

var firstname  = $("#firstname").val();
var username  = $("#username").val();
var lastname  = $("#lastname").val();
var job  = $("#job").val();
var tel  = $("#tel").val();

var imgname = $('input[type=file]').val();
var size = $('#image_file')[0].files[0].size;
var ext = imgname.substr((imgname.lastIndexOf('.')+1));
	ext = ext.toLowerCase();
if(ext == 'jpg'){
	if(size <= 1000000){
			
		
		$.ajax({
			method:"POST",
			url:"insert3.php",
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


		
				<form enctype="multipart/form-data">

                        <div class="form-group">
						  <label for="username">Username</label>
						  <input type="text" class="form-control" id="username" name="username" placeholder="username" value="<?php echo $row['username']; ?>">
						</div>
                        
                        <div class="form-group">
						  <label for="firstname">firstname</label>
						  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname" value="<?php echo $row['firstname']; ?>">
						</div>

                        <div class="form-group">
						  <label for="lastname">lastname</label>
						  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname" value="<?php echo $row['lastname']; ?>">
						</div>

                        <div class="form-group">
						  <label for="tel">tel</label>
						  <input type="text" class="form-control" id="tel" name="tel" placeholder="tel" value="<?php echo $row['tel']; ?>">
						</div>

                        <div class="form-group">
						  <label for="job">job</label>
						  <input type="text" class="form-control" id="job" name="job" placeholder="job" value="<?php echo $row['job']; ?>">
						</div>
						
						<div class="form-group">
							<label for="image_file">Image File</label>
							<input type="file" id="image_file" name="image_file" onchange="readURL(this);">
							<img id="blah" src="#" alt="your image" />
						</div>
						
					

						<button type="button" onclick="saveLocation()" class="btn btn-primary">Submit</button>
					  </form>
	


	</body>
	</html>