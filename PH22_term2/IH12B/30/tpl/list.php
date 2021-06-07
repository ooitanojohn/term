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
            <label id="SEARCH">名前:</label>
            <input type="search" name="sch_name" id="SEARCH">
            <button type="submit" name="btn" value="push_search">検索</button>
            <table>
                <tr>
                    <th><?php echo '約' . count($result) . '件'; ?></th>
                </tr>
                <tr>
                    <th>
                        <label for="id_sel">ID</label>
                        <select name="order" size="1" id="id_sel">
                            <option value="id_asc">昇順</option>
                            <option value="id_desc">降順</option>
                        </select>
                    </th>
                    <th>
                        <label for="name_sel">名前</label>
                        <select name="order" size="1" id="name_sel">
                            <option value="name_asc">昇順</option>
                            <option value="name_desc" ">降順</option>
                        </select>
                    </th>
                    <th>
                        <label for=" age_sel">名前</label>
                                <select name=" order" size="1" id="age_sel">
                                    <option value="age_asc">昇順</option>
                                    <option value="age_desc">降順</option>
                                </select>
                    </th>
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
    </div>

</body>

</html>