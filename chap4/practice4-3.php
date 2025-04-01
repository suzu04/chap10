<?php
    //リスト4.32のコードをwhile命令で書き換えてみましょう.
    $sum = 0;
    $i = 1;
    while($i <= 100) {
        if ($i % 2 !== 0){
            $i++;
            { continue; }
        }else{
        $sum += $i;
        $i++;
        }
    }
    print "合計値は{$sum}です。"; // 結果：合計値は2550です
?>