<html>

<head>
    <title>Trip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,height=device-height">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../extentions/css/planveler.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="icon" href="pic/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="pic/favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="mySidenav" class="sidenav" onclick="event.stopPropagation();">
        <span style="font-size:35px;cursor:pointer;position:absolute;top: 0;right: 5;" onclick="closeNav()">&times;</span>
        <div style="display: block; color: #948BFF; text-align: center;">ชื่อเราเองจ้า</div>

        <a href="mainpage.html">หน้าหลัก</a>
        <a href="mainpage.html">รายการที่บันทึก</a>
        <a href="mainpage.html">รายการทริปที่แนะนำ</a>
        <a href="Howtouse.html">แนะนำการใช้งาน</a>
        <a href="planveler.html">เกี่ยวกับเรา</a>
        <a href="help.html">คำถามที่พบบ่อย</a>


        <div style="position: absolute;bottom: 0px;">
            <p>
                <p>
                    <p></p><a href="#">Login</a>
                </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="navbar">
                <span style="font-size:35px;cursor:pointer;" onclick="openNav(event)">&#9776;</span>

                <span class="icon"> <a href="mainpage.html">
                        <img src="pic/66.png" width="160" height="90" alt="" loading="lazy">
                    </a>
                </span>

                <div class="col-lg-2 col-md-2 col-lg-2 offset-lg-6 offset-9" style="padding-right:20px;">
                    <div class="row" style="float: right;">
                        <div class="loginbar">
                        </div>
                    </div>

                    <div class="row" style="float: right;margin-right: auto;">
                        <div class="col-auto">
                            <div class="loginbar">
                                <a href="register.html" style=><img src="pic/Group 5.png" alt="Register"></a>
                                <a href="Login.html" style=><img src="pic/Group 7.png" alt="Login"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

    session_start();
    include_once 'database2.php';
    if (count($_POST) > 0) {
        mysqli_query($conn, "UPDATE tbl_location set trip_name='" . $_POST['trip_name'] . "',comment='" . $_POST['comment'] . "' WHERE trip_name='" . $_POST['trip_name'] . "'");
        $message = "Record Modified Successfully";
    }
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='" . $_GET['username'] . "'");

    $row = mysqli_fetch_array($result);

    $objConnect = mysqli_connect("localhost", "root", "", "db_gis") or die("Error Connect to Database");
    // $objDB = mysql_select_db("mydatabase");
    $strSQL = "SELECT time_created,trip_name,location_name,location_detail,trip_detail,image_name,image_trip_name,time_use,travel_type,time_travel FROM tbl_location  where(trip_name) in (select trip_name from tbl_location group by trip_name having count(trip_name) >='2' ) 
                and (time_created) in (select MAX(time_created) from tbl_location order by time_created ASC)";

    // where(trip_name) in (select trip_name from tbl_location group by trip_name having count(trip_name) >='2',  )

    $strSQL2 = "SELECT trip_name FROM tbl_location  limit 1; ";
    $strSQL3 = "SELECT trip_detail FROM tbl_location  limit 1; ";

    $objQuery2 = mysqli_query($objConnect, $strSQL2) or die("Error Query [" . $strSQL2 . "]");
    $objQuery3 = mysqli_query($objConnect, $strSQL3) or die("Error Query [" . $strSQL2 . "]");


    $objQuery = mysqli_query($objConnect, $strSQL) or die("Error Query [" . $strSQL . "]");

    // print_r($objQuery);
    $objResult2 = mysqli_fetch_array($objQuery2);
    $objResult3 = mysqli_fetch_array($objQuery3);
    ?>
    <div class="header-trip">
        <?php echo $objResult2["trip_name"]; ?>

    </div>
    <div class="showtrip container justify-content-center tripblock" width="100%" border="0">

        <?php
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>

            <tr>
                <div class="justify-content-center tripblock" style="margin-top:100px;" id="1">
            <tr>
                <div class="container-fluid row justify-content-center tripblock">
                    <div class="col">
                        <?php echo $objResult["time_use"]; ?>
                    </div>
                    <div class="col">
                        <?php echo '<img src="images/' . $objResult['image_name'] . '" height="157" width="235" class="img-thumnail" />' ?></td>
                    </div>
                    <div class="col placedetail">
                        <span class="place"><?php echo $objResult["location_name"]; ?></span>
                        <?php echo $objResult["location_detail"]; ?>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="container-fluid row detail justify-content-center tripblock">
                    <div class="col">
                        <?php echo '<img src="pic/' . $objResult['travel_type'] . '" height="59" width="105" class="img-thumnail" />' ?>
                        <span class="timetrip"><?php echo $objResult["time_travel"]; ?></span>
                    </div>

                </div>
            </tr>
    </div>
    </tr>
<?php
        }
?>
</div>

<div class="commentbox">
    <div class="content-3" style="text-align: left; margin-left:20px">
        <p> <?php echo $objResult3["trip_detail"]; ?></p>
    </div>
</div>


<?php
mysqli_close($objConnect);
?>
<div class="bot-bar" style="z-index:1;">
    <div class="container">
        <div class="row justify-content-center" style="margin-top:20px;">
            <div class="col-auto">
                <div class="botbar-data">
                    <h1>About us</h1>
                    <p>
                        <p><a href="/planveler.html">What's Planveler?</a>
                            <p><a href="Howtouse.html">How to use</a>
                </div>
            </div>
            <div class="col-auto">
                <div class="botbar-data">
                    <h1>Contact us</h1>
                    <p>
                        <p><a href="https://www.google.com/maps/dir/13.7358628,100.7661637/%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%AD%E0%B8%A1%E0%B9%80%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%B2%E0%B8%A5%E0%B8%B2%E0%B8%94%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B1%E0%B8%87/@13.7354147,100.7609192,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x311d664988a1bedf:0xcc678f180e221cd0!2m2!1d100.7782323!2d13.7298889" target="_blank">Address</a>
                            <p><a href="">E-mail</a>
                </div>
            </div>
            <div class="col-auto">
                <div class="botbar-data">
                    <h1>Planveler Policies</h1>
                    <p>
                        <p><a href="Terms&Condition.html">Terms & Conditions</a>
                            <p><a href="/Help.html">Help Center</a>
                </div>
            </div>
            <div class="col-auto">
                <div class="botbar-data">
                    <h1>Follow us</h1>
                    <p>
                        <a href="#facebook"><img src="pic/Facebook logo 2.png"></a>
                        <p></p>
                        <a href="#line"><img src="pic/Line logo 1.png"></a>
                        <a href="#ig"><img src="pic/Instragram Logo 2.png"></a>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="../extentions/css/palnvevlerscript.js"></script>
</body>

</html>