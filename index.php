<?php
include 'database-connectie.php'; 
$stmt = $conn->query("SELECT * FROM werkdag");

$dagen = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($dagen as $dag) {
    echo $dag['begintijd'] . " - " . $dag['eindtijd'] . "<br>";
}