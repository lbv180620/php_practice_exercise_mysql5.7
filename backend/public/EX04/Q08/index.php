<?php

$products = [
    0 => [
        'product_name' => 'みかん',
        'production_area' => '愛媛県',
        'quality' => '優',
        'price' => 3000,
    ],
    1 => [
        'product_name' => 'りんご',
        'production_area' => '青森県',
        'quality' => '優',
        'price' => 5000,
    ],
    2 => [
        'product_name' => 'バナナ',
        'production_area' => 'フィリピン',
        'quality' => '優',
        'price' => 1500,
    ],
];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題04設問08</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>品名</th>
                                <th>産地</th>
                                <th>品質</th>
                                <th>価格(円)</th>
                            </tr>
                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <?php foreach ($product as $v) : ?>
                                        <td><?= $v ?></td>
                                    <?php endforeach ?>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>
