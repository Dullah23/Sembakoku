<?php
include 'koneksi.php';
$produk = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Produk</title>
  <style>
    body {
      font-family: sans-serif;
      background: #f1f5f9;
      padding: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .btn-tambah {
      display: inline-block;
      background-color: #4caf50;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 6px;
      margin-bottom: 15px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    .aksi-btn {
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      color: white;
      cursor: pointer;
      text-decoration: none;
    }

    .edit-btn {
      background-color: #2196f3;
    }

    .hapus-btn {
      background-color: #f44336;
    }
  </style>
</head>
<body>

  <h2>Daftar Produk</h2>
  <a href="tambah.php" class="btn-tambah">+ Tambah Produk</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      session_start();
        if (!isset($_SESSION['id_user'])) {
            header("Location: login.php");
            exit;
        }
      while ($row = mysqli_fetch_assoc($produk)) : ?>
        <tr>
          <td><?= $row['id_produk'] ?></td>
          <td><?= $row['nama_produk'] ?></td>
          <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
          <td><?= $row['stok'] ?></td>
          <td>
            <a href="edit.php?id=<?= $row['id_produk'] ?>" class="aksi-btn edit-btn">Edit</a>
            <form action="APIhapusProduk.php" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
              <input type="hidden" name="id_produk" value="<?= $row['id_produk'] ?>">
              <button type="submit" class="aksi-btn hapus-btn">Hapus</button>
            </form>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

</body>
</html>
