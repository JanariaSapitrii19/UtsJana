<?php
include "database.php";

$query = "UPDATE person SET namadokter='$_POST[namadokter]', namapasien='$_POST[namapasien]', statuspenyakit='$_POST[statuspenyakit]', alamat='$_POST[alamat]' WHERE id='$_POST[id]'";
$data = $db->prepare($query);
$data->execute();

header("location: form.php");