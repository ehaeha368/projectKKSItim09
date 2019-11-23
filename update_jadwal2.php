<?php
include("koneksi.php");
//ambil nilai variabel no yang diambil dari form POST
$no=$_POST['no'];
$kelas=$_POST['kelas'];
$jam=$_POST['kode'];
$senin=$_POST['senin'];
$selasa=$_POST['selasa'];
$rabu=$_POST['rabu'];
$kamis=$_POST['kamis'];
$jumat=$_POST['jumat'];
$sabtu=$_POST['sabtu'];

$sql="UPDATE jadwal SET kelas='$kelas', jam='$jam', senin='$senin', selasa='$selasa', rabu='$rabu', kamis='$kamis', jumat='$jumat', sabtu='$sabtu' where id='$no'";
//lakukan query update
if(empty($jam)){
echo "<p class='message'>Gagal : nama tidak boleh kosong</p>";?>
<a href='update_jadwal.php?id=<?php echo $no;?>'class='back'>Batal</a>
<?php
}else{
$update = mysqli_query($conn,$sql);
if($update){
header('location:jadwal.php?update=1');
//echo $sql;
}else{
echo "<p class='message'>Gagal: sudah ada data ".$kelas."</p>";?>
<br />
<a href="update_jadwal.php?id=<?php echo $no;?>" class="back">Batal</a>
<?php }}
?>