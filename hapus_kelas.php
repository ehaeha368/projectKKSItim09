<?php
include("koneksi.php");
$id=$_GET[id];
$query = mysqli_query($conn,"delete from kelas where kelas= '$id' ") or die(mysqli_error($conn));
//kembali ke halaman jam.php
header('location:data_kelas.php?update=3');
exit;
?>