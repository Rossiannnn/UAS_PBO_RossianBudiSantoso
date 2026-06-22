<?php
/**
 * File: index.php
 * Deskripsi: Antarmuka (View) untuk menampilkan daftar slip gaji dan profil karyawan
 */
require_once 'koneksi.php';
require_once 'Karyawan.php';
require_once 'KaryawanTetap.php';
require_once 'KaryawanKontrak.php';
require_once 'KaryawanMagang.php';

// 1. Ambil data dari database
try {
    $stmt = $pdo->query("SELECT * FROM karyawan");
    $semuaKaryawan = [];

    while ($row = $stmt->fetch()) {
        // Instansiasi objek berdasarkan jenis karyawan
        switch ($row['jenis_karyawan']) {
            case 'tetap':
                $semuaKaryawan[] = new KaryawanTetap(
                    $row['id_karyawan'], $row['nama_karyawan'], $row['departemen'], 
                    $row['hari_kerja'], $row['gaji_dasar_per_hari'], 
                    $row['tunjangan_kesehatan'], $row['opsi_saham_id']
                );
                break;
            case 'kontrak':
                $semuaKaryawan[] = new KaryawanKontrak(
                    $row['id_karyawan'], $row['nama_karyawan'], $row['departemen'], 
                    $row['hari_kerja'], $row['gaji_dasar_per_hari'], 
                    $row['durasi_kontrak_bulan'], $row['agensi_penyalur']
                );
                break;
            case 'magang':
                $semuaKaryawan[] = new KaryawanMagang(
                    $row['id_karyawan'], $row['nama_karyawan'], $row['departemen'], 
                    $row['hari_kerja'], $row['gaji_dasar_per_hari'], 
                    $row['uang_saku_bulanan'], $row['sertifikat_kampus_merdeka']
                );
                break;
        }
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Slip Gaji Karyawan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .section { margin-bottom: 30px; padding: 15px; border: 1px solid #ccc; border-radius: 8px; }
        h2 { color: #333; border-bottom: 2px solid #333; padding-bottom: 5px; }
        .karyawan-card { background: #f9f9f9; padding: 10px; margin: 10px 0; border-left: 5px solid #007bff; }
    </style>
</head>
<body>

<h1>Sistem Informasi Slip Gaji Karyawan</h1>

<?php
// 2. Kelompokkan dan tampilkan data
$kategori = ['tetap' => 'Karyawan Tetap', 'kontrak' => 'Karyawan Kontrak', 'magang' => 'Karyawan Magang'];

foreach ($kategori as $key => $label) {
    echo "<div class='section'>";
    echo "<h2>Data $label</h2>";
    
    $adaData = false;
    foreach ($semuaKaryawan as $karyawan) {
        if ($karyawan->getJenisKaryawan() == $key) {
            echo "<div class='karyawan-card'>";
            $karyawan->tampilkanProfilKaryawan();
            echo "<p><strong>Total Pendapatan (Kotor):</strong> Rp " . number_format($karyawan->hitungTotalGaji(), 0, ',', '.') . "</p>";
            echo "<p><strong>Gaji Bersih (Setelah Potongan):</strong> Rp " . number_format($karyawan->hitungGajiBersih(), 0, ',', '.') . "</p>";
            echo "</div>";
            $adaData = true;
        }
    }
    
    if (!$adaData) echo "<p>Tidak ada data untuk kategori ini.</p>";
    echo "</div>";
}
?>

</body>
</html>