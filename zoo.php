
<html>
	<head>
		<title>猫狗校园 SweetHome | 动物园</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!meta charset utf="8">
		<!--bootstrap-->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--coustom css-->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
		<!--script-->
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!--script-->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
	</head>
	<body>
		<!--header-part-->
		<div class="banner-background" id="to-top">
			<div class="container">
				<div class="nav-back">
					<div class="navigation">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
									<li><a href="track.php">TRACK </a></li>
									
									<li><a class="active" href="zoo.php">&nbsp;ZOO&nbsp;</a></li>
									<li><a href="personalCenter.php">CENTER</a></li>
									<li><a href="contact.html">CONTACT</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
								<div class="clearfix"></div>	
							<div class="clearfix"></div>
						</nav>
						<div class="clearfix"></div>
					</div>
					</br>
                    <div class="logo">
						<h2>动物园</h2>
						<h2 class="typ1">
							<a href="loginfirst.php?redirt=puppy.html">
								<span class="label label-danger" style="font-family : 微软雅黑;color : #FFF;">
								添加小动物
								</span>
							</a>
					  	</h2>

					</div>
				</div>
			</div>
		</div>


		<div class="our-products">
			<div class="container">
				<div class="products-gallery">

<?php
	require("dynamicfunc.php");
	include("conn.php");

	$puppies = mysql_query("select * from puppy;");
	while($pet = mysql_fetch_array($puppies)){
		echoFloatPuppy($pet);
	}

?>



					<div class="clearfix"></div>
				</div>


			</div>
		</div>
		<!--content-ends-->
		<!--brand-logos-->
			<div class="brand-logo">
				<div class="container">
					<div class="col-xs-6 col-md-3 brk3">
						<a href=""><img src="./images/bd1.png" alt="" class="img-responsive"/></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		<!--brand-ends-->
		<!--footer-->
			<div class="footer">
				<div class="container">
				<div class="col-md-6 mrg1">
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 brk5">
					<div class="copy-rt">
						<h4>COPYRIGHT</h4>
						<p>Based on Pet Kennel &#169 2015 Design by <a href="http://www.w3layouts.com" target="_blank">w3layouts</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
				</div>
			</div>
		<!--footer-->
		<!---->
		<script type="text/javascript">
				$(document).ready(function() {
						/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
						*/
				$().UItoTop({ easingType: 'easeOutQuart' });
		});
		</script>
		<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!----> 
	</body>
</html>
