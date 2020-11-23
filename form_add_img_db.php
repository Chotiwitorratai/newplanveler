<?php
error_reporting( error_reporting() & ~E_NOTICE );
include "condb.php";
if(is_uploaded_file($_FILES['file']['tmp_name']))  {
	$error =  $_FILES['file']['error'];
	if($error == 0) {
		include "imager.php";
		$img = image_upload('file');
		$img = image_to_jpg($img);
		//$img = image_resize_max($img, 300, 300); 
		$file = image_store_db($img, "image/jpeg");
		$sql = "INSERT INTO images VALUES('',  '$file')";
		mysqli_query($link, $sql);
	}
}

//แสดงรูปล่าสุด
$sql2 = "SELECT MAX(img_id) as id FROM images";
$query2	= mysqli_query($link, $sql2);
$row = mysqli_fetch_array($query2);
 
$id  = $row["id"];
 

 Header("Location: read_img.php?id=$id");


mysqli_close($link);
?>