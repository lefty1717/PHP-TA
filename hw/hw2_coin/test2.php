<?php
    $coin = $_GET['coin'];
    $fifty = $_GET['50']=='true' ? true : false;
    $ten = $_GET['10']=='true' ? true : false;
    $five = $_GET['5']=='true' ? true : false;
    $one = $_GET['1']=='true' ? true : false;
    $ans = ['50'=>0, '10'=>0, '5'=>0, '1'=>0];

    if($fifty){
        $ans['50'] = intdiv($coin, 50);
        $coin %= 50;
    }
    if($ten){
        $ans['10'] = intdiv($coin, 10);
        $coin %= 10;
    }
    if($five){
        $ans['5'] = intdiv($coin, 5);
        $coin %= 5;
    }
    $ans['1'] = $coin;

    foreach($ans as $type => $value)
        echo "$type 元: $value 個<br>";
?>

<br>

<?php
    $coin = $_GET['coin'];
    $setting = ['50'=>false, '10'=>false, '5'=>false, '1'=>false];
    $ans = ['50'=>0, '10'=>0, '5'=>0, '1'=>0];
    foreach ($setting as $type=>$chose)
        $setting[$type] = $_GET[$type]=='true' ?? false;

    foreach($setting as $type=>$chose){
        if($chose){
            $ans[$type] = intdiv($coin, $type);
            $coin %= $type;
        }
    }

    foreach ($ans as $type => $value)
        echo "$type 元: $value 個<br>";
?>

<br>

<?php
    $coin = (int)$_GET['coin'];
    $ans = ['50'=>0, '10'=>0, '5'=>0, '1'=>0];
    foreach ($ans as $type=>$chose){
        $ans[$type] = $_GET[$type]=='true' ? intdiv($coin, $type) : 0;
        $coin -= $ans[$type]==0 ? 0 : $ans[$type]*$type;
        echo "$type 元: $ans[$type] 個<br>";
    }
?>
