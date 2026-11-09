<?php
    include(__DIR__ . '/database-connectie.php');

    $stmt = $conn->query("SELECT * FROM werkdag");
    $dagen = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $totaalUren = 0; 
    foreach ($dagen as $dag):
        $begin = new DateTime($dag['begintijd']);
        $eind  = new DateTime($dag['eindtijd']);
        $verschil = $begin->diff($eind);
        $totaalMinuten = ($verschil->days * 24 * 60) + ($verschil->h * 60) + $verschil->i;
        $gewerkteMinuten = $totaalMinuten - $dag['pauze'];
        $uren = round($gewerkteMinuten / 60, 2);
        $totaalUren += $uren;
    endforeach;
?>