<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>e-schoollife</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/V1/css/app.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/V1/css/jquery-parallax.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/V1/css/core.css" />
	<script src="<?php echo base_url(); ?>assets/V1/js/vendor/custom.modernizr.js"></script>
	<script type="text/javascript">
		var countdownDate = '2015/06/20 20:55:55'; //Counterdown limit date in format yyyy/mm/dd (2013/06/24)
	</script>
</head>
<body>

	<div class="parallax-container">
		<div class="parallax-item parallax-size-cover" style="background-image: url('assets/gfx/parallax_1.jpg')"></div>
		<div class="parallax-item parallax-repeat parallax-overlay"></div>
	</div>

	<section class="wrap">
		<section class="section subscribe">
			<div class="content">
				<div class="row">
					<div class="small-12 columns header">
						<div class="logo">
							<img src="<?php echo base_url(); ?>assets/V1/gfx/logo.png" alt="Totally - Coming Soon Page">
						</div>
						<h2>
							Votre plateforme educative bientot disponible.<br />
							
						</h2>
					</div>
				</div>
				<div class="row msgbox">
					<div class="small-1 large-2 columns">&nbsp;</div>
					<div class="small-10 large-8 columns">
						<div data-alert class="alert-box custom-alert-box"><span class="msg"></span><a href="#" class="close">&times;</a></div>
					</div>
					<div class="small-1 large-2 columns">&nbsp;</div>
				</div>
				<div class="row form">
					<div class="small-1 large-2 columns">&nbsp;</div>
					<div class="small-10 large-8 columns">
						<div class="row collapse">
							<div class="small-12 large-8 columns">
								<input class="inputsubs" type="text" placeholder="Enter votre email et soyer notifier des fonctionalités">
							</div>
							<div class="small-12 large-4 columns">
								<a href="javascript:void(null);" class="button prefix buttonsubs">Souscrivez</a>
							</div>
						</div>
					</div>
					<div class="small-1 large-2 columns">&nbsp;</div>
				</div>
				<div class="row social">
					<div class="small-12 columns">
						<a href="#"><img src="assets/V1/gfx/icon-facebook.png" alt=""></a>
						<a href="#"><img src="assets/V1/gfx/icon-twitter.png" alt=""></a>
						<a href="#"><img src="assets/V1/gfx/icon-gplus.png" alt=""></a>
						<a href="#"><img src="assets/V1/gfx/icon-youtube.png" alt=""></a>
						<a href="#"><img src="assets/V1/gfx/icon-vimeo.png" alt=""></a>
						<a href="#"><img src="assets/V1/gfx/icon-instagram.png" alt=""></a>
						<a href="#"><img src="assets/V1/gfx/icon-rss.png" alt=""></a>
					</div>
				</div>
			</div>
		</section>
		<section class="section countdown">
			<div class="row content">
				<div class="small-12 columns wrapclock">
					<div class="clock">
						<div class="point pdays">
							<div class="pvalue">00</div>
							<div class="ptext">Jours</div>
						</div>
						<div class="point phours">
							<div class="pvalue">00</div>
							<div class="ptext">Heures</div>
						</div>
						<div class="point pminutes">
							<div class="pvalue">00</div>
							<div class="ptext">Minutes</div>
						</div>
						<div class="point pseconds">
							<div class="pvalue">00</div>
							<div class="ptext">Secondes</div>
						</div>
					</div>
					<div class="wrappbar">
						<div class="pbar"></div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<script src="<?php echo base_url(); ?>assets/v1/js/vendor/jquery-1.10.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/v1/js/foundation.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/v1/js/jquery.countdown.js"></script>
	<script src="<?php echo base_url(); ?>assets/v1/js/jquery.parallax.js"></script>
	<script src="<?php echo base_url(); ?>assets/v1/js/core.js"></script>
	<script type="text/javascript">$(document).foundation();</script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-545557-25', 'zeljic.com');
		ga('send', 'pageview');
	</script>

</body>
</html>
