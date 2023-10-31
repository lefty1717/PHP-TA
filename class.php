<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   // 輸出
        // echo "Hello World<br>";
        // echo("Hello World<br>");
        // echo "Hello World<br>";
        // print("Hello World<br>");
        // print "Hello World<br>";
        // printf("%s %s<br>", "Hello", "World");
        // $var1 = "Hello";
        // printf("%'-7s<br>", $var1);
        
        // !    
        // ?
        // //
        // todo
        // *
        // sds
    ?>
    <?php   // function
        // function calScore($score){
        //     global $situation;
        //     $situation = ($score >= 60) ? "及格" : "不及格" ;
        //     return $situation;
        // }
        
        // $score = 90;
        // $res =  calScore($score);
        // // echo $GLOBALS['situation'];
        // print_r($GLOBALS);
        // echo "$situation<br>";
        // echo "$res<br>";
        ?>
    <?php
        // echo phpinfo()."<br>";
        $score = 90;
        echo '$score = '.$score.'<br>';
        echo "isset: ".isset($score)."<br>";
        echo var_dump(isset($score))."<br>";
        
        echo "empty: ".empty($score)."<br>";
        echo var_dump(empty($score))."<br>";
        
        echo "is_null: ".is_null($score)."<br>";
        echo var_dump(is_null($score))."<br>";
        
        echo 'gettype: '.gettype($score)."<br>";
        
        settype($score, "string");
        echo 'settype: '.gettype($score).'<br>';
        $score = (int)$score;
        echo '(int): '.gettype($score).'<br>';
        
        echo var_dump($score)."<br>";
        echo var_export($score)."<br>";
        
        define("PI", 3.14);
        echo PI;
        echo "defined: ".defined("PI")."<br>";
        // unset($score);
        // echo $score."<br>"
        ?>
    <?php
        // for($i = 1; $i < 10; $i++)
        //     echo $i . " ";

        // $i = 1;
        // while($i < 10){
        //     echo $i . " ";
        //     $i++;
        // }

        // do{
        //     echo $i;
        //     $i++;
        // }while($i < 10);
    ?>
    <?php
        // for ($i = 1; $i <= 9; $i++) {
        //     if ($i % 2 != 1)
        //         continue;
        //     echo $i . " ";
        // }
    ?>
    <?php
        // echo 'qqq', 'qqq';
        // $arr = [0 => 'ab', 1 => 'b'];
        // echo var_dump($arr).'<br>';
        // echo var_export($arr).'<br>';
        // echo $arr['0'];
        // echo $arr['0'];
    ?>
</body>
</html>
