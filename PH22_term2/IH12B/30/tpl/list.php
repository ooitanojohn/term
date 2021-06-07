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
        <form method="post">
            <label id="search">名前:</label>
            <input type="search" name="name" id="search">
            <button type="submit" name="btn" value="push">検索</button>
        </form>

        <table>
            <tr>
                <td><?php echo '約' . count($result) . '件'; ?></td>
            </tr>
            <tr>
                <td>ID</td>
                <td>名前</td>
                <td>年齢</td>
            </tr>
            <?php foreach ($result as $key => $value) : ?>
                <tr>
                    <td><?php echo escape($value[0]); ?></td>
                    <td><?php echo escape($value[1]); ?></td>
                    <td><?php echo escape($value[2]); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>