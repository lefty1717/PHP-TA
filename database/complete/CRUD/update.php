<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jobid=$_GET['jobid']; 
    $connect = require_once('db_setting.php');
    $sql="SELECT * FROM job WHERE jobid = '$jobid'";
    $result=  mysqli_query($connect, $sql);
    if ($row = mysqli_fetch_assoc($result)){
        $company=$row['company'];
        $content=$row['content'];
        $jobdate=$row['jobdate'];
    }
    mysqli_close($connect);
    ?>

    <form method="post" action="update2.php">
        <table align="center" width="1000" border="5" bordercolor="#842B00" bgcolor="#FFD1A4" align=center>
            <caption><h2>修改公告</h2></caption>
            <input type=hidden name="jobid" value="<?php echo $jobid; ?>">
                <tr>
                    <td><b>公告編號</b></td>
                    <td>
                        <font color=brown><?php echo $jobid; ?></font>
                    </td>
                </tr>
                <tr>
                    <td><b>求才廠商</b></td>
                    <td><input type="text" name="company" value="<?php echo $company; ?>" required></td>
                </tr>
                <tr>
                    <td><b>求才內容</b></td>
                    <td><textarea name="content"
                    rows="6"
                    cols="40"
                    required><?php echo $content; ?></textarea></td>
                </tr>
                <tr>
                    <td><b>求才日期</b></td>
                    <td><input type="text" name="jobdate" value="<?php echo $jobdate; ?>" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit"><input type="reset"></td>
                </tr>
        </table>


    </form>
</body>
</html>