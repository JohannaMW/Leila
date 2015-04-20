<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('title')?></title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/style.css"/>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- [if lt IE9]>
			<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php wp_head()?>
	</head>

	<!-- HEADER -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8"></div> <!-- end span8 -->
					<div class="col-lg-4 col-md-4">
						<h1 class="logo fr">
							<a href="<?php home_url('/')?>">
								<img src="images/schrittvermittlung-logo.gif" alt="Schrittvermittlung">
							</a>
						</h1>
					</div> <!-- end col-4 -->
				</div> <!--end row -->
				<nav class="navigation">
					<ul>
						<li class="top-nav"><a href="">Ballroom Dance</a>
							<ul class="dropdown">
								<li><a href="">Basic Step 1</a></li>
								<li><a href="">Basic Step 2</a></li>
								<li><a href="">Bronze</a></li>
								<li><a href="">Silber</a></li>
								<li><a href="">Gold</a></li>
								<li><a href="">Goldstar</a></li>
								<li><a href="">Hobby Gruppe</a></li>
							</ul>
						</li>
						<li class="top-nav"><a href="">Specials</a>
							<ul class="dropdown">
								<li><a href="">Salsa</a></li>
								<li><a href="">West Coast Swing</a></li>
							</ul>
						</li>
						<li class="top-nav"><a href="">Kids</a></li>
						<li class="top-nav"><a href="">Timetable</a></li>
						<li class="top-nav"><a href="">Workshops</a></li>
						<li class="top-nav"><a href="">Service</a>
							<ul class="dropdown">
								<li><a href="">Hochzeitskurse</a></li>
								<li><a href="">Privatstunden</a></li>
								<li><a href="">Raumvermietung</a></li>
								<li><a href="">Gutscheine</a></li>
							</ul>
						</li>
						<li class="top-nav"><a href="">Events</a>
							<ul class="dropdown">
								<li><a href="">Tanzparty</a></li>
								<li><a href="">Termine</a></li>
							</ul>
						</li>
					</ul>
				</nav> <!-- end main-navigation -->
			</div> <!-- end container -->
		</header> 