<?php
    include 'koneksi.php';
    $identpeg = mysqli_query($koneksi, "SELECT * from identpeg");
    foreach ($identpeg as $row){
    }
    ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img2/pemprov.jpg" type="image/png">
        <title>PA'RASANGANTA</title>
        <!-- Bootstrap CSS -->
		<link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/responsive.css">
		</head>
<body>
	<!--================Header =================-->
<!-- partial:index.partial.html -->
<!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img2/pemprov.jpg" alt="" width="40pxl"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</div></div>
<!-- partial:index.partial.html -->
<div class="sidebar-container">
  <div class="sidebar-logo">PA'RASANGANTA</div>
  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    <li>
      <a href="#">
        <i class="fa fa-home" aria-hidden="true"></i> Homepage
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
      </a>
    </li>
    <li class="header">Another Menu</li>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-cog" aria-hidden="true"></i> Settings
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Information
      </a>
    </li>
  </ul>
</div>

<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <!-- Start Sample Area -->
      <section class="sample-text-area">
			<div class="banner_inner">
				<div class="container">
				<div class="content">
					<h2>Identitas Pegawai</h2>
					<hr />
					<div class="row banner_content">
						<div class="col-lg-4">
							<img src="img/g.jpg" class="rounded" width="300" height="300">
							<a href="edit_pegawai.html" class="btn btn-light">Ubah Foto</a><a href="hapus.php" class="btn btn-light">Hapus Foto</a>
						</div>
						<div class="col-lg-5">
							<div class="container">
								<div class="main">
									<div class="CSSTableGenerator" >
										<table class="table table-bordered">
											<tr>
												<td colspan="2">Profil Pegawai</td>
											</tr>
											
											<tr>
												
												<td class="text-uppercase">NIP</td>
												<td class="text-capitalize"><?php echo $row['NIP']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Nama Lengkap</td>
												<td class="text-capitalize"><?php echo $row['Nama']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Gelar Depan</td>
												<td class="text-capitalize"><?php echo $row['GlDepan']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Gelar Belakang</td>
												<td class="text-capitalize"><?php echo $row['GlBlk']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Kota Lahir</td>
												<td class="text-capitalize"><?php echo $row['KTLahir']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Tanggal Lahir</td>
												<td class="text-capitalize"><?php echo $row['TLahir']; ?></td>
                      </tr>
                      <tr>
												<td class="text-uppercase">Jenis Kelamin</td>
												<td class="text-capitalize"><?php echo $row['TLahir']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Agama</td>
												<td class="text-capitalize"><?php echo $row['KAgama']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Status</td>
												<td class="text-capitalize"><?php echo $row['KStatus']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Jabatan Pegawai</td>
												<td class="text-capitalize"><?php echo $row['KJPeg']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Golongan darah</td>
												<td class="text-capitalize"><?php echo $row['KGolDar']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Alamat</td>
												<td class="text-capitalize"><?php echo $row['AlJalan']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Telp</td>
												<td class="text-capitalize"><?php echo $row['Nopen']; ?></td>
											</tr>										
											</table>
										</div>
										<a href="edit_pegawai.php?NIP=$row[NIP]" class="btn btn-danger">Edit Profil</a>
									</div>
							</div>
						</div>
					</div>
        </div>
        <hr>
				<div class="container">
					<b>List Data Berkas</b>
					<table width="800" border='0' cellpadding="2" cellspacing="1" bgcolor="#000000">
          <hr>
					<tr>
					<th class="text-center" bgcolor="#ffffff">Nama File</th>
          <th bgcolor="#ffffff" width="100">View</th>
          <th bgcolor="#ffffff" width="100">Status</th>
					<th bgcolor="#ffffff" width="100">Keterangan</th>
					</tr>
          </div>
          
					<?php
					while ($row = mysqli_fetch_array($identpeg)) {
                    echo "
                    <tr>
					<td bgcolor='#ffffff'><?php echo $identpeg[NIP];?></td>
          <th bgcolor='#ffffff'><a href='view.php?NIP=$row[NIP]'>Lihat File</a></th>
          <th bgcolor='#ffffff'><a href='hapus.php?NIP=<?php echo $identpeg[NIP];?>'>Keterangan</a></th>
          <th bgcolor='#ffffff'><a bgcolor='#ffffff'><span class='badge badge-success'>succes</span></a></th>
          </tr>";
          }  
				?>
					</table>
					<a href="tdata_pegawai.html" class="btn btn-danger">Tambah Data</a>
				</div>
				</div>
			</div>
		</section>
    </div>

  </div>
</div>
<!-- partial -->
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        
        
        
			<!-- End Sample Area -->           
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </li>
</li>
</li>
</ul>
</div>
</div>
</nav>
</div>
</header>
</body>
</html>