<?php
include("koneksi.php");
$id=$_GET[id];
$query = mysqli_query($conn,"delete from guru where nama_guru= '$id' ") or die(mysqli_error($conn));
//kembali ke halaman jam.php
header('location:data_guru.php?update=3');
exit;
?>