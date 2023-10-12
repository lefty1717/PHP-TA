<?php
echo var_dump($_GET).'<br>';
$name = $_GET['name'];
$pwd = $_GET['pwd'];
$job = $_GET['job'];
$birthday = $_GET['birthday'];

$gender = $_GET['gender'];
if($gender == 'male')
    $gender = '男';
else
    $gender = '女';
// $gender = $_GET['gender']=='male' ? '男' : '女';

// $note = $_GET['note'];
// $note = $_GET['note']=='' ? '無' : $_GET['note'];
$note = empty($_GET['note']) ? '無' : $_GET['note'];
// if($note == '')
//     $note = '無';
// else
//     $note = $_GET['note'];


$now = date('Y');

echo '<h1>hello '.$name.'!</h1>'.
        '你的密碼是: '.$pwd.'<br>'.
        '你的性別是: '.$gender.'<br>'.
        '你的生日是: '.$birthday.'<br>'.
        '你今年: '.($now-date('Y', strtotime($birthday))).'歲<br>'.
        '你的工作是: '
        ;
switch($job){
    case 'student':
        echo '學生<br>';
        break;
    case 'teacher':
        echo '老師<br>';
        break;
    case 'FT':
        echo '全職<br>';
        break;
    case 'PT':
        echo '兼職<br>';
        break;
    case 'await':
        echo '米蟲ㄏㄏ<br>';
        break;
    default:
        echo '哭阿為什麼不好好輸入<br>';
        break;
}

echo '備註: '.$note.'<br>';
// header("location: fe.php")
// header("refresh: 2; url=fe.php")
"<a href='fe.php'>返回</a>"
?>