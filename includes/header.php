<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
	
	<meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	<meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	
	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.js"></script>
	<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>	
	<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>	
	<script src="js/jquery-func.js" type="text/javascript"></script>
	<!-- End JS -->
<style>
.products ul li{
	width:227px
}
</style>	
</head>
<body>
	
<!-- Shell -->	
<div class="shell" data-ng-app="shoppingApp" data-ng-controller="MainController">
	<!-- Header -->	
	<div id="header">
		<h1 id="logo"><a href="#">shoparound</a></h1>	
		<!-- Cart -->
		<div id="cart">
			<a href="#" class="cart-link">Your Shopping Cart</a>
			<div class="cl">&nbsp;</div>
			<span data-ng-show="cart.counter == 0"></span>
			<span data-ng-show="cart.cost != 0">Articles: <strong>{{ cart.counter }}</strong></span>
			&nbsp;&nbsp;
			<span data-ng-hide="cart.cost == 0">Cost: <strong>${{ cart.cost }}</strong></span>
		</div>
		<!-- End Cart -->
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a href="#" class="active">Home</a></li>
			    <li><a href="#">Support</a></li>
			    <li><a href="#">My Account</a></li>
			    <li><a href="#">The Store</a></li>
			    <li><a href="#">Contact</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->