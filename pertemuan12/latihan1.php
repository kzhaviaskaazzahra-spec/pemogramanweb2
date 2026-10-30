<?php
$koneksi = new mysqli("localhost", "root", "", "lat_dbase");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$sql = "UPDATE tbl_mhs
        SET Age = 36
        WHERE FirstName = 'Karina'
        AND LastName = 'Suwandi'";

if ($koneksi->query($sql) === TRUE) {
    if ($koneksi->affected_rows > 0) {
        echo "Data mahasiswa berhasil diperbarui!";
    } else {
        echo "Tidak ada data yang berubah. Data mungkin sudah berumur 36 tahun.";
    }
} else {
    echo "Error: " . $koneksi->error;
}

echo "<br><br>";
echo "<a href='index.php'>Kembali ke halaman utama</a>";

$koneksi->close();
?>
