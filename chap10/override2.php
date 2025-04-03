<?php
 require_once 'HetareBusinessPerson.php';
 $hbp = new HetareBusinessPerson('祥寛', '山田');
 $hbp->work();      // 結果：山田祥寛は働いています。ただし、ボチボチと…
?>