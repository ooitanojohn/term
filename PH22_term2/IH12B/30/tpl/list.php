<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>People</title>
</head>

<body class="text-center">
    <div class="mb-2">
        <h1 style="display:none;">ユーザー補助のリンク</h1>
    </div>
    <div class="row g-3">
        <form method="post" class="row g-3 shadow justify-content-sm-center mb-5">
            <div class="col-auto">
                <a href="list.php"><img src="img/people_logo2.png" class="img-fluid " alt="ガラス玉,google風" style="height:50px; max-width:100%;"></a>
            </div>
            <!-- <div class="col-auto">
                        <label for="SEARCH">name:</label>
                    </div> -->
            <div class="col-sm-6 input-group mb-3 col-auto w-50">
                <input type="search" name="sch_name" class="form-control" placeholder="Peopleで検索または人名を入力" aria-label="Recipient's username" aria-describedby="button-addon2" id="SEARCH" autofocus>
                <button type="submit" class="btn btn-secondary" id="button-addon2">search</button>

            </div>

            <div class="row g-3 mb-4 justify-content-sm-center">
                <select name="order_col" class="col-auto form-select w-25" aria-label="Default select example">
                    <option value="id" selected>ID</option>
                    <option value="name">NAME</option>
                    <option value="age">AGE</option>
                </select>
                <select name="order" class="col-auto form-select w-25" aria-label="Default select example">
                    <option value="ASC" selected>昇順</option>
                    <option value="DESC">降順</option>
                </select>
            </div>

        </form>

    </div>

    <div class="container-sm justify-content-sm-center">
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

        </main>
        <footer class="footer p-3 bg-secondary bg-gradient text-white shadow"><small>HAL_PH_term2</small></footer>


</body>

</html>