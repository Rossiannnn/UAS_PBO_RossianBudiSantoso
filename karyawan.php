<?php
abstract class Karyawan {
    protected $id_karyawan;
    protected $nama_karyawan;
    protected $departemen;
    protected $hari_kerja;
    protected $gaji_dasar_per_hari;
    protected $jenis_karyawan;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hari_kerja, $gaji_dasar_per_hari, $jenis_karyawan) {
        $this->id_karyawan = $id_karyawan;
        $this->nama_karyawan = $nama_karyawan;
        $this->departemen = $departemen;
        $this->hari_kerja = (int)$hari_kerja;
        $this->gaji_dasar_per_hari = (float)$gaji_dasar_per_hari;
        $this->jenis_karyawan = $jenis_karyawan;
    }

    // Abstract method: Rumusnya berbeda antara tetap, kontrak, dan magang
    abstract public function hitungTotalGaji();

    // Getter untuk setiap atribut (disediakan secara lengkap di file terlampir)
    // ... 
}
?>