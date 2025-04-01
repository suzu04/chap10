<?php
    // ユーザー入力を取得
    $x = readline("Enter value for x: ");
    $s = readline("Enter value for s: ");
    if($x==1){
        $flag=0;
        echo "Flag is set to: " . $flag . "\n"; 
    }elseif($s!=1){
        $flag=-1;
        echo "Flag is set to: " . $flag . "\n"; 
    }

?>