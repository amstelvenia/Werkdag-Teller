<?php
include __DIR__ . '/../overig/database-connectie.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dag = strip_tags($_POST['dag'] ?? 'Geen dag opgegeven');
    $week = strip_tags($_POST['week'] ?? 'Geen week opgegeven');
    $maand = strip_tags($_POST['maand'] ?? 'Geen maand opgegeven');
    $begintijd = $_POST['begintijd'] ?? '';
    $eindtijd = $_POST['eindtijd'] ?? '';
    $pauze = (int) ($_POST['pauze'] ?? 0);
    $oldid = (int) ($_POST['oldId'] ?? 0);

    $sql = "UPDATE werkdag SET 
    begintijd = :begintijd, 
    eindtijd = :eindtijd, 
    pauze = :pauze, 
    dag = :dag, 
    week = :week, 
    maand = :maand
    WHERE id = :oldid";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':begintijd' => $begintijd,
        ':eindtijd' => $eindtijd,
        ':pauze' => $pauze,
        ':dag' => $dag,
        ':week' => $week,
        ':maand' => $maand,
        ':oldid' => $oldid
    ]);
}

header("Location: ../index.php");
exit;
?>

