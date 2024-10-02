<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai Pemrograman Internet</title>
</head>
<body>
    <h2>Form Input Nilai Pemrograman Internet</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>
        
        <label for="nilai">Nilai (0 - 100):</label><br>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Ambil data input
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $nilai = $_POST['nilai'];

        // Validasi nilai
        if ($nilai >= 85 && $nilai <= 100) {
            $grade = 'A';
        } elseif ($nilai >= 80 && $nilai < 85) {
            $grade = 'B+';
        } elseif ($nilai >= 75 && $nilai < 80) {
            $grade = 'B';
        } elseif ($nilai >= 70 && $nilai < 75) {
            $grade = 'C+';
        } elseif ($nilai >= 65 && $nilai < 70) {
            $grade = 'C';
        } elseif ($nilai >= 50 && $nilai < 65) {
            $grade = 'D';
        } elseif ($nilai >= 0 && $nilai < 50) {
            $grade = 'E';
        } else {
            $grade = 'Nilai tidak valid';
        }

        // Tampilkan hasil
        echo "<h3>Hasil:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "NIM: " . $nim . "<br>";
        echo "Nilai Angka: " . $nilai . "<br>";
        echo "Nilai Huruf: " . $grade . "<br>";
    }
    ?>
</body>
</html>
