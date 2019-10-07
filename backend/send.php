<?php

include 'db.php';

$dat = $_GET["ultra"];

// Panel 1 (11 masuk ---- 10 keluar)

if($dat > 200) {  // <== ini untuk merubah jarak

    $kod = '10';
    $sql = "INSERT INTO antrian (kode) VALUES ('$kod')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
else {

    $kod = '11';

    $sql = "INSERT INTO antrian (kode) VALUES ('$kod')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

// // Panel 2 (21 masuk ---- 20 keluar)
// if($dat > 200) {  // <== ini untuk merubah jarak

//     $kod = '20';
//     $sql = "INSERT INTO antrian (kode) VALUES ('$kod')";

//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
//     $conn->close();
// }
// else {

//     $kod = '21';

//     $sql = "INSERT INTO antrian (kode) VALUES ('$kod')";

//     if ($conn->query($sql) === TRUE) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
//     $conn->close();
// }
?>