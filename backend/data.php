<?php
include 'db.php';

$r = $conn->query("SELECT * FROM antrian ORDER BY created_at DESC")->fetch_assoc();
$kode = $r['kode'];

if($kode == '11') { echo "1"; }
elseif($kode == 10) { echo "<span class=\"blink\">0</span>"; }
elseif($kode == 20) { echo "<span class=\"blink\">0</span>"; }
elseif($kode == 21) { echo "2"; }
else { echo "<span class=\"blink\">X</span>"; }
?>
