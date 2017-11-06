<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">
	
    <title>Admin - Sistem Informasi Geografis - Wisata Kota Surabaya</title>
	
    <!-- Bootstrap core CSS -->
    <link href="../ui/css/bootstrap.css" rel="stylesheet">
	<link href="../ui/css/paper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../ui/css/jumbotron.css" rel="stylesheet">
	
	<!-- growl -->
    <link href="<?php echo base_url(); ?>assets/plugins/growl/jquery.growl.css" rel="stylesheet" type="text/css" />
	<!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<!-- growl -->
    <script src="<?php echo base_url(); ?>assets/plugins/growl/jquery.growl.js" type="text/javascript"></script>
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="./index_files/ie-emulation-modes-warning.js"></script-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
		<script type="text/javascript">
		  <?php if(validation_errors()) { ?>
			$.growl.warning({ message: "Username dan Password harus diisi.. Silahkan diulangi.." });
		  <?php } ?>
		  <?php if($this->session->flashdata('result_login')) { ?>
			$.growl.error({ message: "Username dan Password tidak valid.. Silahkan diulangi.." });
		  <?php } ?>
		</script>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">SIG-SBY</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">	
          <?php echo form_open('front','class="navbar-form navbar-right"'); ?>
            <div class="form-group">
              <input type="text" name="username" placeholder="Username" class="form-control" value="<?php echo set_value('username'); ?>" />
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control" />
            </div>
            <button type="submit" class="btn btn-default">Login</button>
          <?php echo form_close(); ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	</br></br>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-3">
         
        </div>
        <div class="col-lg-6">
			<div class="panel panel-primary">
			  <div class="panel-heading">
				<h3 class="panel-title">Admin Panel</h3>
			  </div>
			  <div class="panel-body">
				Selamat Datang di Admin Panel.
				</br></br>
				<img src="../img/patung.jpg" class="img-responsive img-thumbnail">
			  </div>
			</div>
        </div>
        <div class="col-lg-3">
        
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
    <!--script src="ui/js/jquery-1.10.2.min.js"></script-->
	<script src="../ui/js/bootstrap.min.js"></script>
	<script src="../ui/js/bootswatch.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../ui/js/ie10-viewport-bug-workaround.js"></script>

</body></html>