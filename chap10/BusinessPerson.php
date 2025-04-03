<?php
 // 継承元のクラスファイルをインポート
require_once 'Person.php';
 class BusinessPerson extends Person {
  // サブクラス独自のworkメソッドを定義
  public final function work () : void {
  //継承／オーバーライドを想定していないならば、継承／オーバーライドそのものを禁止する際finalをつける
    print "<p>{$this->lastName}{$this->firstName}は働いています。</p>";
  }
 }
 ?>