<?php
include("koneksi.php");
//ambil nilai variabel no yang diambil dari form POST
$no=$_POST['no'];
$mapel=$_POST['mapel'];
$mapel2=$_POST['mapel2'];
$sql="UPDATE pelajaran SET mapel='$mapel' WHERE mapel='$mapel2'";
//lakukan query update
if(empty($mapel)){
echo "<p class='message'>Gagal : nama barang tidak boleh kosong</p>";?>
<a href='update_mapel.php?id=<?php echo $no;?>'class='back'>Batal</a>
<?php
}else{
$update = mysqli_query($conn,$sql);
if($update){
header('location:data_mapel.php?update=1');
//echo $sql;
}else{
echo "<p class='message'>Gagal: sudah ada data ".$mapel."</p>";?>
<br />
<a href="update_mapel.php?id=<?php echo $no;?>" class="back">Batal</a>
<?php }}
?>