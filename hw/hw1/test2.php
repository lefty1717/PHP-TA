<?php
    // echo var_dump($_GET);
    $gender = 'male'? $_GET['gender'] : 'female';
    $hight = $_GET['hight']>1 ? $_GET['hight']/100 : $_GET['hight'];
    $weight = $_GET['weight'];

    $bmi = $weight / ($hight * $hight);
    if($gender == 'male'){
        if($bmi > 25.5)
            echo "BMI = $bmi, 肥胖";
        elseif($bmi >= 23.2)
            echo "BMI = $bmi, 過重";
        elseif($bmi >= 17)
            echo "BMI = $bmi, 正常";
        else
            echo "BMI = $bmi, 過輕";
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['gender']) && isset($_GET['height']) && isset($_GET['weight'])){
        $gender = $_GET['gender']=='male' ? '男' : '女';
        $height = $_GET['height']>3 ? $_GET['height']/100 : $_GET['height'];
        $weight = $_GET['weight'];
    
        $bmi = $weight / ($height * $height);

        if($gender == 'male'){
            if($bmi > 25.5)
                $comment = '肥胖';
            elseif($bmi >= 23.2)
                $comment = '過重';
            elseif($bmi >= 17)
                $comment = '正常';
            else
                $comment = '過輕';
        }
        else{
            if($bmi > 25.6)
                $comment = '肥胖';
            elseif($bmi >= 22.8)
                $comment = '過重';
            elseif($bmi >= 17)
                 $comment = '正常';
            else
                $comment = '過輕';
        }
        echo "性別: $gender<br>";
        echo "身高: $height m<br>";
        echo "體重: $weight kg<br>";
        echo "BMI: $bmi<br>";
        echo "<a href='test1.html'>返回</a>";
    }
    else{
        if($bmi > 25.6)
            echo "BMI = $bmi, 肥胖";
        elseif($bmi >= 22.8)
            echo "BMI = $bmi, 過重";
        elseif($bmi >= 17)
            echo "BMI = $bmi, 正常";
        else
            echo "BMI = $bmi, 過輕";
        echo '請輸入完整資料';
        header('refresh: 2; url=test1.html');
    }
?>