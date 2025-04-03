<?php
 class FileLogger extends SplFileObject {
  public DateTime $current;
  // 指定された名前でログファイルをオープン
  public function __construct(string $logname) {
    $this->current = new DateTime();
    parent::__construct("{$logname}-{$this->current->format('Ymd')}
 .log", 'a');
  }
  // SplFileObject::fwriteメソッドをオーバーライド
  public function fwrite(string $str, int $length = 0): int {
    return parent::fwrite("［{$this->current->format('Y/m/d')}]
 {$str}\n");
  }
  // その他の不要なメソッドは無効化
  public function fread(int $length): string|false {
    throw new Exception('Method is not supported.');
  }
  ...中略...
 }
 $logger = new FileLogger('log');
 $logger->fwrite('HogeHoge Text');
 ?>