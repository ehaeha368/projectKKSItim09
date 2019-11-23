<?php
	include("koneksi.php");
		$kelas=$_POST['kelas'];

		$input="insert into kelas (kelas) values ('$kelas')";
	if ($kelas=="" ){
		echo '<script type="text/javascript"> var answer = alert("Data masih belum lengkap") window.location = "tambah_kelas.php"; </script>';

}
else{
	$hasil=mysqli_query($conn, $input);

if ($hasil){

header('location:data_kelas.php?update=2');

}else{
echo '<script type="text/javascript">

var answer = alert("Sudah ada data dengan nama tersebut")
window.location = "data_kelas.php";
</script>';

}
}

?>