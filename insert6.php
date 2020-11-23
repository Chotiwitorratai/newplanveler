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

print_r($_POST);
if(move_uploaded_file($path,$newPath.$new_file_name)){

    $arr = array(
        "location_id" => uniqid(),
        "trip_name" => $_POST["trip_name"],
        "location_name" => $_POST["location_name"],

        "travel_type" => $_POST["travel_type"],
        "location_detail" => $_POST["location_detail"],
        "time_use" => $_POST["time_use"],
        "time_travel" => $_POST["time_travel"],
        "image_name" => $new_file_name
    );
    $rs = $mysql->J_Insert($arr,"tbl_location");

    $arr = array(
        "trip_id" => uniqid(),
        "trip_name" => $_POST["trip_name"],
    );
    $rs = $mysql->J_Insert($arr,"tbl_trip");

}



$mysql->J_Close();
?>