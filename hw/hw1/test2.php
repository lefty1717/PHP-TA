<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET' && 
        isset($_GET['gender']) && 
        isset($_GET['height']) && 
        isset($_GET['weight'])
    ){
        $gender = $_GET['gender']=='male' ? '男' : '女';
        $height = $_GET['height']>5 ? $_GET['height']/100 : $_GET['height'];
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
        echo "評語: $comment<br>";
        echo "<a href='test1.html'>返回</a>";
    }
    else{
        echo '請輸入完整資料';
        header('refresh: 2; url=test1.html');
    }
?>