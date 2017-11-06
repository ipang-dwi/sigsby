<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Sistem Informasi Geografis - Wisata Kota Surabaya</title>
	
    <!-- Bootstrap core CSS -->
    <link href="ui/css/bootstrap.css" rel="stylesheet">
	<link href="ui/css/paper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="ui/css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="./index_files/ie-emulation-modes-warning.js"></script-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<style>
.jumbotron {
    position: relative;
    //background: #000 url("img/patung.jpg") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
}
</style>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">SIG-SBY</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
			<li><a href="map.php">Peta Wisata</a></li>
			<li><a href="event.php">Event</a></li>
			<li><a href="wisata-kuliner.php">Wisata Kuliner</a></li>
			<li><a href="wisata-religi.php">Wisata Religi</a></li>
			<li><a href="wisata-alam.php">Wisata Alam</a></li>
			<li><a href="wisata-sejarah.php">Wisata Sejarah</a></li>
			<li><a href="wisata-buatan.php">Wisata Buatan</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
            <li><a href="admin/" target="blank">Login</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>SIG Wisata Kota Surabaya </h1>
        <p>Selamat datang di Sistem Informasi Geografis - Wisata Kota Surabaya. Memberikan informasi lokasi wisata dan event yang ada di Kota Surabaya.</p>
        <p><a class="btn btn-primary btn-lg" href="map.php" role="button">Lanjutkan »</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2 align="center">Light Weight</h2>
          <p align="center">Aplikasi yang ringan. Dengan ukuran file yang kecil. Menjadikan cepat ketika diakses.
		  </br></br><img src="img/1.jpg" class="img-responsive img-thumbnail">
		  </br></br><a class="btn btn-default" href="#" role="button">Lanjutkan »</a></p>
        </div>
        <div class="col-lg-4">
          <h2 align="center">Cross Platform</h2>
          <p align="center">Berbasis web, dengan teknologi terupdate (Bootstrap, jQuery, Google MAP API). Adaptive, bisa diakses pada device apapun.
          </br></br><img src="img/2.jpg" class="img-responsive img-thumbnail">
          </br></br><a class="btn btn-default" href="#" role="button">Lanjutkan »</a></p>
       </div>
        <div class="col-lg-4">
          <h2 align="center">User Friendly</h2>
          <p align="center">Mudah dipahami dan mudah dipergunakan. Baik oleh end user, mau pun oleh Admin.
          </br></br><img src="img/3.jpg" class="img-responsive img-thumbnail">
          </br></br><a class="btn btn-default" href="#" role="button">Lanjutkan »</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>Univ. 45 Surabaya - ipung © <?php echo date('Y');?>.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="ui/js/jquery-1.10.2.min.js"></script>
	<script src="ui/js/bootstrap.min.js"></script>
	<script src="ui/js/bootswatch.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ui/js/ie10-viewport-bug-workaround.js"></script>

</body></html>