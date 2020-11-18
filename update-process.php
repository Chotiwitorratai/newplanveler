<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE user set username='" . $_POST['username'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', tel='" . $_POST['tel'] . "' ,job='" . $_POST['job'] . "',image_user='" . $_POST['image_user'] . "' WHERE username='" . $_POST['username'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_GET['username'] . "'");

$row= mysqli_fetch_array($result);

if($_GET){
    if(isset($_FILES['image_user'])){
        $name_file =  $_FILES['image_user']['name'];
        $tmp_name =  $_FILES['image_user']['tmp_name'];
        $locate_img ="imageuser/";
        move_uploaded_file($tmp_name,$locate_img.$name_file);
    }
}



?>
<html>
<head>
<title>Update Profile</title>
</head>
<body>
<form name="frmUser" method="post" action="" enctype="multipart/form-data">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
Username: <br>
<input type="hidden" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<input type="text" name="username"  value="<?php echo $row['username']; ?>">
<br>
First Name: <br>
<input type="text" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>">
<br>
Tel:<br>
<input type="text" name="tel" class="txtField" value="<?php echo $row['tel']; ?>">
<br>
Job:<br>
<input type="text" name="job" class="txtField" value="<?php echo $row['job']; ?>">
<br>
Image:<br>
<input type="file" name="image_user" id="image_user">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>