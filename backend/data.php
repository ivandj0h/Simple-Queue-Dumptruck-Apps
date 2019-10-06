<?php
include 'db.php';

$result = $conn->query("SELECT COUNT(*) AS total FROM antrian WHERE kode='11'")->fetch_assoc();
$jumlah = $result['total'];
if(Empty($jumlah)) {
	echo "0";
}else {
	echo $jumlah;
}
?>
