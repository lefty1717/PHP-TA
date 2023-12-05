<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align=right>
        <h3><a href="CRUD/insert.html">[新增公告]</a></h3>
    </div>
    
    <table width="90%" border="2" bordercolor="#003D79" bgcolor="#D2E9FF" align="center" style="color: #444545">
    <caption><h2>求才資訊公告</h2></caption>
        <tr align="center">
            <th>公告編號</th>
            <th>求才廠商</th>
            <th>廠商圖片</th>
            <th>求才內容</th>
            <th>求才日期</th>
            <th>操作</th>
        </tr>
        
        <?php
        $connect = require_once('db_setting.php');
        $sql="SELECT * FROM complete_job";
        $result=mysqli_query($connect, $sql);
        while ($row=mysqli_fetch_assoc($result)){
            echo
            "
                <tr>
                    <td>{$row['jobid']}</td>
                    <td>{$row['company']}</td>
                    <td><img src=\"{$row['photo']}\" width='50px'></td>
                    <td>{$row['content']}</td>
                    <td>{$row['jobdate']}</td>
                    <td align=center>
                        <a href=CRUD/update.php?jobid={$row['jobid']}>[修改]</a>
                        <a href=CRUD/delete.php?jobid={$row['jobid']}>[刪除]</a>
                    </td>
                </tr>
            ";
        }
        mysqli_close($connect) ;
        ?>
    </table>
</body>
</html>