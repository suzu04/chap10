<?php
 class MyClass {
  protected string $data;
  public function __construct(string $data) {
    $this->data = $data;
  }
  public function getData(): string {
    return $this->data;
  }
}
 class MySubClass extends MyClass{
    public function getData(): string {
    // 親クラスのgetDataメソッドをオーバーライド
    return '['.parent::getData().']';
  }
 }
 $myObject = new MySubClass("Hello, World!");
 echo $myObject->getData();
 ?>