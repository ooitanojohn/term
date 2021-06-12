<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>People</title>
</head>

<body class="text-center">
    <div class="p-1 mb-5 bg-secondary bg-gradient text-white shadow">
        <h1 class="display-6">search people</h1>
    </div>
    <p class="p-2 mb-5"><img src="img/susipaku211-imgp0934_TP_V4.jpg" class="img-fluid img-thumbnail" alt="ガラス玉,google風"></p>

    <main class="container-sm justify-content-sm-center">
        <form method="post" class="row g-3">
            <div class="col-auto">
                <label for="SEARCH">名前:</label>
            </div>
            <div class="col-sm-10">
                <input type="search" name="sch_name" id="SEARCH" class="form-control" autofocus>
            </div>
            <div class="col-auto">
                <button name="btn" value="push_search" class="btn btn-secondary mb-5">検索</button>
            </div>

            <div class="alert alert-secondary lead" role="alert"><?php echo $msg; ?></div>
            <table class="table table-striped">
                <!-- class="table table-dark table-striped" -->
                <tr>
                    <th scope="col"><?php echo '約' . count($result) . '件' ?></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>年齢</th>
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
    <footer class="footer p-3 bg-secondary bg-gradient text-white shadow"><small>HAL_PH_term2</small></footer>


</body>

</html>