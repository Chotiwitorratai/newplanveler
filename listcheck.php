<html>

<head>
    <title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>

<body>
    <?php

    $objConnect = mysqli_connect("localhost", "root", "", "db_gis") or die("Error Connect to Database");
    // $objDB = mysql_select_db("mydatabase");
    $strSQL = "SELECT time_created,trip_name,location_name,location_detail,image_name,time_use,time_travel FROM tbl_location  where(trip_name) in (select trip_name from tbl_location group by trip_name having count(trip_name) >='2' ) 
                and (time_created) in (select MAX(time_created) from tbl_location order by time_created ASC)";

    // where(trip_name) in (select trip_name from tbl_location group by trip_name having count(trip_name) >='2',  )

    $objQuery = mysqli_query($objConnect, $strSQL) or die("Error Query [" . $strSQL . "]");

    print_r($_POST);

    ?>
    <table width="600" border="1">
        <tr>
            <th width="91">
                <div align="center">location_name </div>
            </th>
            <th width="98">
                <div align="center">location_detail </div>
            </th>
            <th width="98" hight="100">
                <div align="center">image_name </div>
            </th>

            <th width="97">
                <div align="center">time_use </div>
            </th>
            <th width="59">
                <div align="center">time_travel </div>
            </th>
            <th width="59">
                <div align="center">trip_name </div>
            </th>

        </tr>
        <?php
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>
            <tr>
                <td>
                    <div align="center"><?php echo $objResult["location_name"]; ?></div>
                </td>
                <td><?php echo $objResult["location_detail"]; ?></td>

                <td><?php echo '<img src="images/'.$objResult['image_name'] .'" height="200" width="200" class="img-thumnail" />' ?></td>

                <td>
                    <div align="center"><?php echo $objResult["time_use"]; ?></div>
                </td>
                <td align="right"><?php echo $objResult["time_travel"]; ?></td>
                <td align="right"><?php echo $objResult["trip_name"]; ?></td>

            </tr>
        <?php
        }
        ?>
    </table>
    <?php
    mysqli_close($objConnect);
    ?>
</body>

</html>