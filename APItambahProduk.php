<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_produk = $_POST['nama_produk'];
    $harga       = $_POST['harga'];
    $stok        = $_POST['stok'];

    $query = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama_produk', '$harga', '$stok')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: produk_admin.php");
        exit;
    } else {
        echo "Gagal menambahkan produk.";
    }
} else {
    echo "Metode tidak diizinkan.";
}
?>
