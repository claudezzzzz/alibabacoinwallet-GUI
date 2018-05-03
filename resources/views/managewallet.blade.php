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


			<div class="container-fluid" >
				<div class="container" style="margin-top:20px;">

					<div class="row" id="coin-check-list">
						<div class="col-xs-12">
							<h3 class="text-center">Manage Wallet</h3>
							<div class="well" >
								<ul class="list-group checked-list-box">
									<li class="list-group-item" data-style="button">BTC - Bitcoin</li>
									<li class="list-group-item" data-style="button" data-color="success">LTC - Litecoin</li>
									<li class="list-group-item" data-style="button" data-color="info">ETH - Ethereum</li>
									<li class="list-group-item" data-style="button" data-color="warning">ADA - Cardano</li>
									<li class="list-group-item" data-style="button" data-color="danger">QTUM - Quantum</li>
								</ul>
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
		$(function () {
			$('.list-group.checked-list-box .list-group-item').each(function () {

        // Settings
        var $widget = $(this),
        $checkbox = $('<input type="checkbox" class="hidden" />'),
        color = ($widget.data('color') ? $widget.data('color') : "primary"),
        style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
        settings = {
        	on: {
        		icon: 'glyphicon glyphicon-check'
        	},
        	off: {
        		icon: 'glyphicon glyphicon-unchecked'
        	}
        };

        $widget.css('cursor', 'pointer')
        $widget.append($checkbox);

        // Event Handlers
        $widget.on('click', function () {
        	$checkbox.prop('checked', !$checkbox.is(':checked'));
        	$checkbox.triggerHandler('change');
        	updateDisplay();
        });
        $checkbox.on('change', function () {
        	updateDisplay();
        });


        // Actions
        function updateDisplay() {
        	var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $widget.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $widget.find('.state-icon')
            .removeClass()
            .addClass('state-icon ' + settings[$widget.data('state')].icon);

            // Update the button's color
            if (isChecked) {
            	$widget.addClass(style + color + ' active');
            } else {
            	$widget.removeClass(style + color + ' active');
            }
        }

        // Initialization
        function init() {

        	if ($widget.data('checked') == true) {
        		$checkbox.prop('checked', !$checkbox.is(':checked'));
        	}

        	updateDisplay();

            // Inject the icon if applicable
            if ($widget.find('.state-icon').length == 0) {
            	$widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
            }
        }
        init();
    });

			$('#get-checked-data').on('click', function(event) {
				event.preventDefault(); 
				var checkedItems = {}, counter = 0;
				$("#check-list-box li.active").each(function(idx, li) {
					checkedItems[counter] = $(li).text();
					counter++;
				});
				$('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
			});
		});
	</script>


	</html>



