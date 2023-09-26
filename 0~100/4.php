<?php
    $order_total = array()
    $order_total['1221000'] = 100;  
    $order_total['1221001'] = 200;  
    $order_total['1221002'] = 300; 
    $order_total['1221003'] = 200;
    $order_total['1221004'] = 250;
    $order_total['1221005'] = 150;
    $order_total['1221006'] = 300;
    $order_total['1221007'] = 250;
    $order_total['1221008'] = 330;

    $order_receive = array();
    $order_receive['1221000'] = 100; 
    $order_receive['1221001'] = 0;
    $order_receive['1221002'] = 300;
    $order_receive['1221003'] = 200;
    $order_receive['1221004'] = 250;
    $order_receive['1221005'] = 150;
    $order_receive['1221006'] = 300;
    $order_receive['1221008'] = 0;
    $order_receive['1130199'] = 200;

    $order_no_exist = array();
    $order_zero = array();

    foreach($order_total as $order_id => $value){
        if($order_total != $order_receive[$order_id]){
            // 沒收到貨款但是存在編號的訂單
            $order_zero[] = $order_id;
        }
        echo $order_zero
    }
?>