<?php
    // $coin = $_GET['coin'];
    // $fifty = $_GET['fifty']=='true' ? true : false;
    // $ten = $_GET['ten']=='true' ? true : false;
    // $five = $_GET['five']=='true' ? true : false;
    // $one = $_GET['one']=='true' ? true : false;

    // $ans = ['50'=>0, '10'=>0, '5'=>0, '1'=>0];

    // if($fifty){
    //     $ans['50'] = intdiv($coin, 50);
    //     $coin %= 50;
    // }
    // if($ten){
    //     $ans['10'] = intdiv($coin, 10);
    //     $coin %= 10;
    // }
    // if($five){
    //     $ans['5'] = intdiv($coin, 5);
    //     $coin %= 5;
    // }
    // $ans['1'] = $coin;

    // foreach($ans as $type => $value)
    //     echo "$type 元: $value 個<br>";
?>

<br>

<?php
    $coin = $_GET['coin'];
    $ans = ['50'=>0, '10'=>0, '5'=>0, '1'=>0];
    foreach($ans as $type=>$num){
        if($_GET[$type] == 'true'){
            $ans[$type] = intdiv($coin, $type);
            $coin %= $type;
        }
    }

    foreach ($ans as $type => $value)
        echo "$type 元: $value 個<br>";
?>

<br>

<?php
    // $coin = $_GET['coin'];
    // $ans = ['50'=>0, '10'=>0, '5'=>0, '1'=>0];
    // foreach($ans as $type=>$chose){
    //     $ans[$type] = $_GET[$type] ? floor($coin / $type) : '0';
    //     $coin = gettype($ans[$type]) == 'string' ? $coin : $coin%$type;
    //     echo "$type 元: $ans[$type] 個<br>";
    // }
?>


<?php
while ($change_amount > 0) {
        if ($change_amount >= 50 && $change_50 == 'yes') {
            $change_amount -= 50;
            $change_50_count++;
        } elseif ($change_amount >= 10 && $change_10 == 'yes') {
            $change_amount -= 10;
            $change_10_count++;
        } elseif ($change_amount >= 5 && $change_5 == 'yes') {
            $change_amount -= 5;
            $change_5_count++;
        } elseif ($change_amount >= 1) {
            $change_amount -= 1;
            $change_1_count++;
        } else {
            break;
        }
    }
?>