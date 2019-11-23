<?php
	include("koneksi.php");
		$nama_guru=$_POST['nama_guru'];
		$kode=$_POST['kode'];
		$mapel=$_POST['mapel'];

		$input="insert into guru (nama_guru, kode, mapel) values ('$nama_guru', '$kode', '$mapel')";
	if ($nama_guru=="" or $kode=="" or $mapel=="" ){
		echo '<script type="text/javascript"> var answer = alert("Data masih belum lengkap") window.location = "tambah_guru.php"; </script>';

}
else{
	$hasil=mysqli_query($conn, $input);

if ($hasil){

header('location:data_guru.php?update=2');

}else{
echo '<script type="text/javascript">

var answer = alert("Sudah ada data dengan nama tersebut")
window.location = "data_guru.php";
</script>';

}
}

?>