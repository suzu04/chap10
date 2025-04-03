<?php
namespace wings\selfphp;

use InvalidArgumentException;

/**
 * メンバーに関する情報を管理する。
 *
 * @author WINGSプロジェクト <wings@example.com>
 * @version  1.0
 * @license GPL
 */
class Person {
    /**
     * 名前
     */
    private string $name;

    /**
     * 年齢
     */
    private int $age;

    /**
     * 名前／年齢でオブジェクトを初期化する。
     * @param string $name 名前
     * @param int $age 年齢
     * @throws InvalidArgumentException 年齢が負数の場合
     */
    public function __construct(string $name, int $age) {
        if ($age < 0) {
            throw new InvalidArgumentException("年齢は0以上でなければなりません");
        }
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @deprecated __toStringを代わりに利用してください。
     * `show()` は非推奨です。文字列として出力する場合は `__toString()` を使用してください。
     */
    public function show(): string {
        return "名前: {$this->name}, 年齢: {$this->age}";
    }

    /**
     * Personクラスの内容を文字列化する。
     * @return string 「名前／年齢」の形式で整形した文字列
     */
    public function __toString(): string {
        return "{$this->name}／{$this->age}";
    }
}

// ✅ テスト
try {
    $person = new Person("太郎", 25);
    echo $person . PHP_EOL;  // → "太郎／25"
    echo $person->show();     // → "名前: 太郎, 年齢: 25"（非推奨だけど動作する）
} catch (InvalidArgumentException $e) {
    echo "エラー: " . $e->getMessage();
}
?>
