<!DOCTYPE html>
<html>
<head>
	<title>ABBC WALLET</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
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
				<a href="/abbcshopping"><i class="fa fa-shopping-cart"></i> &nbsp Online Shopping</a>
			</li>
			<li>
				<a href="/market"><i class="fa fa-globe"></i> &nbsp Cryptomarket</a>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-cog"></i> &nbsp Settings <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li class="dropdown-header"></li>
					<li><a href="/accountmodify"><i class="fa fa-edit"></i> &nbsp Account Modify</a></li>
					<li><a href="/managewallet"><i class="fa fa-credit-card"></i> &nbsp Manage Wallet</a></li>

					<li><a href="/"><i class="fa fa-repeat"></i> &nbsp Reset Cache</a></li>

				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i> &nbsp Tools <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li class="dropdown-header"></li>
					<li><a href="/"><i class="fa fa-database"></i> &nbsp Backup Wallet</a></li>
					<li><a href="/"><i class="fa fa-user-secret"></i> &nbsp Priavate Keys</a></li>
					<li><a href="/"><i class="fa fa-link"></i> &nbsp Pair Device</a></li>
					<li><a href="/"><i class="fa fa-send"></i> &nbsp Transfer Wallet</a></li>

				</ul>
			</li>

			<li>
				<a href="#"><i class="fa fa-users"></i> &nbsp About Us</a>
			</li>
			<li>
				<a href="/logout"><i class="fa fa-sign-out"></i> &nbsp Logout</a>
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


		<div class="container-fluid">

<!-- 
				<div class="row" align="center" >
					
					<div class="nav-center" id="coinnav" align="center">
						<ul class="nav nav-tabs">
							<li class=""> <a data-toggle="tab" href="#morebtc"><img class="alt-coin-logo" src="img/btc.png" alt="" ></a></li>&nbsp

							<li><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/btccash.png" alt=""></a></li>&nbsp

							<li><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/eth.png" alt=""></a></li> &nbsp

							<li><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/quantum.png" alt=""></a></li>&nbsp

							<li><a data-toggle="tab" href="">  <img class="alt-coin-logo" src="img/ripple.png" alt=""></a></li>&nbsp

							<li><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/litecoin.svg" alt=""></a></li>&nbsp

							<li><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/dash.png" alt=""></a></li>&nbsp

							<li class="active""><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/alibabacointitle.png" alt=""></a></li>&nbsp
						</ul>
					</div>
				</div> -->


				<div class="simple-tabs-carousel-container text-center">
					<div class="tabs-container">
						<a href="#prev" class="tab-previous"> < </a>
						<ul class="simple-tabs">
							<li class="tab"> <a data-toggle="tab" href="#morebtc"><img class="alt-coin-logo" src="img/btc.png" alt="" ></a></li>&nbsp

							<li class="tab"><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/btccash.png" alt=""></a></li>&nbsp

							<li class="tab"><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/eth.png" alt=""></a></li> &nbsp

							<li class="tab"><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/quantum.png" alt=""></a></li>&nbsp

							<li class="tab"><a data-toggle="tab" href="">  <img class="alt-coin-logo" src="img/ripple.png" alt=""></a></li>&nbsp

							<li class="tab"><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/litecoin.svg" alt=""></a></li>&nbsp

							<li class="tab"><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/dash.png" alt=""></a></li>&nbsp

							<li class="tab active""><a data-toggle="tab" href=""><img class="alt-coin-logo" src="img/alibabacointitle.png" alt=""></a></li>&nbsp
						</ul>
						<a href="#next" class="tab-next"> > </a>
					</div>
				</div>




				<!-- <div class="row " align="center">  <img class="coin-logo" src="{{ asset('img/alibabacointitle.png') }}"></div> -->
				<div class="row" align="center"><h5>Account Balance</h5></div>
				<div class="row main-row" align="center">
					<div class="col-lg-8 col-lg-offset-2">
						<h2> 99.899 <span class="label label-warning">ABBC</span></h2>	                    
					</div>
				</div>


				

				<hr style="max-width: 500px; background-color: : red; border-color: #7c7c7c;">
				<div class="row" align="center"><img class="qrcode-img" src="{{ asset('img/qrcode.png') }}"></div>

				<div class="row" align="center"><h6><i class="fa fa-copy"></i> &nbsp ALpZMPi3ffWrDsEStpDVr8uwdyLfAWeChC</h6></div>


				<div class="row" align="center">
					
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-transaction" data-toggle="modal" data-target="#historyModal">
						Transaction History
					</button>

					<!-- Modal -->
					<div class="modal fade" id="historyModal" tabindex="-1" role="dialog" aria-labelledby="historyModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Transaction History</h5>

								</div>
								<div class="modal-body">
									<table class="table table-striped">

										<tbody>
											<tr>
												<td>Address</td>
												<td>ALpZMPi3ffWrDsEStpDVr8uwdyLfAWeChC</td>

											</tr>
											<tr>
												<td>TXID</td>
												<td>AirDrop_2850809580</td>

											</tr>
											<tr>
												<td>Quantity</td>
												<td>9.998ABBC</td>

											</tr>
											<tr>
												<td>Date</td>
												<td>2018-04-17 12:55:57</td>

											</tr>
										</tbody>
									</table>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary btn-close btn-primary btn-sm" data-dismiss="modal">Close</button>

								</div>
							</div>
						</div>
					</div>


				</div>


			</div>
		</div>
		<!-- /#page-content-wrapper -->



		<div class="zoom">
			<a class="zoom-fab zoom-btn-large" id="zoomBtn"><i class="fa fa-bars"></i></a>
			<ul class="zoom-menu">
				<li><a class="zoom-fab zoom-btn-sm zoom-btn-doc scale-transition scale-out" href="/send"><i class="fa fa-send"></i></a></li>
				<li><a class="zoom-fab zoom-btn-sm zoom-btn-doc scale-transition scale-out" href="/exchange"><i class="fa fa-exchange"></i></a></li>
				<li><a class="zoom-fab zoom-btn-sm zoom-btn-doc scale-transition scale-out" href="/recieve"><i class="fa fa-arrow-down"></i></a></li>

			</ul>

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

<script type="text/javascript">
	
	$(function(){
		var $prev = $('.tab-previous');
		var $next = $('.tab-next');
		var $tabsList = $('.simple-tabs');
		var currentTransformX = 0;
		var $tabs = $('.simple-tabs .tab');
		var tabWidth = $tabs.width();
		$tabs.on('click', function(e){
			$tabs.removeClass('active');
			$(this).addClass('active');
		});
		$prev.on('click', function(){
		//When left is 0 do something...
		$tabs.position().left;
		currentTransformX -= tabWidth;
		$tabsList.css('transform',"translateX("+currentTransformX+"px)");
	});
		$next.on('click', function(){
			if(currentTransformX == 0) {
				return;
			}
			currentTransformX += tabWidth;
			$tabsList.css('transform',"translateX("+currentTransformX+"px)");
		});
	});



</script>
</html>



