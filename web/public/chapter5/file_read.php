<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>アクセスログ</title>
</head>
<body>
<table border="1">
    <tr>
        <th>アクセス日時</th>
        <th>スクリプト名</th>
        <th>ユーザーエージェント</th>
        <th>リンク元のURL</th>
    </tr>
    <?php
    $file = fopen('access.log', 'rb');
    flock($file, LOCK_SH);

    while ($line = fgetcsv($file, 1024, "\t")) {
        print '<tr>';
        foreach ($line as $value) {
            print '<td>' . $value . '</td>';
        }
        print '</tr>';
    }
    flock($file, LOCK_UN);
    ?>
</table>
</body>
</html>