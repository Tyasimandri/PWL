<!DOCTYPE html>
<html>
<head>
    <title>Form Greeting</title>
</head>
<body>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST["nama"]);
        $nim = htmlspecialchars($_POST["nim"]);
        echo "<p>Hello, $nama ($nim)</p>";
    }
    ?>
</body>
</html>
