<head>

    <!-- <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function saveLocation() {

            var location_name = $("#location_name").val();
            var location_type = $("#location_type option:selected").val();
            var travel_type = $("#travel_type option:selected").val();
            var location_detail = $("textarea#location_detail").val();
            var time_use = $("time_use").val();


            var imgname = $('input[type=file]').val();
            var size = $('#image_file')[0].files[0].size;
            var ext = imgname.substr((imgname.lastIndexOf('.') + 1));
            ext = ext.toLowerCase();
            if (ext == 'jpg') {
                if (size <= 1000000) {


                    $.ajax({
                        method: "POST",
                        url: "insert2.php",
                        data: new FormData($('form')[0]),
                        enctype: 'multipart/form-data',
                        cache: false,
                        contentType: false,
                        processData: false
                    }).done(function() {
                        alert("OK");
                    });

                } else {
                    alert('ขนาดไฟล์ใหญ่เกินกว่าที่กำหนด');
                }
            } else {
                alert('ไฟล์ที่เลือกต้องเป็นชนิดรูปภาพเท่านั้น');
            }


        }

        function MM_jumpMenu(targ, selObj, restore) { //v3.0
            eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
            if (restore) selObj.selectedIndex = 0;
        }
    </script> -->

</head>

<?php
include("config.php");
include("mysql.php");
$mysql = new J_MYSQL;
$mysql->J_Connect();
$mysql->set_char_utf8();

// $path = $_FILES["image_name"]["tmp_name"];
// $file_name = $_FILES["image_name"]["name"];
// $ext = pathinfo($file_name, PATHINFO_EXTENSION);
// $new_file_name = time() . "." . $ext;
// $newPath = "images/";



// print_r($new_file_name);

// for ($i = 1; $i < $_POST["hdnLine"]; $i++) {
//     if ($_POST["location_name$i"] != "") {

//         $new_file_namei = $new_file_name . $i;

//         $arr = array(

//             "image_name" => $new_file_name
//         );


//         $key = array("location_name$i");
//         print_r( $new_file_namei);
//         print_r( $key);
//         print_r( $_POST["hdnLine"]);

//         $rs = $mysql->J_Update($arr, $key, "tbl_location");

//     }
// }


$mysql->J_Close();


// Check if image file is a actual image or fake image

// if (isset($_POST["submit"])) {
//     print_r($_POST);
//     $check = getimagesize($_FILES["image_name"]["tmp_name"]);
//     if ($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }


$objConnect = mysqli_connect("localhost", "root", "", "db_gis") or die("Error Connect to Database");
// $objDB = mysqli_select_db("db_gis");


for ($i = 1; $i < $_POST["hdnLine"]; $i++) {

    $path = $_FILES["image_name$i"]["tmp_name"];
    $file_name = $_FILES["image_name$i"]["name"];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $new_file_name = time() . "." . $ext;
    $newPath = "images/";
    $new_file_namei = $new_file_name . $i;

    print_r($new_file_namei);

    if ($_POST["location_name$i"] != "") {

        

        $strSQL = "INSERT INTO tbl_location ";
        $strSQL .= "(location_name,location_detail,trip_name,image_name,time_use,time_travel) ";
        $strSQL .= "VALUES ";

        $strSQL .= "('" . $_POST["location_name$i"] . "','" . $_POST["location_detail$i"] . "', ";
        $strSQL .= "'" . $_POST["trip_name"] . "','$new_file_name', ";

        $strSQL .= "'" . $_POST["time_use$i"] . "','" . $_POST["time_travel$i"] . "' )";


        $objQuery = mysqli_query($objConnect, $strSQL);
        print_r($_POST);
        print_r($new_file_name);
        
    }
    move_uploaded_file($path, $newPath . $new_file_name);
    // if (move_uploaded_file($path, $newPath . $new_file_name)) {

    //     $arr = array(

    //         "image_name" => $new_file_name
    //     );
    //     $rs = $mysql->J_Insert($arr, "tbl_location");
    // }
}




echo "Save Done.  Click <a href='listcheck.php'>here</a> to view.";

mysqli_close($objConnect);
