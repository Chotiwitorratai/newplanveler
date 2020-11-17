<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE user set username='" . $_POST['username'] . "', password='" . $_POST['password'] . "' WHERE username='" . $_POST['username'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_GET['username'] . "'");

$row= mysqli_fetch_array($result);


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
Password: <br>
<input type="text" name="password" class="txtField" value="">
<br>
confirm Password:<br>
<input type="text" name="password" class="txtField" value="">
<br>

<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>