<?php
$cnt = $_COOKIE['cnt'] ?? 0;
setcookie('cnt', ++$cnt, time() + 3);
print "あなたがこのサイトを訪れたのは{$cnt}回目です。";
