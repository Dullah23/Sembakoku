<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk - SembakoKu</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
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
            width: 380px;
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
            background: #4caf50;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #43a047;
        }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Tambah Produk Baru</h2>
        <form method="POST" action="APItambahProduk.php">
            <input type="text" name="nama_produk" placeholder="Nama Produk" required>
            <input type="number" name="harga" placeholder="Harga (Rp)" required>
            <input type="number" name="stok" placeholder="Stok" required>
            <button type="submit">Simpan Produk</button>
        </form>
    </div>
</body>
</html>
