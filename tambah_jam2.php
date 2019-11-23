<?php
	include("koneksi.php");
		$kode=$_POST['kode'];
		$jam1=$_POST['jam1'];
		$jam2=$_POST['jam2'];

		$input="insert into jam (kode, jam1, jam2) values ('$kode','$jam1','$jam2')";
	if ($kode=="" or $jam1=="" or $jam2="" ){
		echo '<script type="text/javascript"> var answer = alert("Data masih belum lengkap") window.location = "tambah_jam.php"; </script>';

}
else{
	$hasil=mysqli_query($conn, $input);

if ($hasil){

header('location:data_jam.php?update=2');

}else{
echo '<script type="text/javascript">

var answer = alert("Sudah ada data dengan nama tersebut")
window.location = "data_jam.php";
</script>';

}
}

?>