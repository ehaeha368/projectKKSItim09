<?php
	include("koneksi.php");
		$kelas=$_POST['kelas'];
		$jam=$_POST['jam'];
		$senin=$_POST['senin'];
		$selasa=$_POST['selasa'];
		$rabu=$_POST['kamis'];
		$kamis=$_POST['kamis'];
		$jumat=$_POST['jumat'];
		$sabtu=$_POST['sabtu'];


		$input="insert into jadwal(kelas,jam,senin,selasa,rabu,kamis,jumat,sabtu) values ('$kelas', '$jam', '$senin', '$selasa', '$rabu', '$kamis', '$jumat', '$sabtu')";
	if ($jam=="" or $senin=="" or $selasa=="" ){
		echo '<script type="text/javascript"> var answer = alert("Data masih belum lengkap") window.location = "buat_jadwal.php"; </script>';

}
else{
	$hasil=mysqli_query($conn, $input);

if ($hasil){

header('location:jadwal.php?update=2');

}else{
echo '<script type="text/javascript">

var answer = alert("Sudah ada data dengan nama tersebut")
window.location = "jadwal.php";
</script>';

}
}

?>