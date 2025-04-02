<?php
 class Person {
  public string $firstName;
  public string $lastName;
  // 追加のメソッド群を格納する配列
  private array $methods = [];
  // 指定のメソッドを登録
  public function __set(string $name, Closure $method) : void {
    $this->methods[$name] = $method->bindTo($this, self::class);
  }
   // 動的に登録されたメソッドを実行
   public function __call(string $name, array $args) : mixed {
    // methodsプロパティに未登録のメソッドはエラー
    if (!array_key_exists($name, $this->methods)) {
      throw new Exception("${name} method is not existed.");
    }
    return $this->methods[$name](...$args);
  }
}
 $p = new Person();
 $p->lastName = '山田';
 $p->firstName = '太郎';
 $p->bye = function(): void {
  print "{$this->lastName}{$this->firstName}さん、さようなら！";
 };
$p->bye();        // 結果：山田太郎さん、さようなら！