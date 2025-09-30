<?php
// Daftar barang (array)
$barang = [
    ["nama" => "Buku", "harga" => 25000],
    ["nama" => "Pulpen", "harga" => 5000],
    ["nama" => "Tas", "harga" => 75000],
    ["nama" => "Sepatu", "harga" => 120000]
];

echo "=== SISTEM KASIR SEDERHANA ===<br><br>";

// Simulasi belanja: pelanggan membeli 3 barang pertama
$total = 0;
for ($i = 0; $i < 3; $i++) {
    echo "Barang: " . $barang[$i]["nama"] . " - Rp" . $barang[$i]["harga"] . "<br>";
    $total += $barang[$i]["harga"];
}

echo "<br>Total Belanja: Rp" . $total . "<br>";

// Kontrol: cek diskon
if ($total > 100000) {
    $diskon = 0.1 * $total; // 10%
    $total -= $diskon;
    echo "Anda mendapat diskon 10%!<br>";
    echo "Total setelah diskon: Rp" . $total . "<br>";
} else {
    echo "Belanja belum mencapai Rp100.000, tidak ada diskon.<br>";
}

// Switch: metode pembayaran
$metode = "Transfer"; // bisa diganti: Cash, Transfer, e-Wallet
echo "<br>Metode Pembayaran: ";
switch ($metode) {
    case "Cash":
        echo "Bayar tunai di kasir.<br>";
        break;
    case "Transfer":
        echo "Transfer ke rekening BCA: 123-456-789.<br>";
        break;
    case "e-Wallet":
        echo "Bayar via OVO / GoPay / Dana.<br>";
        break;
    default:
        echo "Metode pembayaran tidak dikenal.<br>";
}
?>
