<?php
include 'koneksi.php';

header("Content-Type: application/json");

$query = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC");
$data = [];

while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

echo json_encode([
    "produk" => $data
]);
?>
