<?php
include 'db.php';

$r = $conn->query("SELECT * FROM antrian ORDER BY created_at DESC")->fetch_assoc();
$kode = $r['kode'];

if($kode == '11') { echo "1"; }
elseif($kode == 10) { echo "0"; }
elseif($kode == 20) { echo "2"; }
elseif($kode == 21) { echo "0"; }
else { echo "<font color=red>x</font>"; }
?>
