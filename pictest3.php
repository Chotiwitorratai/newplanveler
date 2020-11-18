<!DOCTYPE html>
<html>
<head>
  <title>Fetch image from database in PHP</title>
</head>
<body>

<h2>All Records</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Name</td>
    <td>Images</td>
  </tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from user"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['firstname']; ?></td>
    <td><img src="imageuser/<?php echo $data['image_user']; ?>" width="100" height="100"></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($conn);  // close connection ?>

</body>
</html>