<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sistem jadwal pelajaran</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <style >
      body {
   background-image: url("img/shape-1.png");
   background-repeat: no-repeat;

   background-position: 800px 20px;
   background-size: 700px 700px;
}
    </style>
     
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="index.html" class="navbar-brand font-weight-bold text-uppercase text-base">SMK DARUSSA'ADAH</a>
        
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="beranda_login.php" class="sidebar-link text-muted"><i class="o-home-1 mr-3 text-gray"></i><span>Beranda</span></a></li>
              <li class="sidebar-list-item"><a href="jadwal.php" class="sidebar-link text-muted "><i class="o-table-content-1 mr-3 text-gray"></i><span>Jadwal pelajaran</span></a></li>
              <li class="sidebar-list-item"><a href="data_guru.php" class="sidebar-link text-muted"><i class="o-user-1 mr-3 text-gray"></i><span>Data guru</span></a></li>
              <li class="sidebar-list-item"><a href="data_kelas.php" class="sidebar-link text-muted  active"><i class="o-database-1 mr-3 text-gray"></i><span>Data kelas</span></a></li>
              <li class="sidebar-list-item"><a href="data_mapel.php" class="sidebar-link text-muted "><i class="o-imac-screen-1 mr-3 text-gray"></i><span>Data mapel</span></a></li>
              <li class="sidebar-list-item"><a href="data_jam.php" class="sidebar-link text-muted "><i class="o-clock-1 mr-3 text-gray"></i><span>Data jam</span></a></li>
              <li class="sidebar-list-item"><a href="logout.php"  class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Logout</span></a></li>
      
      
        </ul>
      </div>
      

      <div class="page-holder w-100 d-flex flex-wrap" >
        <div class="container-fluid px-xl-5">
          <section class="py-5 ">
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">update Data kelas</h3>
                  </div>
                  <div class="card-body">
                   
                <br>
<?php
include("koneksi.php");
?>
<div class="container">
<div class="row3">


<form action="update_kelas2.php" method="post">
<?php
$no = $_GET['id'];?>
<td width="138"><input name="no"
type="hidden" id="num" value="<?php echo $no; ?>" size="20" /></td>

<?php
//lakukan query SELECT
$data = mysqli_query($conn,"SELECT kelas from kelas where kelas='$no'");

while($d = mysqli_fetch_array($data))
{?>
<table class="table table-light" width="419" border="0">
<tr>
			<td width="50">kelas</td>
			<td width="54">
			<input name="kelas" type="text" id="kelas" value="<?php echo $d['kelas']; ?>" size="20" /></td>
		</tr>
		<td width="54">
			<input name="kelas2" type="hidden" id="kelas" value="<?php echo $d['kelas']; ?>" size="20" /></td>
		</tr>
		

</table>
<br/>
<table width border="0">
<td width="92"><button class="btn btn-info" type="submit">Simpan</a></button></td>
    <td width="92"><button class="btn btn-info"  type="button" onclick="history.back()">Batal</button></td>

</table>
</center>

</form>

<?php }?>

</div>
</div>
</div>
</form>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
<br>
         
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
                <p class="mb-2 mb-md-0">School &copy; 2018-2020</p>
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
                <p class="mb-0"><a href="https://bootstrapious.com/admin-templates" class="external text-gray-400"></a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>



    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/charts-custom.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>