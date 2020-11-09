<?php
include("config.php");
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();

$path = $_FILES["image_file"]["tmp_name"];
$file_name = $_FILES["image_file"]["name"];
$ext = pathinfo($file_name,PATHINFO_EXTENSION);
$new_file_name = time().".".$ext;
$newPath = "images/";

if(move_uploaded_file($path,$newPath.$new_file_name)){

    $arr = array(
        "location_name" => $_POST["location_name"],
        "lat" => $_POST["lat"],
        "lng" => $_POST["lng"],
        "location_type" => $_POST["location_type"],
        "travel_type" => $_POST["travel_type"],
        "location_detail" => $_POST["location_detail"],
        "time_use" => $_POST["time_use"],
        "image_name" => $new_file_name
    );
    $rs = $mysql->J_Insert($arr,"tbl_location");
}



$mysql->J_Close();
?>