<?php
    // strlen($string): 計算字串長度
    // substr($string, start, len): 擷取子字串
    // substr_count($str, $substr): 計算子字串在字串中出現的次數
    $str = $_GET['text'];
    $len = strlen($str);

    $ans = '';
    echo $str."<br>";
    for($i = 0; $i <= $len; $i++){
      for($j = 2; $j <= $len - $i; $j++){
        $substr = substr($str, $i, $j);
        echo "substr: ".$substr,"<br>";
        echo "i: $i, j: $j<br>";
        if(substr_count($str, $substr) >= 2){
          if($j > strlen($ans)){
            $ans = $substr;
          }
          echo "log:".$substr,"<br>";
        }
      }
    }
    if(strlen($ans) == 0){
      echo "沒有秘文";
    }else{
      echo "秘文為：$ans<br>";
    }
?>