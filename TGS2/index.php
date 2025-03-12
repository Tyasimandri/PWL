<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form action="proses.php" method="post">
        <label for="nim">NIM : </label>
        <input type="text" id="nim" name="nim" required><br>

        <br>
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama" required><br>

        <br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
