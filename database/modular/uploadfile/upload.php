<?php
    # 檢查檔案是否上傳成功
    echo var_dump($_FILES);
    if ($_FILES['upload_file']['error'] == UPLOAD_ERR_OK){
        echo "檔案名稱: {$_FILES['upload_file']['name']} <br/>";
        echo "檔案名稱: {$_FILES['upload_file']['name']} <br/>";
        echo "檔案類型: {$_FILES['upload_file']['type']} <br/>";
        echo '檔案大小: ' . $_FILES['upload_file']['size'] / 1024 . 'KB<br/>';
        echo "暫存名稱: {$_FILES['upload_file']['tmp_name']}<br/>";

        $file = $_FILES['upload_file']['tmp_name'];
        $dest = 'files/' . $_FILES['upload_file']['name'];
    
        // 將檔案移至指定位置
        move_uploaded_file($file, $dest);
    }
    else
        echo "錯誤代碼： {$_FILES['upload_file']['error']}<br/>";
    
    echo '<a href="upload.html">返回</a>';
?>