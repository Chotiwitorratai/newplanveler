<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

        <h1>You are Admin</h1>
        <h3>Hi, <?php echo $_SESSION['username']; ?></h3>
        <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
        <h3>Hi, <?php echo $_SESSION['useremail']; ?></h3>
        <h3>Hi, <?php echo $_SESSION['usertel']; ?></h3>
        <h3>Hi, <?php echo $_SESSION['usersex']; ?></h3>
           <h3><img src="imageuser/<?php echo $_SESSION['userimage_user']; ?>" width="100" height="100"></h3>
        <p><a href="update3.php">Update</a></p>
        <p><a href="new-password2.php">Chang Password</a></p>
        <p><a href="logout.php">Logout</a></p>
    
</body>
</html>


<?php } ?>
