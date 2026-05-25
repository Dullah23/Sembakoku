<?php
include 'koneksi.php';

if (!isset($_GET['id'])) {
    die("ID produk tidak ditemukan.");
}

$id_produk = $_GET['id'];
$query     = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id_produk'");
$data      = mysqli_fetch_assoc($query);

if (!$data) {
    die("Produk tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk - SembakoKu</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #eef2f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-card {
            background: #fff;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            width: 400px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #2196f3;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #1976d2;
        }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Edit Produk</h2>
        <form method="POST" action="api_edit_produk.php">
            <input type="hidden" name="id_produk" value="<?= $data['id_produk'] ?>">
            <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>" required>
            <input type="number" name="harga" value="<?= $data['harga'] ?>" required>
            <input type="number" name="stok" value="<?= $data['stok'] ?>" required>
            <button type="submit">Update Produk</button>
        </form>
    </div>
</body>
</html>
