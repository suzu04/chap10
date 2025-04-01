<?php
 $fmt = 'Y年m月d日 H時i分s秒';
 $time = '2021年05月15日 11時58分32秒';
 $dt = DateTime::createFromFormat($fmt, $time);
 print $dt->format('Y-m-d H:i:s');  // 結果：2021-05-15 11:58:32
 //datetime_strtotime.php等でフォーマットが最後にきていたけど最初にきたイメージ
//$timeに入ってくるフォーマットを気にしないでいいメリット