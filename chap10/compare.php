<?php
 require_once 'Person.php';
 $p1 = new Person('リオ', '山田');
 // オブジェクト変数を参照渡しした場合
$p2 = $p1;
 var_dump($p1 == $p2);       // 結果：bool (true)  
var_dump($p1 === $p2);      // 結果：bool (true)  
// オブジェクト変数を値渡し（コピー）した場合
$p3 = clone $p1;
 var_dump($p1 == $p3);       // 結果：bool (true)  
var_dump($p1 === $p3);      // 結果：bool (false) 
?>