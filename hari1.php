<?php
function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = header('location:jadwal.php?');

		break;
 
		case 'Mon':			
			$hari_ini = header('location:jadwal_senin.php?');

		break;
 
		case 'Tue':
			$hari_ini = header('location:jadwal_selasa.php?');
		break;
 
		case 'Wed':
			$hari_ini = header('location:jadwal_rabu.php?');
		break;
 
		case 'Thu':
			$hari_ini = header('location:jadwal_kamis.php?');
		break;
 
		case 'Fri':
			$hari_ini = header('location:jadwal_jumat.php?');
		break;
 
		case 'Sat':
			$hari_ini = header('location:jadwal_sabtu.php?');
		break;
		
		default:
			$hari_ini = header('location:jadwal.php?');
		break;
	}
 
	return "<b>" . $hari_ini . "</b>";
 
}
 
echo "Hari ini adalah ". hari_ini();
 
?>