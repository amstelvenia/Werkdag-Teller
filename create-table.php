<?php 
    include 'database-connectie.php'; 
    
    $sql = "CREATE TABLE IF NOT EXISTS werkdag (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        begintijd TIME NOT NULL,
        eindtijd TIME NOT NULL,
        pauze INTEGER NOT NULL,
        dag TEXT NOT NULL,
        week TEXT NOT NULL,
        maand TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    $conn->exec($sql);
?>