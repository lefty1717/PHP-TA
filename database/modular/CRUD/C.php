<?php
    $user_id = $_POST['user_id'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $connect = require_once('../db_setting.php');
    $sql = "INSERT INTO test_table (user_id, age, email, phone) VALUES('$user_id', '$age', '$email', '$phone')";
    if(mysqli_query($connect, $sql)){
        echo "insert success<br>";
        echo mysqli_info($connect);
        header("refresh: 3; url=C.html");
    }
    else{
        echo "insert fail<br>";
        echo mysqli_errno($connect);
        header("refresh: 3; url=C.html");
    }

    mysqli_close($connect);