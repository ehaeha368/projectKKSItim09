<?php //logout
session_start();
if(isset($_SESSION['sessionLogin'])) {
unset($_SESSION);
session_destroy();
header("location:beranda.php");
}
?>