<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produk   = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga       = $_POST['harga'];
    $stok        = $_POST['stok'];

    $response = array();

    $query = "UPDATE produk SET nama_produk='$nama_produk', harga='$harga', stok='$stok' WHERE id_produk='$id_produk'";
    if (mysqli_query($koneksi, $query)) {
        $response['success'] = true;
        $response['message'] = "Produk berhasil diperbarui.";
    } else {
        $response['success'] = false;
        $response['message'] = "Gagal memperbarui produk.";
    }

    echo json_encode($response);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Metode tidak diizinkan.'
    ]);
}
?>
