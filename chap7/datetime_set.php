<?php
 $now = new DateTime();
 $now->setDate(2021, 6, 25);
 $now->setTime(14, 70, 59);
 print $now->format('Y年m月d日 H:i:s');  // 結果：2021年06月25日 14:35:59
 //日付けと時間をそれぞれ設定している