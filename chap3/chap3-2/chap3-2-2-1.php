<?php

    $value1 = '1.44E2';
    $value2 = 144;

    // 式の評価
    $result = ($value1 == $value2);

    // 結果の表示
    if($value1 == $value2){
        echo "'1.44E2' は 144 に等しいです。\n";
    }elseif($value1 != $value2){
    echo "'1.44E2' は 144 に等しくありません。\n";
    }
?>