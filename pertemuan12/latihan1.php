<?php
$koneksi = new mysqli("localhost", "root", "", "lat_dbase");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$sql = "DELETE FROM tbl_mhs
        WHERE LastName = 'Prabowo'";

if ($koneksi->query($sql) === TRUE) {
    if ($koneksi->affected_rows > 0) {
        echo "Data mahasiswa berhasil dihapus!";
        echo "<br>Jumlah data yang dihapus: "
             . $koneksi->affected_rows;
    } else {
        echo "Tidak ada data dengan nama belakang Prabowo.";
    }
} else {
    echo "Error: " . $koneksi->error;
}

echo "<br><br>";
echo "<a href='index.php'>Kembali ke halaman utama</a>";

$koneksi->close();
?>
