<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=elma_kitap", "elma_kitap", "SelcukEbrarSude05.");
    $mysqli_conn = new mysqli("localhost", "elma_kitap", "SelcukEbrarSude05.", "elma_kitap");
    
}
catch (PDOException $e) {
    echo $e->getMessage();
}
catch (Throwable $e) {
    echo $e->getMessage();
}
?>