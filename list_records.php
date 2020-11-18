<title>Ports</title>
</head>

<?php

// Connect to server and select database.
mysql_connect("localhost", "root", "")or die("cannot connect"); 
mysql_select_db("loginadminuser")or die("cannot select DB");


$sql="SELECT * FROM user";
$result=mysql_query($sql);

?>
<body>


<table width="1200" border="1" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="1200" border="1" cellspacing="1" cellpadding="3">
<tr>
<td colspan="50"><strong>Pending Port Requests 2</strong> </td>
</tr>

<tr>
<td align="center"><strong>username</strong></td>
<td align="center"><strong>fristname</strong></td>
<td align="center"><strong>tel</strong></td>
<td align="center"><strong>job</strong></td>
<td align="center"><strong>Update</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td><?php echo $rows['username']; ?></td>
<td><?php echo $rows['fristname']; ?></td>
<td><?php echo $rows['tel']; ?></td>
<td><?php echo $rows['job']; ?></td> 
<td><?php echo $rows['image_user']; ?></td> 
<td align="center"><a href="update2.php?id=<?php echo $rows['username']; ?>">update</a></td>
</tr>

<?php
}
?>

</table>
</td>
</tr>
</table>
</body>
</html>