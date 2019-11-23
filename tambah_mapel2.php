<?php
	include("koneksi.php");
		$mapel=$_POST['mapel'];

		$input="insert into pelajaran(mapel) values ('$mapel')";
	if ($mapel=="" ){
		echo '<script type="text/javascript"> var answer = alert("Data masih belum lengkap") window.location = "tambah_mapel.php"; </script>';

}
else{
	$hasil=mysqli_query($conn, $input);

if ($hasil){

header('location:data_mapel.php?update=2');

}else{
echo '<script type="text/javascript">

var answer = alert("Sudah ada data dengan nama tersebut")
window.location = "data_mapel.php";
</script>';

}
}

?>