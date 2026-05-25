<?php
$servername = "localhost";
$username   = "sasn7498";
$password   = "123Toku:)456";
$dbname     = "sasn7498_abdullah";

$koneksi = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
