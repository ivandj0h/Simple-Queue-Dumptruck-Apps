<?php
$conn = new mysqli('localhost', 'root', 'password', 'hopper');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}

$result = $conn->query("SELECT COUNT(*) AS total FROM antrian WHERE kode='11'")->fetch_assoc();
$jumlah = $result['total'];
if(Empty($jumlah)) {
	echo "0";
}else {
	echo $jumlah;
}
?>
