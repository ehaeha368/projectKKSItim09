<?php
include("koneksi.php");
//ambil nilai variabel no yang diambil dari form POST
$no=$_POST['no'];
$kelas=$_POST['kelas'];
$kelas2=$_POST['kelas2'];
$sql="UPDATE kelas SET kelas='$kelas' WHERE kelas='$kelas2'";
//lakukan query update
if(empty($kelas)){
echo "<p class='message'>Gagal : nama barang tidak boleh kosong</p>";?>
<a href='update_kelas.php?id=<?php echo $no;?>'class='back'>Batal</a>
<?php
}else{
$update = mysqli_query($conn,$sql);
if($update){
header('location:data_kelas.php?update=1');
//echo $sql;
}else{
echo "<p class='message'>Gagal: sudah ada data ".$kelas."</p>";?>
<br />
<a href="update_kelas.php?id=<?php echo $no;?>" class="back">Batal</a>
<?php }}
?>