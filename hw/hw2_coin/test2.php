<?php
echo var_dump($_GET);
$coin = $_GET['coin'];
$fifty = $_GET['fifty'] == 'true' ? true : false;
$ten = $_GET['ten'] == 'true' ? true : false;
$five = $_GET['five'] == 'true' ? true : false;
$one = $_GET['one'] == 'true' ? true : false;
$ans = [];
echo $coin, '<br>';
if ($fifty) {
    $ans['50'] = ($coin / 50);
    $coin /= 50;
    echo $coin . ' fifty<br>';
}
if ($ten) {
    $ans['10'] = $coin / 10;
    $coin /= 10;
    echo $coin . ' ten<br>';
}
if ($five) {
    $ans['5'] = $coin / 5;
    $coin /= 5;
    echo $coin . ' five<br>';
}
if ($one) {
    $ans['1'] = $coin;
    echo $coin . ' one<br>';
}

echo var_dump($ans);

foreach ($ans as $index => $value) {
    echo "$index 元需要 $value 個<br>";
}
?>
