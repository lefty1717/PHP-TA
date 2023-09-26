<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Hello world. Welcome to backend.</h1>"
    ?>
    <form action="be.php" method="get">
        姓名: <input type="text" name="name" placeholder="請輸入姓名" required><br><br>
        密碼: <input type="password" name="pwd" placeholder="請輸入密碼"><br><br>
        性別: <input type="radio" name="gender" value="male" checked>男<input type="radio" name="gender" value="female">女<br><br>
        生日: <input type="date" name="birthday"><br><br>
        工作狀況: 
        <select name="job">
            <option value="student">學生</option>
            <option value="teacher">老師</option>
            <option value="FT">全職</option>
            
            <option value="PT">兼職</option>
            <option value="await">待業</option>
        </select><br><br>
        備註: <textarea name="note" cols="30" rows="5"></textarea><br><br>
        <input type="submit" value="送出"><br><br>
    </form>
</body>
</html>