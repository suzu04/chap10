<?php
 require_once 'Person.php';
 $p1 = new Person('リオ', '山田');
 $p2 = $p1;  // オブジェクトを代入
$p2->firstName = '奈美';
 $p2->lastName = '掛谷';      // 代入先の変数に変更
print_r($p1);  // 結果：Person Object([firstName]=>奈美 [lastName]=>掛谷)
 print_r($p2);  // 結果：Person Object([firstName]=>奈美 [lastName]=>掛谷)
 ?>