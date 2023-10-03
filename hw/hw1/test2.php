<?php
    // echo var_dump($_GET);
    $gender = 'male'? $_GET['gender'] : 'female';
    $hight = $_GET['hight']>1 ? $_GET['hight']/100 : $_GET['hight'];
    $weight = $_GET['weight'];

    $bmi = $weight / ($hight * $hight);
    if($gender == 'male'){
        if($bmi > 25.5)
            echo "BMI = $bmi, 肥胖";
        elseif($bmi > 23.2)
            echo "BMI = $bmi, 過重";
        elseif($bmi > 17)
            echo "BMI = $bmi, 正常";
        else
            echo "BMI = $bmi, 過輕";
    }
    else{
        if($bmi > 25.6)
            echo "BMI = $bmi, 肥胖";
        elseif($bmi > 22.8)
            echo "BMI = $bmi, 過重";
        elseif($bmi > 17)
            echo "BMI = $bmi, 正常";
        else
            echo "BMI = $bmi, 過輕";
    }
?>