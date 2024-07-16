<?php 

    $scan = scandir('./');
    $files = array_filter($scan, function($elem) use ($blacklist) {
        if(preg_match("(\w.+php)", $elem)){
            if($elem != 'index.php')
                return true;
        }
    });

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crawler Training</title>
    <style>
        table, th, td {
            border: 1px solid;
            padding:5px;
        }
    </style>
</head>
<body>
    <h2>Symfony Crawler Training Page</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Script</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $increment = 1;?>
            <?php foreach($files as $key => $script): ?>
                <tr>
                    <td><?=$increment?></td>
                    <td><?=$script?></td>
                    <td>
                        <a href="/<?=$script?>">
                            <button>Go</button>
                        </a>
                    </td>
                </tr>
                <?php $increment++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>