<?php
//for命令とcontinue命令とを使って、1 〜 100の範囲にある奇数値の合計を求めてみましょう。
$count = 0; // $count の初期化

for($i=0;$i<=100;$i++){
    if($i%2==0){
        $count=$count+0;
    }elseif($i%2!=0){
        $count=$count+$i;
    }

}
echo $count . "\n"; 
?>
