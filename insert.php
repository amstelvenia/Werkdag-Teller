<?php

include 'database-connectie.php'; 

$stmt = $conn->prepare(
    "INSERT INTO werkdag (begintijd, eindtijd, pauze, dag, week, maand) 
    VALUES (:begintijd, :eindtijd, :pauze, :dag, :week, :maand)"
);

$stmt->execute([
    ':begintijd' => '09:30:00',
    ':eindtijd' => '10:23:00',
    ':pauze' => 15,
    ':dag' => 'dag 1',
    ':week' => 'week 1',
    ':maand' => '2026-11-08',
]);