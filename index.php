<?php
    include(__DIR__ . '/overig/database-connectie.php');
    include(__DIR__ . '/overig/urenberekener.php');
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Werkdag Teller</title>
</head>
<body>
<strong><?= number_format($totaalUren, 2, ',', '.') ?> uur</strong><br>
<a href="add.php" class="add">Voeg werkdag toe</a>
<table border="1">
    <tr>
        <th>Dag</th>
        <th>Week</th>
        <th>Maand</th>
        <th>Begintijd</th>
        <th>Eindtijd</th>
        <th>Pauze</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($dagen as $dag): ?>

        <?php
            $update = "edit.php?id=" . $dag['id'] . "&dag=" . $dag['dag'] . "&week=" . $dag['week'] . "&maand=" . 
            $dag['maand'] . "&begintijd=" . $dag['begintijd'] . "&eindtijd=" . $dag['eindtijd'] . 
            "&pauze=" . $dag['pauze'];
        ?>
        <tr>
            <td><?= htmlspecialchars($dag['dag']) ?></td>
            <td><?= htmlspecialchars($dag['week']) ?></td>
            <td><?= htmlspecialchars($dag['maand']) ?></td>
            <td><?= htmlspecialchars($dag['begintijd']) ?></td>
            <td><?= htmlspecialchars($dag['eindtijd']) ?></td>
            <td><?= htmlspecialchars($dag['pauze']) ?> min</td>
            <td>
                <a class="delete" style="text-decoration: none;" href="
                <?php echo "handeling/delete.php?id=" . $dag['id']; ?>">verwijder</a>
            </td>
            <td>
                <a class="update" style="text-decoration: none;" href="<?= $update ?>">update</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

</body>
</html>
