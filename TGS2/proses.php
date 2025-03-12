<?php
require 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = htmlspecialchars($_POST["nim"]);
    $nama = htmlspecialchars($_POST["nama"]);

    // Membuat objek dari class Mahasiswa
    $mhs = new Mahasiswa();
    $mhs->setData($nim, $nama);

    // Mengambil data sebagai array
    $data = $mhs->getData();

    // Menampilkan data
    echo "<h2>Data Mahasiswa</h2>";
    echo "NIM: " . $data['nim'] . "<br>";
    echo "Nama: " . $data['nama'];
} else {
    echo "Akses ditolak!";
}
?>
