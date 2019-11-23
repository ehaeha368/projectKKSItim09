<?php
include("koneksi.php");
$id=$_GET[id];
$query = mysqli_query($conn,"delete from jadwal where 1") or die(mysqli_error($conn));
//kembali ke halaman jam.php
header('location:jadwal.php?update=3');
exit;
?>