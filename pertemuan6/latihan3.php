<!DOCTYPE html>
<html>
<head>
    <title>Latihan Array 3</title>
</head>
<body>

<?php

$UsiaKaryawan["Lisa"] = "28";
$UsiaKaryawan["Jack"] = "16";
$UsiaKaryawan["Ryan"] = "35";
$UsiaKaryawan["Rachel"] = "46";
$UsiaKaryawan["Grace"] = "34";

foreach ($UsiaKaryawan as $Nama => $umur) {
    echo "Nama Karyawan: $Nama, Usia: $umur th <br>";
}

?>

</body>
</html>