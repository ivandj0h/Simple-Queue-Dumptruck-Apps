<?php
$conn = new mysqli('localhost', 'root', 'password', 'hopper');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}

$result = $conn->query("SELECT TIME(created_at) AS jam FROM antrian WHERE kode='11' ORDER BY created_at DESC")->fetch_assoc();
$jam = $result['jam'];
if(Empty($jam)) {
	echo "-";
}else {
	echo 'Pukul ' . $jam;
}
?>
