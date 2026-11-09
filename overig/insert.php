<?php

include(__DIR__ . '/database-connectie.php');

$stmt = $conn->prepare(
    "INSERT INTO werkdag (begintijd, eindtijd, pauze, dag, week, maand) 
    VALUES (:begintijd, :eindtijd, :pauze, :dag, :week, :maand)"
);

$stmt->execute([
    ':begintijd' => '17:00:00',
    ':eindtijd' => '21:30:00',
    ':pauze' => 15,
    ':dag' => 'dag 2',
    ':week' => 'week 1',
    ':maand' => '2026-11-09',
]);