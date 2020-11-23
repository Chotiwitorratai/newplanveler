<?php
include("config.php");
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();




for ($i = 1; $i < $_POST["hdnLine"]; $i++) {
    if ($_POST["location_name$i"] != "") {

        $arr = array(
            "location_id" => uniqid(),
            "trip_name" => $_POST["trip_name"],
            "location_name" => $_POST["location_name$i"],

            // "travel_type" => $_POST["travel_type"],
            "location_detail" => $_POST["location_detail$i"],
            "time_use" => $_POST["time_use$i"],
            "time_travel" => $_POST["time_travel$i"],

        );
        $rs = $mysql->J_Insert($arr, "tbl_location");

        $arr = array(
            "trip_id" => uniqid(),
            "trip_name" => $_POST["trip_name"],
        );
        $rs = $mysql->J_Insert($arr, "tbl_trip");
    }
}



$mysql->J_Close();
