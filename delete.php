<?php
include "database.php";

$query = "DELETE FROM person WHERE id='$_GET[xyz]'";
$data = $db->prepare($query);
$data->execute();

header("location: form.php");