<?php
    // define('常數名稱', '常數值') : 定義常數，不需要以$開頭。
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'test');

    // mysqli_connect(主機名稱, 帳號, 密碼, 資料庫名稱, PORT, SOCKET) : 連接資料庫，成功返回object，失敗返回false。
    // @ : 錯誤訊息不顯示。
    $connect = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // mysqli_query() : 執行SQL語法，成功返回true，失敗返回false。
    // 設定中文編碼
    mysqli_query($connect, 'SET NAMES utf8');

    // 檢查連線
    if(!$connect){
        // die() : 顯示訊息並終止程式，與exit()相同。
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    else{
        echo "Connected!";
        return $connect;
    }
?>