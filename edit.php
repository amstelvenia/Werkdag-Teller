<?php 
$oldId = $_GET['id'];
$dag = $_GET['dag'];
$week = $_GET["week"];
$maand = $_GET["maand"];
$begintijd = $_GET["begintijd"];
$eindtijd = $_GET["eindtijd"];
$pauze = $_GET["pauze"];
include(__DIR__ . '/overig/database-connectie.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="handeling/update.php" method="post">
        <input type="hidden" name="oldId" value="<?php echo $oldId; ?>">
        <label for="begintijd">Begintijd:</label><br>
        <input type="time" id="begintijd" name="begintijd" required value="<?php echo $begintijd; ?>"><br>
        <label for="eindtijd">Eindtijd:</label><br>
        <input type="time" id="eindtijd" name="eindtijd" required value="<?php echo $eindtijd; ?>"><br>
        <label for="pauze">Pauze:</label><br>
        <input type="number" id="pauze" name="pauze" required value="<?php echo $pauze; ?>"><br>
        <label for="dag">Welke dag:</label><br>
        <input type="text" id="dag" name="dag" value="<?php echo $dag; ?>"><br>
        <label for="week">Hoeveelste week:</label><br>
        <input type="text" id="week" name="week" value="<?php echo $week; ?>"><br>
        <label for="maand">Hoeveelste maand:</label><br>
        <input type="text" id="maand" name="maand" value="<?php echo $maand; ?>"><br><br>
        <input type="submit" value="Opslaan">
        <a href="index.php" class="anuleer">Anuleer</a>
    </form>
</body>
</html>