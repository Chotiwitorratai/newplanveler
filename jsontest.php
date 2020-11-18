<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "loginadminuser";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$sql = "SELECT * FROM place";
	$query = mysqli_query($conn,$sql);
	if (!$query) {
		printf("Error: %s\n", $conn->error);
		exit();
	}
	$resultArray = array();
	while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		array_push($resultArray,$result);
	}
	

	echo json_encode($resultArray);
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-size: 100%;
	vertical-align: baseline;
	background: transparent;
}
.img_left{ float:left; margin-right:5px; margin-bottom:5px; border:1px dotted #999999; background-color:#f2f2f2; padding:2px;}
.cls{ clear:both;}
.font_map{ font-family:Tahoma, Arial, serif; font-size:13px;}
div#map_canvas { width:100%; height:100%; }
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" src="http://www.cyberthai.net/gmap3.js"></script> 
    <script type="text/javascript">
        $(function () {
            $('#map_canvas').gmap3({
                map: {
                    options: {
                        center: [7.008471399999999, 100.496234899999990],
                        zoom: 12,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: true,
                        mapTypeControlOptions: {
                            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                        },
                    }
                },
                marker: {
                    values: [
<?php
$sql = mysql_query("select * from place");
$num = mysql_num_rows($sql);
if ($num>0){
	while ($r=mysql_fetch_array($sql))	{
		++$i;
		$i != $num ? $k=',' : $k='';
?>
{latLng:[<?php echo $r[Latitude]?>, <?php echo $r[Longitude]?>], data:"<div class='font_map'><img src='<?php echo $r[Pic]?>' width='75' height='75' alt='<?php echo $r[Place_name]?>' class='img_left' /><strong><a href='#' title='<?php echo $r[Place_name]?>' target='_blank'><?php echo $r[Place_name]?></a></strong><br /><br /><?php echo $r[Address]?><div class='cls'></div><a href='#' title='<?php echo $r[Place_name]?>' target='_blank'>ดูที่เหลือ</a></div>", options:{icon: "http://png-3.findicons.com/files/icons/2469/brushed_metal_icons/64/marker_02.png"}}<?php echo $k?>
<?php
	}
}
?>
                    ],
                    events: {
                        mouseover: function (marker, event, context) {
                            var map = $(this).gmap3("get"),
                                infowindow = $(this).gmap3({
                                    get: {
                                        name: "infowindow"
                                    }
                                });
                            if (infowindow) {
                                infowindow.open(map, marker);
                                infowindow.setContent(context.data);
                            } else {
                                $(this).gmap3({
                                    infowindow: {
                                        anchor: marker,
                                        options: {
                                            content: context.data
                                        }
                                    }
                                });
                            }
                        },
                        closeclick: function () {
                            infowindow.close();
                        },
                        mouseout: function () {
                            var infowindow = $(this).gmap3({
                                get: {
                                    name: "infowindow"
                                }
                            });
                        }
                    }
                }
            });
        });
    </script>
<div id="map_canvas"></div>