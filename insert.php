<?php
include("config.php");
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();
$arr = array(
    "location_name" => $_POST["location_name"],
    "lat" => $_POST["lat"],
    "lng" => $_POST["lng"],
    "location_type" => $_POST["location_type"]
);
$rs = $mysql->J_Insert($arr,"tbl_location");
$mysql->J_Close();
?>