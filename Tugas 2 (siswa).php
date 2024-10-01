<?php

// Data siswa
$siswa = [
    ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
    ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
    ["nama" => "Cici", "matematika" => 75, "bahasa_inggris" => 80, "ipa" => 70],
    ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 90],
    ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55],
];

// Variabel untuk menyimpan jumlah siswa lulus dan tidak lulus
$jumlahLulus = 0;
$jumlahTidakLulus = 0;

echo "<h2>Daftar Siswa</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Rata-rata</th><th>Status</th><th>Mata Pelajaran yang Harus Diperbaiki</th></tr>";

foreach ($siswa as $data) {
    // a) Hitung rata-rata nilai
    $rataRata = ($data["matematika"] + $data["bahasa_inggris"] + $data["ipa"]) / 3;

    // b) Tentukan status kelulusan
    if ($rataRata >= 75) {
        $status = "Lulus";
        $mapelTerendah = "-"; // Tidak ada mata pelajaran yang perlu diperbaiki
        $jumlahLulus++;
    } else {
        $status = "Tidak Lulus";
        $jumlahTidakLulus++;

        // c) Tentukan mata pelajaran dengan nilai terendah
        $nilaiTerendah = min($data["matematika"], $data["bahasa_inggris"], $data["ipa"]);
        $mapelTerendah = "";

        if ($nilaiTerendah == $data["matematika"]) {
            $mapelTerendah = "Matematika";
        } elseif ($nilaiTerendah == $data["bahasa_inggris"]) {
            $mapelTerendah = "Bahasa Inggris";
        } else {
            $mapelTerendah = "IPA";
        }
    }

    // d) Cetak daftar siswa, rata-rata, status kelulusan, dan mata pelajaran yang harus diperbaiki
    echo "<tr>";
    echo "<td>{$data['nama']}</td>";
    echo "<td>" . round($rataRata, 2) . "</td>";
    echo "<td>$status</td>";
    echo "<td>$mapelTerendah</td>";
    echo "</tr>";
}

echo "</table>";

// e) Hitung dan tampilkan jumlah siswa yang lulus dan tidak lulus
echo "<p>Total siswa yang lulus: $jumlahLulus</p>";
echo "<p>Total siswa yang tidak lulus: $jumlahTidakLulus</p>";

?>
