<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../PH22_term2/IH12B/30/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="../PH22_term2/IH12B/30/css/bootstrap.rtl.min.css">
    <link href="css/boostrap.css" rel="stylesheet">
    <title>People</title>
</head>

<body>
    <main class="container-sm justify-content-sm-center">
        <form method="post" class="row g-3 justify-content-center">
            <!-- <div class="col-auto">
                <label for="SEARCH">name:</label>
            </div> -->
            <div class="col-sm-6">
                <input type="search" name="sch_name" id="SEARCH" class="form-control" placeholder="Peopleで検索または人名を入力" autofocus>
            </div>
            <div class="col-auto">
                <button name="btn" value="push_search" class="btn btn-secondary mb-5">search</button>
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