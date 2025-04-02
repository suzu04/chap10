<?php
 require_once 'MachineTrait.php';
  
class Fax {
  // MachineTraitトレイトをインポート
  use MachineTrait;
  
  // Faxを送信
  public function send() : void {
    print 'sending Fax...sended!';
  }
 }
  
$fx = new Fax();
 $fx->run();    // 結果：Starting...Run!   　　
$fx->send();   // 結果：sending Fax...sended!
?>