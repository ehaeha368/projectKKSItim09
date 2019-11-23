<?php
include("koneksi.php");
$id=$_GET[id];
$query = mysqli_query($conn,"delete from jam where kode= '$id' ") or die(mysqli_error($conn));
//kembali ke halaman jam.php
header('location:data_jam.php?update=3');
exit;
?>