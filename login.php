<?php 

    session_start();

    if (isset($_POST['username'])) {

        include('connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userfirstname'] = $row['firstname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['userlastname'] = $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];
            $_SESSION['useremail'] = $row['email'];
            $_SESSION['usertel'] = $row['tel'];
            $_SESSION['usersex'] = $row['sex'];
            $_SESSION['userjob'] = $row['job'];
            $_SESSION['userimage_user'] = $row['image_user'];

            if ($_SESSION['userlevel'] == 'a') {
                header("Location: admin_page.php");
            }

            if ($_SESSION['userlevel'] == 'm') {
                header("Location: user_page.php");
            }
        } else {
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
                }

    } 
    else {
        header("Location: index.php");
            }


?>