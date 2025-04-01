<?php
   $data = [10,25,50];
   foreach($data as &$item ) { $item=$item*1.5; }
   print_r($data); // 結果：Array([0]=>15 [1]=>37.5 [2]=>75) 
?>