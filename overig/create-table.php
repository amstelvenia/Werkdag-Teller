<?php 
    include(__DIR__ . '/database-connectie.php');
    
    $sql = "CREATE TABLE IF NOT EXISTS werkdag (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        begintijd TIME NOT NULL,
        eindtijd TIME NOT NULL,
        pauze INTEGER NOT NULL,
        dag TEXT,
        week TEXT,
        maand TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    $conn->exec($sql);
?>