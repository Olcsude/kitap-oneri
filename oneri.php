<?php 
session_start();
include "veritabani.php"; 
$ad = $_SESSION['ad'];

$kitap_tur = $_SESSION['kitap_tur'];
$turk_yazar = $_SESSION['turk_yazar'];
$yabanci_yazar = $_SESSION['yabanci_yazar'];

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kitap Öneri Programı</title>
</head>
<body>
    <h1>Kitap Öneri Programı</h1>
    <?php
    echo "Merhaba $ad! Sana önereceğimiz kitaplar aşağıdadır.<br>";
    echo "<br>";
    echo "Seçtiğiniz Türk yazar adı: $turk_yazar<br>";
    echo "Seçtiğiniz Yabancı yazar adı: $yabanci_yazar<br>";
    echo "Seçtiğiniz kitap türü: $kitap_tur<br>";
    echo "<br>";
    

    $sql_turk = "SELECT * FROM kitaplar WHERE yazar_adi='$turk_yazar' OR yazar_adi='$yabanci_yazar' OR kitap_turu='$kitap_tur'";
    $result_turk = $mysqli_conn->query($sql_turk);

    if ($result_turk->num_rows > 0) {
        // Verileri ekrana yazdır
        while($row = $result_turk->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Kitap Adı: " . $row["kitap_adi"] . " - Yazar Adı: " . $row["yazar_adi"] . " - Kitap Türü: " . $row["kitap_turu"] . "<br>";
        }
    } else {
        echo "Kayıt bulunamadı.";
    }
    

    $conn->close();

    ?>
</body>
</html>
