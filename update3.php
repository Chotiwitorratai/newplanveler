<?php
session_start();
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
<tr>
<td>Username</td>
<td>First Name</td>
<td>Last Name</td>
<td>Tel</td>
<td>Job</td>
<td>Action</td>
</tr>

<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $_SESSION["username"]; ?></td>
<td><?php echo $_SESSION["userfirstname"]; ?></td>
<td><?php echo $_SESSION["userlastname"]; ?></td>
<td><?php echo $_SESSION["usertel"]; ?></td>
<td><?php echo $_SESSION["userjob"]; ?></td>
<td><img src="imageuser/<?php echo $_SESSION['userimage_user']; ?>" width="100" height="100"></td>
<td><a href="pictest4.php?username=<?php echo $_SESSION["username"]; ?>">Update</a></td>
</tr>

</table>
</body>
</html>
