<?php
$id = $_GET['id'];

include __DIR__ . '/../overig/database-connectie.php';

$deleteDag = "DELETE FROM werkdag WHERE id = $id";

$klaar = $conn->exec($deleteDag);

header("Location: ../index.php");
exit;

?>