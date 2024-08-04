<?php
    include_once 'dbh.inc.php';

    $first= mysqli_real_escape_string($conn, $_POST['first']);
    $last= mysqli_real_escape_string($conn, $_POST['last']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $uid= mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd= mysqli_real_escape_string($conn, $_POST['pwd']);



        $sql = "insert into users(user_first, user_last, user_email, user_uid, user_pwd) values('$first','$last','$email','$uid','$pwd');";
        mysqli_query($conn, $sql);
        header("Location: ../index.php?signup=success");
?>