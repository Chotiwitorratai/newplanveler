<html>
<!-- miwwee  -->

<head>
    <title>Planveler</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,height=device-height">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../extentions/css/planveler.css">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,200&display=swap" rel="stylesheet">
</head>

<script type="text/javascript">

function previewFiles() {

var preview = document.querySelector('#preview');
var files   = document.querySelector('input[type=file]').files;

function readAndPreview(file) {

  // Make sure `file.name` matches our extensions criteria
  if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
    var reader = new FileReader();

    reader.addEventListener("load", function () {
      var image = new Image();
      image.height = 100;
      image.title = file.name;
      image.src = this.result;
      preview.appendChild( image );
    }, false);

    reader.readAsDataURL(file);
  }

}

if (files) {
  [].forEach.call(files, readAndPreview);
}

}

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }


    }

    function MM_jumpMenu(targ, selObj, restore) { //v3.0
        eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
        if (restore) selObj.selectedIndex = 0;
    }
</script>

<body onclick="closeNav()">
    <div id="mySidenav" class="sidenav" onclick="event.stopPropagation();">
        <span style="font-size:35px;cursor:pointer;position:absolute;top: 0;right: 5;" onclick="closeNav()">&times;</span>
        <div style="display: block; color: #948BFF; text-align: center;">ชื่อเราเองจ้า</div>

        <a href="mainpage.html">หน้าหลัก</a>
        <a href="mainpage.html">ทริปของฉัน</a>
        <a href="mainpage.html">รายการที่บันทึก</a>
        <a href="mainpage.html">รายการทริปที่แนะนำ</a>
        <a href="mainpage.html">แนะนำการใช้งาน</a>
        <a href="mainpage.html">เกี่ยวกับเรา</a>
        <a href="mainpage.html">คำถามที่พบบ่อย</a>
        <a href="mainpage.html">ติดต่อเรา</a>


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
                                <a href="/register.html" style=><img src="pic/Group 5.png" alt="Register"></a>
                                <a href="#Login" style=><img src="pic/Group 7.png" alt="Login"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="insert10.php" enctype="multipart/form-data">
        <div class="header-trip">

            <input type="text" id="trip_name" class="header-trip" name="trip_name" placeholder="ตั้งชื่อทริป">
        </div>
        <!-- <div class="daytrip">
            <br>Day<br>
            <br>
            <a href="#1">
                <div id="dayadd"><br></div>
            </a>
            <input type="button" value="เพิ่มวัน" onclick="moreDays();">
            <input type="button" id="removebtn" value="นำออก" onclick="removeHere();">
            <br>

        </div> -->
        <div class="container justify-content-center tripblock" id="1 tripblock">
            <div class="row">
                <!-- <div class="day" id="dayinput" style="float:left;display:none;">
                    <input type="button" value="นำออก" onclick="this.parentNode.parentNode.removeChild(this.parentNode);">
                    <input type="text" name="date" placeholder="วันที่"></div> -->
            </div>

            <div class="row">

            </div>
            Select Line :
            <select name="menu" onChange="MM_jumpMenu('parent',this,0)">
                <?php
                for ($i = 1; $i <= 50; $i++) {
                    if ($_GET["Line"] == $i) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                ?>
                    <option value="<?php echo $_SERVER["PHP_SELF"]; ?>?Line=<?php echo $i; ?>" <?php echo $sel; ?>><?php echo $i; ?></option>
                <?php
                }
                ?>

                <div id="edit-trip" style="display:none;">
                    <!-- <input type="button" value="นำออก" class="takeoutbtu" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" /><br /><br /> -->
                    <?php
                    $line = $_GET["Line"];
                    if ($line == 0) {
                        $line = 1;
                    }
                    for ($i = 1; $i <= $line; $i++) {
                    ?>
                        <div class="row">
                            <div></div>
                            <div class="col-2">
                                <div class="triptime">
                                    <input type="int" id="time_use" name="time_use<?php echo $i; ?>" placeholder="เวลา">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="addimgtrip">


                                 

                                    <div class="addimgtrip-text">เพิ่มรูปภาพ
                                    <input type="file" id="image_name<?php echo $i; ?>" name="image_name<?php echo $i; ?>"  multiple  onchange=" readURL(this);" >
                                    
                                    <div id="preview"></div>
                                    
                                    <img id="blah" src="#" alt=" " width="100" height="100">
                                   
                                    </div><br>

                                </div>

                            </div>

                            <div class="col-4">
                                <input type="text" id="location_name" name="location_name<?php echo $i; ?>" placeholder="เพิ่มสถานที่">
                                <textarea type="text" id="location_detail" name="location_detail<?php echo $i; ?>" placeholder="รายละเอียด"></textarea>
                               
                            </div>
                        </div>
                        <div class="row detail">
                            <div class="col">
                                <img src="pic/caricon.png" alt="">
                                <div class="stupid-linetrip"></div>
                                <span class="timetrip">
                                    <input type="int" id="time_travel" name="time_travel<?php echo $i; ?>" placeholder="เวลา">

                                </span>
                            </div>
                        </div>
                </div>
            <?php
                    }
            ?>

            <div id="writeroot" style="border:none;"><br></div>

            <div class="row"></div>
            <div class="btn-addform">
                <!-- <input type="button" value="เพิ่ม" onclick="moreFields();" /> -->
                <input type="submit" onclick="saveLocation()" value="Send form" />
                <input type="hidden" name="hdnLine" value="<?php echo $i; ?>">
            </div>

    </form>
    </div>
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