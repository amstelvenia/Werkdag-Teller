<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <form action="handeling/store.php" method="post">
        <label for="begintijd">Begintijd:</label><br>
        <input type="time" id="begintijd" name="begintijd" required><br>
        <label for="eindtijd">Eindtijd:</label><br>
        <input type="time" id="eindtijd" name="eindtijd" required><br>
        <label for="pauze">Pauze:</label><br>
        <input type="number" id="pauze" name="pauze" required><br>
        <label for="dag">Welke dag:</label><br>
        <input type="text" id="dag" name="dag"><br>
        <label for="week">Hoeveelste week:</label><br>
        <input type="text" id="week" name="week"><br>
        <label for="maand">Hoeveelste maand:</label><br>
        <input type="text" id="maand" name="maand"><br><br>
        <input type="submit" value="Opslaan">
        <a href="index.php" class="anuleer">Anuleer</a>
    </form>
</body>
</html>