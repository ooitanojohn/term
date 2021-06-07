<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="desktop1">
        <form action="list.php" method="post">
            <label id="search">名前:</label>
            <input type="search" name="name" id="search">
            <button type="submit" name="btn" value="push">検索</button>
        </form>
        <h1>エラー</h1>
        <p><?php echo ERROR[$err_code]; ?></p>
    </div>

</body>

</html>