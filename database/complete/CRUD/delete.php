<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jobid=$_GET['jobid']; //帶入參數，並載入該設備的原始資訊
        
        $connect = require_once('../db_setting.php');
        $sql="DELETE FROM complete_job WHERE jobid = '$jobid'";
       if(mysqli_query($connect, $sql))
        {
            header("Location:message.php?message=刪除成功");
        }
        else
        {
            header("Location:message.php?message=刪除失敗");
        }
        mysqli_close($connect);
    ?>
</body>
</html>