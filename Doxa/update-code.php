<?php
include "Connect.php";
$query = "UPDATE karyawan, detail_karyawan, detail_tentang_diri SET nama_karyawan='$_POST[Pnama_Karyawan]', kelamin='$_POST[Pgender]', email='$_POST[Pemail]', telepon='$_POST[Ptelepon]', peminatan_jabatan='$_POST[Pjabatan]', tentang_diri='$_POST[Pbiography]' WHERE karyawan.ID_karyawan='$_POST[id]' AND detail_karyawan.ID_karyawan='$_POST[id]' AND detail_tentang_diri.ID_karyawan='$_POST[id]'";
$data = $db->prepare($query);
$data->execute();

header("location: view.php");
?>

