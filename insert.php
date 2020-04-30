<?php
include "database.php";

$query = "INSERT INTO person VALUES ('', '$_POST[namadokter]', '$_POST[namapasien]', '$_POST[statuspenyakit]', '$_POST[alamat]')";
$data  = $db->prepare($query);  // Menyiapkan query SQL
$data->execute();               // Menjalankan perintah query SQL

header("location: form.php");