<?php /* Imager v1.0; Banchar Paseelatesang (banchar_pa@yahoo.com); All rights reserved */
function image_load($file_name) {
	$type = image_type($file_name);
	if($type=="gif") {
		return imagecreatefromgif($file_name);
	}
	else if($type=="png") {
		return imagecreatefrompng($file_name);
	}
	else if($type=="jpg" || $type=="jpeg" || $type=="pjpeg") {
		return imagecreatefromjpeg($file_name);
	}	
}
function image_upload($input_name, $index="") {
	$f = $_FILES[$input_name];
	if(is_uploaded_file($f['tmp_name']) || is_uploaded_file($f['tmp_name'][$index])) {
		$t = (!is_numeric($index))?$f['type']:$f['type'][$index];
		if($t=="image/gif") {
			return (!is_numeric($index))?imagecreatefromgif($f['tmp_name']):imagecreatefromgif($f['tmp_name'][$index]);
		}
		else if($t=="image/png") {
			return (!is_numeric($index))?imagecreatefrompng($f['tmp_name']):imagecreatefrompng($f['tmp_name'][$index]);
		}
		else if($t=="image/jpg" || $t=="image/jpeg" || $t=="image/pjpeg") {
			return (!is_numeric($index))?imagecreatefromjpeg($f['tmp_name']):imagecreatefromjpeg($f['tmp_name'][$index]);
		}			
	}	
}
function image_type($file_name) {
	$info = pathinfo($file_name);
	return strtolower($info['extension']);
}
function image_mime_type($file_name) {
	$type = image_type($file_name);
	if($type=="jpg" || $type=="jpeg" || $type=="pjpeg") {
		$type = "jpeg";
	}
	return "image/$type";
}
function image_save($img, $file_name) {
	$type = image_type($file_name);
	if($type=="gif") {
		imagegif($img, $file_name);
	}
	else if($type=="jpg" || $type=="jpeg" || $type=="pjpeg") {
		imagejpeg($img, $file_name);
	}
	else if($type=="png") {
		imagepng($img, $file_name);
	}	
}
function image_to_jpg($img) {
	$w = imagesx($img);
	$h = imagesy($img);
	$new_img = imagecreatetruecolor($w, $h);
	$bg = imagecolorallocate($new_img, 255, 255, 255);
	imagefill($new_img, 0, 0, $bg);
	imagecopy($new_img, $img, 0, 0, 0, 0, $w, $h);
	return $new_img;
}
function image_load_db($data) {
	return imagecreatefromstring($data);
}
function image_store_db($img, $img_type) {
	$t = strtolower($img_type);
	ob_start();
	if($t=="gif"||$t=="image/gif") {
		imagegif($img);
	}
	else if($t=="png"||$t=="image/png") {
		imagepng($img);
	}
	else if($t=="jpg"||$t=="image/jpg"||$t=="jpeg"||$t=="image/jpeg"||$t=="pjpeg"||$t=="image/pjpeg") {
		imagejpeg($img,null,100);
	}
	$content = ob_get_contents();
	ob_end_clean();
	return addslashes($content);
}

?>