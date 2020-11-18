<?php
include("config2.php");
include("mysql2.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();

$path = $_FILES["image_file"]["tmp_name"];
$file_name = $_FILES["image_file"]["name"];
$ext = pathinfo($file_name,PATHINFO_EXTENSION);
$new_file_name = time().".".$ext;
$newPath = "imageuser/";

if(move_uploaded_file($path,$newPath.$new_file_name)){

    $arr = array(
        "firstname" => $_POST["firstname"],
        "username" => $_POST["username"],
        "lastname" => $_POST["lastname"],
        "tel" => $_POST["tel"],
        "job" => $_POST["job"],
       
        "image_user" => $new_file_name
    );

    $key = array("username");

    $rs = $mysql->J_Update($arr,$key,"user");
}



$mysql->J_Close();
?>