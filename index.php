<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Naslov</title>
</head>
<body>
<h1>Prvi</h1>

<p>
    <?php
    echo('Pozdrav iz PHP-a');
    echo('<br>');
    echo(date('d.m.Y.'));

    $date1 = date('Y-m-d');
    $date2 = date('2016-03-18');
    $difference = date_diff($date1, $date2);

    ?>
</p>

<p>
    <?php
    $dana_do_praznika = 45;
    echo('Do praznika je ostalo još: <b>' . $dana_do_praznika . '</b>');
    ?>
</p>
</body>
</html>
