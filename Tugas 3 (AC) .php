<?php
// Fungsi untuk menentukan status AC berdasarkan suhu dan kelembaban
function kontrolAC($suhu, $kelembaban) {
    // Kondisi AC mati
    if ($suhu < 23 && $kelembaban < 50) {
        return "AC Mati";
    }
    // Kondisi AC rendah
    elseif ($suhu < 23) {
        return "AC Menyala Rendah";
    }
    // Kondisi AC sedang
    elseif ($suhu >= 23 && $suhu < 28) {
        return "AC Menyala Sedang";
    }
    // Kondisi AC berat (suhu tinggi dan kelembaban tinggi)
    elseif ($suhu >= 28 && $suhu <= 30 && $kelembaban >= 70) {
        return "AC Menyala Berat";
    }
    // Kondisi suhu tinggi namun kelembaban tidak tinggi
    elseif ($suhu >= 28 && $suhu <= 30) {
        return "AC Menyala Sedang";
    }
    // Kondisi lainnya untuk default (jika suhu atau kelembaban di luar batas yang ditentukan)
    else {
        return "Data input tidak valid";
    }
}

// Array input contoh suhu dan kelembaban
$data = [
    ['suhu' => 22, 'kelembaban' => 40],
    ['suhu' => 22, 'kelembaban' => 60],
    ['suhu' => 25, 'kelembaban' => 45],
    ['suhu' => 29, 'kelembaban' => 75],
    ['suhu' => 30, 'kelembaban' => 50],
    ['suhu' => 32, 'kelembaban' => 80],
    ['suhu' => 28, 'kelembaban' => 69],
    ['suhu' => 28, 'kelembaban' => 80],
];

// Menampilkan soal deskripsi terlebih dahulu
echo "<h3>Soal: Suhu pada AC</h3>";
echo "<p>Tinggi (28° - 30°)</p>";
echo "<p>Sedang (23° - 28°)</p>";
echo "<p>Rendah (&lt;23°)</p>";

// Menampilkan tabel hasil
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Suhu (°C)</th><th>Kelembaban (%)</th><th>Status AC</th></tr>";

foreach ($data as $input) {
    $suhu = $input['suhu'];
    $kelembaban = $input['kelembaban'];
    $statusAC = kontrolAC($suhu, $kelembaban);
    echo "<tr>";
    echo "<td>{$suhu}°C</td>";
    echo "<td>{$kelembaban}%</td>";
    echo "<td>{$statusAC}</td>";
    echo "</tr>";
}

echo "</table>";
?>
