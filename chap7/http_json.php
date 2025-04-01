<?php
 require '../vendor/autoload.php';
 $cli = new GuzzleHttp\Client([
  'base_uri' => 'https://wings.msn.to',
 ]);
 $res = $cli->get('/tmp/books.json');
 $obj = json_decode($res->getBody());
 //print($obj->books[0]->title);    // 結果：独習Java 新版
 print_r($obj);