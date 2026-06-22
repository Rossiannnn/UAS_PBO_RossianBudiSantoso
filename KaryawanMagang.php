<?php
/**
 * File: KaryawanMagang.php
 */
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    private $uangSakuBulanan;
    private $sertifikatKampusMerdeka;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $uangSakuBulanan, $sertifikatKampusMerdeka = null) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, 'magang');
        $this->uangSakuBulanan = (float)$uangSakuBulanan;
        $this->sertifikatKampusMerdeka = $sertifikatKampusMerdeka;
    }

    public function hitungTotalGaji() {
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari) + $this->uangSakuBulanan;
    }

    // --- IMPLEMENTASI OVERRIDING LOGIKA BARU ---
    public function hitungGajiBersih() {
        // Gaji Bersih = (hariKerjaMasuk * gajiDasarPerHari) * 0.80
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari) * 0.80;
    }

    public function tampilkanProfilKaryawan() {
        echo "<h3>[Profil Karyawan Magang]</h3>";
        echo "ID Karyawan: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Uang Saku Tambahan: Rp " . number_format($this->uangSakuBulanan, 0, ',', '.') . "<br>";
        echo "Sertifikat Kampus Merdeka: " . ($this->sertifikatKampusMerdeka ?? 'Tidak Ada') . "<br>";
        echo "Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br>";
    }

    public function getUangSakuBulanan() { return $this->uangSakuBulanan; }
    public function getSertifikatKampusMerdeka() { return $this->sertifikatKampusMerdeka; }
}
?>