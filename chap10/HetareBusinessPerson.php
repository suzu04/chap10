<?php
 require_once 'BusinessPerson.php';
 class HetareBusinessPerson extends BusinessPerson {
  // BusinessPersonクラスのworkメソッドをオーバーライド
  public function work() : void {
   parent::work();  //スーパークラスのworkメソッド
   print 'ただし、ボチボチと…';  // 独自の処理
  }
 }
 ?>