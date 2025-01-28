<?php
include "veritabani.php";

// Tablo adını belirt
$tableName = "kitaplar";

// SQL sorgusunu hazırla
$sql = "SELECT * FROM $tableName";

// Sorguyu çalıştır
$result = $mysqli_conn->query($sql);

if ($result->num_rows > 0) {
    // Her bir satırı döngü ile al ve ekrana yazdır
    echo "bir şeyler buldum ama...<br><br>'";
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . 
             " - Kitap Adı: " . $row["kitap_adi"] . 
             " - Yazar Adı: " . $row["yazar_adi"] . 
             " - Kitap Türü: " . $row["kitap_turu"] . 
             "<br>";
    }
} else {
    echo "Tabloda kayıt bulunamadı.";
}

$conn->close();
?>
