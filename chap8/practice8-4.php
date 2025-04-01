<?php
// ヘッダー情報を取得
$headers = getallheaders();

// Accept-Languageヘッダー情報を表示
if (isset($headers['Accept-Language'])) {
    echo 'Accept-Language: ' . $headers['Accept-Language'];
} else {
    echo 'Accept-Languageヘッダーが見つかりません';
}
?>