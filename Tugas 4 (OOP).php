<?php
// Abstraction
abstract class Kendaraan {
    // Encapsulation
    private $namaKendaraan;
    private $kecepatan;

    // Constructor
    public function __construct($namaKendaraan, $kecepatan) {
        $this->namaKendaraan = $namaKendaraan;
        $this->kecepatan = $kecepatan;
    }

    // Getter for namaKendaraan
    public function getNamaKendaraan() {
        return $this->namaKendaraan;
    }

    // Setter for namaKendaraan
    public function setNamaKendaraan($namaKendaraan) {
        $this->namaKendaraan = $namaKendaraan;
    }

    // Getter for kecepatan
    public function getKecepatan() {
        return $this->kecepatan;
    }

    // Setter for kecepatan
    public function setKecepatan($kecepatan) {
        $this->kecepatan = $kecepatan;
    }

    // Abstract method suara
    abstract public function suara();
}

// Inheritance: Motor is inheriting from Kendaraan
class Motor extends Kendaraan {
    // Implementing the abstract method
    public function suara() {
        return $this->getNamaKendaraan() . " mengeluarkan suara: Brrrmmm Brrrmmm!";
    }
}

// Inheritance: Mobil is inheriting from Kendaraan
class Mobil extends Kendaraan {
    // Implementing the abstract method
    public function suara() {
        return $this->getNamaKendaraan() . " mengeluarkan suara: Vrooom Vrooom!";
    }
}

// Polimorfisme: Motor dan Mobil memiliki implementasi yang berbeda dari metode 
$motor = new Motor("Motor Yamaha", 120);
$mobil = new Mobil("Mobil Toyota", 150);

// Membuat tabel HTML untuk menampilkan hasil
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Nama Kendaraan</th><th>Suara Kendaraan</th></tr>";
echo "<tr><td>" . $motor->getNamaKendaraan() . "</td><td>" . $motor->suara() . "</td></tr>";
echo "<tr><td>" . $mobil->getNamaKendaraan() . "</td><td>" . $mobil->suara() . "</td></tr>";
echo "</table>";
?>
