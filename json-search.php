<?php
include("config.php");
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();

$sql = "select l.*,lt.location_type_th from tbl_location l left join tbl_location_type lt on l.location_type = lt.id ";
$sql .= "where l.location_name like '%".$_POST["keyword"]."%'";
$rs = $mysql->J_Execute($sql);
$arr = array();

foreach($rs as $read){
    $arr2 = array();
    $arr2["id"] = $read["id"];
    $arr2["lat"] = $read["lat"];
    $arr2["lng"] = $read["lng"];
    $arr2["location_name"] = $read["location_name"];
    $arr2["location_type"] = $read["location_type"];
    $arr2["location_type_th"] = $read["location_type_th"];
    array_push($arr,$arr2);
}
echo json_encode($arr);

$mysql->J_Close();


?>