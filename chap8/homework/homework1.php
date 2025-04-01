<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>セッション情報</title>
</head>
<body>
<form method="POST" action="homework2.php">
    <label for="user_id">ユーザーID：</label>
    <input id="user_id" type="text" name="user_id" size="20" readonly
        value="<?= $_SESSION['user_id'] ?? '12345' ?>" />
    <br>
    <label for="username">ユーザー名：</label>
    <input id="username" type="text" name="username" size="40"
        value="<?= $_SESSION['username'] ?? 'JohnDoe' ?>" />
    <br>
    <input type="submit" value="送信" />
</form>
</body>
</html>
