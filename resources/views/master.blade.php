<!DOCTYPE html>
<html>
<head>
	<title>ABBC WALLET</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="./src/css/index.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/index.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/page.scss') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/carousel.css') }}">


</head>
<body>

	<div id="wrapper">
		<div class="overlay"></div>

		<!-- Sidebar -->
		<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
				<li class="sidebar-brand">
					<a href="#">
						<img class="landing-logo" src="{{ asset('img/abbc.svg') }}">
					</a>
				</li>
				<li>
					<a href="#">Online Shopping</a>
				</li>
				<li>
					<a href="#">Cryptocurrency Market</a>
				</li>
				<li>
					<a href="#">Settings</a>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header"></li>
						<li><a href="#">Account Modify</a></li>
						<li><a href="#">Manage Wallet</a></li>
					</ul>
				</li>

				<li>
					<a href="#">About Us</a>
				</li>
				<li>
					<a href="/logout">Logout</a>
				</li>

			</ul>
		</nav>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">
			<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
				<span class="hamb-top"></span>
				<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
			</button>


			<div class="container-fluid"></div>

		</div>
	</div>
	<!-- /#wrapper -->


</body>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"></script>
<script src="{{ asset('src/js/index.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function () {
		var trigger = $('.hamburger'),
		overlay = $('.overlay'),
		isClosed = false;

		trigger.click(function () {
			hamburger_cross();      
		});

		function hamburger_cross() {

			if (isClosed == true) {          
				overlay.hide();
				trigger.removeClass('is-open');
				trigger.addClass('is-closed');
				isClosed = false;
			} else {   
				overlay.show();
				trigger.removeClass('is-closed');
				trigger.addClass('is-open');
				isClosed = true;
			}
		}
		$('[data-toggle="offcanvas"]').click(function () {
			$('#wrapper').toggleClass('toggled');
		});  
	});
</script>

</html>



