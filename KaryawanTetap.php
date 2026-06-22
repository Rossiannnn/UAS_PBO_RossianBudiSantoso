<?php
/**
 * File: KaryawanTetap.php
 */
require_once 'Karyawan.php';

class KaryawanTetap extends Karyawan {
    private $tunjanganKesehatan;
    private $opsiSahamId;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $tunjanganKesehatan, $opsiSahamId = null) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, 'tetap');
        $this->tunjanganKesehatan = (float)$tunjanganKesehatan;
        $this->opsiSahamId = $opsiSahamId;
    }

    public function hitungTotalGaji() {
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari) + $this->tunjanganKesehatan;
    }

    // --- IMPLEMENTASI OVERRIDING LOGIKA BARU ---
    public function hitungGajiBersih() {
        // Gaji Bersih = (hariKerjaMasuk * gajiDasarPerHari) + tunjanganKesehatan
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari) + $this->tunjanganKesehatan;
    }

    public function tampilkanProfilKaryawan() {
        echo "<h3>[Profil Karyawan Tetap]</h3>";
        echo "ID Karyawan: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Tunjangan Kesehatan: Rp " . number_format($this->tunjanganKesehatan, 0, ',', '.') . "<br>";
        echo "Opsi Saham ID: " . ($this->opsiSahamId ?? '-') . "<br>";
        echo "Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br>";
    }

    public function getTunjanganKesehatan() { return $this->tunjanganKesehatan; }
    public function getOpsiSahamId() { return $this->opsiSahamId; }
}
?>