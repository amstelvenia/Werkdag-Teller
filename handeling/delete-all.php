<?php
include(__DIR__ . '/../overig/database-connectie.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_all'])) {

    $sql = "DELETE FROM werkdag";
    $conn->query($sql);

    header("Location: ../index.php");
    exit;
}
?>