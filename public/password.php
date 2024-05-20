<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>パスワードの練習(送信後)</title>
</head>

<body>
    <?php
    echo '<p>入力されたユーザーIDは、' . $_POST['user'] . 'です。 </p>';
    echo '<p>入力されたパスワードは、' . $_POST['pass'] . 'です。 </p>';
    ?>
</body>
</html>