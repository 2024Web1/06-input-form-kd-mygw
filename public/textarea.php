<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テキストエリア練習問題(結果)</title>
</head>
<body>
    入力された内容はつぎのとおりです。
    <?php
    echo '<p>' .$_POST['input_text'] . '<p>';
    ?>

    <a href="textarea.html">戻る</a>
</body>
</html>