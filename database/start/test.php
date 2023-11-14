<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>連接資料庫</title>
</head>
<body>
    <h1>資料庫練習</h1>
    <?php
        // include() : 載入檔案，失敗則會產生警告訊息，但不會停止執行程式。
        // require() : 載入檔案，失敗則會產生錯誤訊息，並停止執行程式。
        // require_once() : 載入檔案，若已經載入過則不會再次載入。
        $connect = require_once('db_setting_test.php');
    ?>
</body>
</html>