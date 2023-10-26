<?php
    for($i = 0; $i < 6; $i++)
        $arr[] = rand(1, 100);
    echo implode(', ', $arr);
?>