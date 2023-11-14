<?php
    // 接值
    $user_id = $_POST['user_id'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // 引入資料庫連線
    $connect = require_once "db_setting.php";
    // 寫SQL並執行
    $sql = "INSERT INTO test_table (user_id, age, email, phone) VALUES('$user_id', '$age', '$email', '$phone')";
    if(!$connect)
        echo "ERROR: Could not connect. " . mysqli_connect_error();
    else{
        if(mysqli_query($connect, $sql))
            echo "insert success<br>";
        else
            echo "insert fail<br>";
    }

    // 結束連線
    mysqli_close($connect);
    
    header("refresh: 3; url=C.html");