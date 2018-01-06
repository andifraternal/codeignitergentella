
<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="<?php echo base_url() ?>assets/notfound/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url() ?>assets/notfound/js/jquery.min.js"></script>
<!-- //js --> 
<!-- font-awesome icons -->
<link href="<?php echo base_url() ?>assets/notfound/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
</head>
<body>
	<div class="main">
		<canvas id="myCanvas"></canvas>
		<div class="agileinfo_404_main">
			<h1>Error Page</h1>
			<div class="w3_agile_main">
				<h2>Oooops.... Could not find it</h2>
				<p>For some reason the page you requested could not be found on Our server.</p>
				<div class="agile_404 w3layouts">
					<div class="agile_404_pos">
						<h3>4<span>0</span>4<img src="<?php echo base_url() ?>assets/notfound/images/1.png" alt=" " /> </h3>
					</div>
					<img src="<?php echo base_url() ?>assets/notfound/images/3.png" alt=" " class="w3l"/>
				</div>
			</div>
			
			<div class="agileits_copyright">
				
			</div>
		</div>
	</div>
	<script src="<?php echo base_url() ?>assets/notfound/js/particles.min.js"></script>
    <script>
      window.onload = function() {
        Particles.init({
          selector: '#myCanvas',
          color: '#6b6b6b',
          connectParticles: true,
          minDistance: 100
        });
      };
    </script>
</body>
</html>