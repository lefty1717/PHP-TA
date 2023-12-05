<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$jobid=$_POST['jobid'];
$company=$_POST['company'];
$content=$_POST['content'];
$jobdate=$_POST['jobdate'];

$link=mysqli_connect('localhost','root','','test');

   $sql= "update job set company='$company' , content='$content', jobdate='$jobdate' where jobid='$jobid'";
    if (mysqli_query($link, $sql))
        {

            header("Location:message.php?message=修改成功");
        }
    else
        {
            header("Location:message.php?message=修改失敗");
        }

?>
</body>
</html>