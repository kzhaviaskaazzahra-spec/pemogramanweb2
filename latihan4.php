<!DOCTYPE html>
<html>
<head>
    <title>Tanggal</title>
</head>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

date_default_timezone_set('Asia/Jakarta');

echo "<font size='10px'>";
echo "Sekarang tanggal ";
echo date('d-F-Y');
echo "<br>dan jam ";
echo date('h:i:s A');
echo "</font>";
?>

</body>
</html>