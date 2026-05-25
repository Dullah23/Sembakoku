<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produk = $_POST['id_produk'];

    $query = "DELETE FROM produk WHERE id_produk='$id_produk'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: produk_admin.html");
        exit;
    } else {
        echo "Gagal menghapus produk.";
    }
} else {
    echo "Metode tidak diizinkan.";
}
?>
