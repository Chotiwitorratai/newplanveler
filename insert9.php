<?php
include("config.php");
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();

$objConnect = mysqli_connect("localhost", "root", "","db_gis") or die("Error Connect to Database");
	// $objDB = mysqli_select_db("db_gis");

// print_r($_POST);

    if ($_POST["trip_name"] != "") {


            
            $strSQL = "INSERT INTO tbl_trip ";
            $strSQL .="(trip_name,group_location_id) ";
            $strSQL .="VALUES ";
            
            $strSQL .="('".$_POST["trip_name"]."','location_id') ";

			// $strSQL .=",'".$_POST["time_travel$i"]."','".$_POST["travel_type$i"]."', ";
			// $strSQL .="'".$_POST["txtUsed$i"]."') ";
            $objQuery = mysqli_query($objConnect,$strSQL);
            print_r($_POST);
            

            // if ($_POST["trip_name"] != "") {

            //     $strSQL = "INSERT INTO tbl_trip ";
            //     $strSQL .="(trip_name,group_location_id) ";
            //     $strSQL .="VALUES ";
                
            //     $strSQL .="('".$_POST["trip_name"]."','location_id$i') ";
            
            
            
            //     // $strSQL .=",'".$_POST["time_travel$i"]."','".$_POST["travel_type$i"]."', ";
            //     // $strSQL .="'".$_POST["txtUsed$i"]."') ";
            //     $objQuery = mysqli_query($objConnect,$strSQL);
            //     print_r($_POST);
            
            
            
            
            // }

       
    }





echo "Save Done.  Click <a href='listcheck.php'>here</a> to view.";

mysqli_close($objConnect);
