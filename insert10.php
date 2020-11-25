<head>


</head>

<?php
include("config.php");
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();

$mysql->J_Close();



$objConnect = mysqli_connect("localhost", "root", "", "db_gis") or die("Error Connect to Database");

for ($i = 1; $i < $_POST["hdnLine"]; $i++) {

    // $path = $_FILES["image_name$i"]["tmp_name"];
    // $file_name = $_FILES["image_name$i"]["name"];
    // $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    // $new_file_name = uniqid() . "." . $ext;
    // $newPath = "images/";
    // $new_file_namei = $new_file_name . $i;

    $path_trip = $_FILES["image_trip_name"]["tmp_name"];
    $file_name_trip = $_FILES["image_trip_name"]["name"];
    $ext = pathinfo($file_name_trip, PATHINFO_EXTENSION);
    $new_file_name_trip = time(). "." . $ext;
    $newPath_trip = "images/";

    $path = $_FILES["image_name$i"]["tmp_name"];
    $file_name = $_FILES["image_name$i"]["name"];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $new_file_name = uniqid() . "." . $ext;
    $newPath = "images/";
    $new_file_namei = $new_file_name . $i;



    print_r($new_file_namei);

    if ($_POST["location_name$i"] != "") {



        $strSQL = "INSERT INTO tbl_location ";
        $strSQL .= "(location_name,location_detail,trip_name,image_name,image_trip_name,travel_type,time_use,time_travel) ";
        $strSQL .= "VALUES ";

        $strSQL .= "('" . $_POST["location_name$i"] . "','" . $_POST["location_detail$i"] . "', ";
        $strSQL .= "'" . $_POST["trip_name"] . "','$new_file_name','$new_file_name_trip', ";
        $strSQL .= "'" . $_POST["travel_type$i"] . "', ";
        $strSQL .= "'" . $_POST["time_use$i"] . "','" . $_POST["time_travel$i"] . "' )";


        $objQuery = mysqli_query($objConnect, $strSQL);
        print_r($_POST);
        print_r($new_file_name);
    }
    move_uploaded_file($path, $newPath . $new_file_name);
    move_uploaded_file($path_trip, $newPath_trip . $new_file_name_trip);
}



echo "Save Done.  Click <a href='listcheck.php'>here</a> to view.";

mysqli_close($objConnect);
