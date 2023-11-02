<?php
    // echo var_dump($_GET), '<br>';
    // $coin = $_GET['coin'];
    // $fifty = $_GET['fifty']=='true' ?? false;
    // $ten = $_GET['ten']=='true' ?? false;
    // $five = $_GET['five']=='true' ?? false;
    // $one = $_GET['one']=='true' ?? false;
    // $ans = ['50'=>0, '10'=>0, '5'=>0, '1'=>0];

    // if($fifty){
    //     $ans['50'] = intdiv($coin, 50);
    //     $coin %= 50;
    //     echo $coin."<br>";
    // }
    // if($ten){
    //     $ans['10'] = intdiv($coin, 10);
    //     $coin %= 10;
    //     echo $coin."<br>";
    // }
    // if($five){
    //     $ans['5'] = intdiv($coin, 5);
    //     $coin %= 5;
    //     echo $coin."<br>";
    // }
    // if($one){
    //     $ans['1'] = $coin;
    //     echo $coin."<br>";
    // }

    // foreach($ans as $key => $value)
    //     echo "$key 元: $value 個<br>";
?>

<?php
    $coin = $_GET['coin'];
    $setting = ['50'=>false, '10'=>false, '5'=>false, '1'=>false];
    foreach ($setting as $key=>$val)
        $setting[$key] = $_GET[$key]=='true' ?? false;
    echo print_r($setting);
    $ans = ['50'=>0, '10'=>0, '5'=>0, '1'=>0];

    foreach($setting as $key=>$val){
        if($val){
            $ans[$key] = intdiv($coin, $key);
            $coin %= $key;
            echo $coin."<br>";
        }
    }

    foreach ($ans as $key => $value)
        echo "$key 元: $value 個<br>";
?>
