<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main class="container col justify-content-center">
        <h1>検索画面</h1>
        <form method="post">
            <label id="SEARCH">名前:</label>
            <input type="search" name="sch_name" id="SEARCH">
            <button type="submit" name="btn" value="push_search">検索</button>
            <table>
                <!-- class="table table-dark table-striped" -->
                <tr>
                    <th scope="col alert alert-primary"><?php echo '約' . count($result) . '件' ?></th>
                    <th class="alert " role="alert"><?php echo $msg; ?></th>
                </tr>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">名前</th>
                    <th scope="col">年齢</th>
                </tr>
                <?php foreach ($result as $key => $value) : ?>
                    <tr>
                        <td><?php echo escape($value[0]); ?></td>
                        <td><?php echo escape($value[1]); ?></td>
                        <td><?php echo escape($value[2]); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </form>
    </main>


</body>

</html>