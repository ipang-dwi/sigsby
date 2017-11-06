<?php 
	include('generate-data.php');
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Wisata Alam - Sistem Informasi Geografis - Wisata Kota Surabaya</title>
	<!-- Core JavaScript Files -->
	<script src="ui/js/jquery-1.11.3.min.js"></script>
    
	<!-- Bootstrap core CSS -->
    <link href="ui/css/bootstrap.css" rel="stylesheet">
	<link href="ui/css/paper.min.css" rel="stylesheet">
	
	<!-- for map -->
	<link rel="stylesheet" type="text/css" href="ui/css/bootstrap-example.min.css" />
	
    <!-- Custom styles for this template -->
    <link href="ui/css/jumbotron.css" rel="stylesheet">
	
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			$(".various").fancybox({
				maxWidth	: '90%',
				maxHeight	: '90%',
				fitToView	: false,
				width		: '90%',
				height		: '90%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					//href : 'js/plugins/storeLocator/templates/iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
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
			<li class="active"><a href="#">Wisata Alam</a></li>
			<li><a href="wisata-sejarah.php">Wisata Sejarah</a></li>
			<li><a href="wisata-buatan.php">Wisata Buatan</a></li>
		  </ul>	
          <ul class="nav navbar-nav navbar-right">
            <li><a href="admin/" target="blank">Login</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Section: MAP -->
    <section id="map" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Wisata Alam</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!--div class="container">
			<div class="bh-sl-container container-fluid">
			<div class="jumbotron">
				<div class="container">
					<div class="bh-sl-form-container">
						<form id="bh-sl-user-location" class="form-inline" method="post" action="#" role="form">
							<div class="form-input form-group">
								<label for="bh-sl-address">Alamat atau Kodepos : </label>
								<input class="form-control" type="text" id="bh-sl-address" name="bh-sl-address" />
							</div>
							
							<button id="bh-sl-submit" class="btn btn-primary" type="submit">Submit</button>
						</form>
						<label></label>
					</div>
				</div>
			</div>

			<div id="map-container" class="bh-sl-map-container">
				<div class="row">
					<div id="map-results-container" class="container">
						<div id="bh-sl-map" class="bh-sl-map col-md-9" align="left"></div>
						<div class="bh-sl-loc-list col-md-3">
							<ul class="list list-unstyled"></ul>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div-->
		<div class="container">
			<div class="bh-sl-container container-fluid">
			<div class="jumbotron">
				<div class="container">
					<div class="bh-sl-form-container">
						<form id="bh-sl-user-location" class="form-inline" method="post" action="#" role="form">
							<div class="form-input form-group">
								<label for="bh-sl-address">Alamat :</label>
								<input class="form-control" type="text" id="bh-sl-address" name="bh-sl-address" />
							</div>
							
							<button id="bh-sl-submit" class="btn btn-primary" type="submit">Submit</button>
						</form>
						<label>Misal : jagir wetan surabaya</label></br>
						<label>NB : selalu masukkan alamat dengan akhiran kata 'surabaya'.</label>
					</div>
				</div>
			</div>

			<div id="map-container" class="bh-sl-map-container">
				<div class="row">
					<div id="map-results-container" class="container">
						<div id="bh-sl-map" class="bh-sl-map col-md-9"></div>
						<div class="bh-sl-loc-list col-md-3">
							<ul class="list list-unstyled"></ul>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		</br></br>
	</section>
	<!-- /Section: MAP -->
	
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
         
        </div>
        <div class="col-md-4">
          
        </div>
        <div class="col-md-4">
        
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
	<script src="ui/js/bootstrap.min.js"></script>
	<script src="ui/js/bootswatch.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ui/js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Core JavaScript Files -->
    <script src="ui/js/jquery.easing.min.js"></script>	
	<script src="ui/js/jquery.scrollTo.js"></script>
	<script src="ui/js/wow.min.js"></script>
	<!-- for map -->
    <script src="ui/js/libs/handlebars.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&language=id"></script>
    <script src="ui/js/plugins/storeLocator/jquery.storelocator.js"></script>
	   <script>
        $(function() {
					$('#map-container').storeLocator({
						'lengthUnit' : 'km',
 						'storeLimit' : -1,
						'dataType': 'json',
						'dataLocation': 'data/data-wisata-alam.json',
						'inlineDirections' : true,
						autoGeocode: true
					});
        });
      </script>
</body></html>