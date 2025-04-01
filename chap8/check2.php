<?php require_once '../Encode.php'; 
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');//追加した部分
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>チェックボックス</title>
</head>
<body>
選択されたのは、<?=e($_POST['lang']) ?>です。
</body>
</html>