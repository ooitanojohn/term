<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>

<body>
    <div id="desktop1">
        <header></header>
        <main>
            <form action="list.php" method="post">
                <label id="search">名前:</label>
                <input type="search" name="name" id="search">
                <button type="submit" name="btn" value="push">検索</button>
            </form>
            <h1>エラー</h1>
            <p><?php echo ERROR[$err_code]; ?></p>
        </main>

    </div>

</body>

</html>