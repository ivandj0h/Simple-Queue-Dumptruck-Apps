<?php
// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname = "hopper";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
include 'db.php';

$dat = $_GET["ultra"];

// $jam = date("Y-m-d h:i:sa");

$sql = "INSERT INTO antrian (kode) VALUES ('$dat')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>