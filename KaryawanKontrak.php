<?php
/**
 * File: KaryawanKontrak.php
 */
require_once 'Karyawan.php';

class KaryawanKontrak extends Karyawan {
    private $durasiKontrakBulan;
    private $agensiPenyalur;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $durasiKontrakBulan, $agensiPenyalur) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, 'kontrak');
        $this->durasiKontrakBulan = (int)$durasiKontrakBulan;
        $this->agensiPenyalur = $agensiPenyalur;
    }

    // Tetap wajib ada karena ini abstract method dari parent
    public function hitungTotalGaji() {
        return $this->hariKerjaMasuk * $this->gajiDasarPerHari;
    }

    // --- IMPLEMENTASI OVERRIDING LOGIKA BARU ---
    public function hitungGajiBersih() {
        // Gaji Bersih = hariKerjaMasuk * gajiDasarPerHari
        return $this->hariKerjaMasuk * $this->gajiDasarPerHari;
    }

    public function tampilkanProfilKaryawan() {
        echo "<h3>[Profil Karyawan Kontrak]</h3>";
        echo "ID Karyawan: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Durasi Kontrak: " . $this->durasiKontrakBulan . " Bulan<br>";
        echo "Agensi Penyalur: " . $this->agensiPenyalur . "<br>";
        echo "Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br>";
    }

    public function getDurasiKontrakBulan() { return $this->durasiKontrakBulan; }
    public function getAgensiPenyalur() { return $this->agensiPenyalur; }
}
?>