<?php

require_once('./Menu.php');
require_once('./Noodle.php');

// $menu = new Menu($_POST['category'], $_POST['menu'], $_POST['price']);

// $data = $menu->getData();

$noodle = new Noodle($_POST['category'], $_POST['menu'], $_POST['noodleHardness'], $_POST['price']);
$data = $noodle->getData();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <?php foreach ($data as $k => $v) : ?>
                                <tr>
                                    <th><?= $k ?></th>
                                    <td><?= $v ?></td>
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
