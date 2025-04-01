<?php
// クッキーの設定
$expire = time() + (30 * 24 * 60 * 60);
setcookie("name", "value", $expire);

// クッキーが設定されたことを確認
if (isset($_COOKIE["name"])) {
    echo "クッキー 'name' が設定されました。値: " . $_COOKIE["name"];
} else {
    echo "クッキー 'name' を設定できませんでした。";
}
?>

