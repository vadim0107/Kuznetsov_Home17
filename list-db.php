<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework3</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<table border="2">
    <tr>
        <th>name</th>
        <th>surname</th>
        <th>gender</th>
        <th>age</th>
        <th>birthday</th>
        <th>family</th>
        <th>social</th>
        <th>home</th>
        <th>activity</th>
        <th>frequency</th>
        <th>books</th>
        <th>comments</th>
    </tr>
    <?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'homework17';

    $db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name) OR DIE("Не могу создать соединение ");

    $db_connect->set_charset("utf8");

    $sql = "SELECT * FROM anketa";
    $sql_result = $db_connect ->query($sql);
    while($row = $sql_result->fetch_assoc()) {
    ?>

    <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['surname'] ?></td>
        <td><?= $row['gender'] ?></td>
        <td><?= $row['age'] ?></td>
        <td><?= $row['birthday'] ?></td>
        <td><?= $row['family'] ?></td>
        <td><?= $row['social'] ?></td>
        <td><?= $row['home'] ?></td>
        <td><?= $row['activity'] ?></td>
        <td><?= $row['frequency'] ?></td>
        <td><?= $row['books'] ?></td>
        <td><?= $row['comments'] ?></td>
    </tr>
        <?php
    }
    ?>
</table>
</body>
</html>