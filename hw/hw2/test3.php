<?php
    $str = $_GET['text'];
    $len = strlen($str);
    echo $str."<br>";
    $ans = '';
    for($l = 2; $l < $len; $l++){
      for($i = 0; $i <= $len - $l; $i++){
        for($j = $i+1; $j <= $len - $l; $j++){
          $substr1 = substr($str, $i, $l);
          $substr2 = substr($str, $j, $l);
          echo "info: ".$substr1,", ",$substr2,"<br>";
          if(!strcmp($substr1, $substr2)){
          // if(strcmp($substr1, $substr2) == 0){
            if($l > strlen($ans)){
              $ans = $substr1;
              echo "eKey: ".$substr1,"<br>";
            }
          }
        }
      }
    }
    if(strlen($ans) == 0){
        echo "沒有秘文";
    }else{
        echo "秘文為：$ans<br>";
    }
?>