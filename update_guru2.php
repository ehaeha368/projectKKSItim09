<?php
include("koneksi.php");
//ambil nilai variabel no yang diambil dari form POST
$no=$_POST['no'];
$nama_guru=$_POST['nama_guru'];
$nama_guru=$_POST['nama_guru'];
$sql="UPDATE guru SET nama_guru='$nama_guru', kode='$kode', mapel='$mapel'  WHERE id='$no'";
//lakukan query update
if(empty($nama_guru)){
echo "<p class='message'>Gagal : nama barang tidak boleh kosong</p>";?>
<a href='update_guru.php?id=<?php echo $no;?>'class='back'>Batal</a>
<?php
}else{
$update = mysqli_query($conn,$sql);
if($update){
header('location:data_guru.php?update=1');
//echo $sql;
}else{
echo "<p class='message'>Gagal: sudah ada data ".$nama_guru."</p>";?>
<br />
<a href="update_guru.php?id=<?php echo $no;?>" class="back">Batal</a>
<?php }}
?>