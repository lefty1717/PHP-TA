<?php
    $company=$_POST['company'];
    $content=$_POST['content'];
    $jobdate=$_POST['jobdate'];
    if ($_FILES['photo']['error'] == UPLOAD_ERR_OK){
        $file = $_FILES['photo']['tmp_name'];
        $dest = 'files/' . $_FILES['photo']['name'];
        move_uploaded_file($file, $dest);
    }
    else{
        echo "錯誤代碼： {$_FILES['photo']['error']}<br/>";
        header("Location:message.php?message=圖片上傳失敗");
    }

    $connect = require_once('../db_setting.php');
    $sql="INSERT INTO complete_job (company, photo, content, jobdate) VALUE ('$company', '$dest', '$content', '$jobdate')";
    if (mysqli_query($connect, $sql))
        header("Location:message.php?message=新增成功");
    else
        header("Location:message.php?message=新增失敗");
?>