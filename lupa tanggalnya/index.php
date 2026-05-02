<?php
// 1. Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "siswa");

if (!$conn) {
    die("Koneksi gagal!");
}

// 2. Query Data dengan JOIN
$sql = "SELECT 
            s.nisn_siswa,
            s.nama_siswa,
            k.nama_kelas,
            k.wali_kelas,
            s.mapel_senin,
            s.mapel_selasa,
            s.mapel_rabu
        FROM data_siswa s
        JOIN kelas k ON s.id_kelas = k.id_kelas";

$result = mysqli_query($conn, $sql);

// 3. Tampilkan Data
echo "<h2>DAFTAR SISWA</h2>";
echo "<hr>";

$no = 1;
while ($data = mysqli_fetch_array($result)) {
    echo $no . ". ";
    echo $data['nisn_siswa'] . " - " . $data['nama_siswa'];
    echo " | Kelas: " . $data['nama_kelas'];
    echo " | Wali Kelas: " . $data['wali_kelas'] . "<br>";
    echo "Mapel: Senin(" . $data['mapel_senin'] . "), ";
    echo "Selasa(" . $data['mapel_selasa'] . "), ";
    echo "Rabu(" . $data['mapel_rabu'] . ")";
    echo "<br><br>";
    $no++;
}

// 4. Tutup Koneksi
mysqli_close($conn);
?>
