<?php
    $name = $_POST['name'];

    $connect = require_once('../db_setting.php');
    $sql = "DELETE FROM test_table WHERE test_table.user_id = '$name'";
    echo $sql;

    if(mysqli_query($connect, $sql)){
        echo "delete success<br>";
        echo mysqli_info($connect);
        header("refresh: 3; url=D.html");
    }
    else{
        echo "delete fail<br>";
        echo mysqli_errno($connect);
        header("refresh: 3; url=C.html");
    }

    mysqli_close($connect);
?>