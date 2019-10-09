<?php
include 'db.php';

$r = $conn->query("SELECT * FROM antrian ORDER BY created_at DESC")->fetch_assoc();
$kode = $r['kode'];

if($kode == '11') { 
	echo "<span class=\"warning\">1</span>"; 
}
elseif($kode == '10') { 
	echo "<span class=\"blink\">0</span>"; 
}
elseif($kode == 20) { 
	echo "<span class=\"warning\">1</span>"; 
}
elseif($kode == 21) { 
	echo "<span class=\"green\">2</span>"; 
}
else { 
	echo "<span class=\"blink\">0</span>"; 
}
