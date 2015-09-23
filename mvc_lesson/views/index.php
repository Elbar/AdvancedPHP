<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<table border="1">
    <tr>
        <th>Название</th>
    </tr>
    <tr>
        <?php foreach ($items as $item): ?>
        <tr>
        <td><?php echo $item['title']; ?></td>
        <td><img src=" <?php echo $item['path']; ?>" style="max-width: 200px;" ></td>

    </tr>
    <?php endforeach; ?>

    </tr>
    </table>
<a href="add.php">Добавить фотографию</a>


</body>
</html>