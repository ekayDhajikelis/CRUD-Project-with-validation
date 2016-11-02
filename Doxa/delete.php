<?php
include "Connect.php";
$query = "DELETE FROM karyawan WHERE ID_karyawan='$_GET[id]'";
$data = $db->prepare($query);
$data->execute();
header("location: view.php");
?>

