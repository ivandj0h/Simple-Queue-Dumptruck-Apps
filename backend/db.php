<?php

$conn = new mysqli('localhost', 'root', '', 'hopper');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}