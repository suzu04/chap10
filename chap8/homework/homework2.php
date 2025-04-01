<?php
session_start();
$_SESSION['user_id'] = 12345;
$_SESSION['username'] = $_POST['username'] ?? 'JohnDoe';

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>セッション情報</title>
</head>
<body>
セッション情報を保存しました。
</body>
</html>

