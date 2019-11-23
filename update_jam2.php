<?php
include("koneksi.php");
//ambil nilai variabel no yang diambil dari form POST
$no=$_POST['no'];
$kode=$_POST['kode'];
$kode2=$_POST['kode2'];
$jam1=$_POST['jam1'];
$jam2=$_POST['jam2'];
$sql="UPDATE jam SET kode='$kode', jam1='$jam1' , jam2='$jam2' WHERE kode='$kode2'";
//lakukan query update
if(empty($kode)){
echo "<p class='message'>Gagal : nama barang tidak boleh kosong</p>";?>
<a href='update_jam.php?id=<?php echo $no;?>'class='back'>Batal</a>
<?php
}else{
$update = mysqli_query($conn,$sql);
if($update){
header('location:data_jam.php?update=1');
//echo $sql;
}else{
echo "<p class='message'>Gagal: sudah ada data ".$kode."</p>";?>
<br />
<a href="update_jam.php?id=<?php echo $no;?>" class="back">Batal</a>
<?php }}
?>