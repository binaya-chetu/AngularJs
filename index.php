<!-- Header included start-->
	<?php include ('includes/header.php'); ?>
	<!-- Header included end-->
	
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			<!-- Content Slider -->
			<div id="slider" class="box">
				<div id="slider-holder">
					<ul>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
					</ul>
				</div>
				<div id="slider-nav">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div>
			</div>
			<!-- End Content Slider -->
			
			<!-- Products -->
			<div data-ng-view></div>
			<ng-main-products></ng-main-products>
			<!-- End Products -->
			
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			<!-- Search -->
			<div class="box search">
				<h2>Search by <span></span></h2>
				<div class="box-content">
					<form action="" method="post">
						
						<label>Keyword</label>
						<input type="text" class="field" />
						
						<label>Category</label>
						<ng-select-category></ng-select-category>
						
						<div class="inline-field">
							<label>Price</label>
							<select class="field small-field">
								<option value="">$10</option>
							</select>
							<label>to:</label>
							<select class="field small-field">
								<option value="">$50</option>
							</select>
						</div>
						
						<input type="submit" class="search-submit" value="Search" />
						
						<p>
							<a href="#" class="bul">Advanced search</a><br />
							<a href="#" class="bul">Contact Customer Support</a>
						</p>
	
					</form>
				</div>
			</div>
			<!-- End Search -->
			
			<!-- Categories -->
			<div ng-controller="Categories">
				<div data-ng-categories></div>	
			</div>
			<!-- End Categories -->
			
		</div>
		<!-- End Sidebar -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- Side Full -->
	<div class="side-full">
		
		<!-- More Products -->
		<div class="more-products">
			<div class="more-products-holder">
				<ul>
				    <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small1.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small2.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small3.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small4.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small5.jpg" alt="" /></a></li>
				    <li><a href="#"><img src="css/images/small6.jpg" alt="" /></a></li>
				    <li class="last"><a href="#"><img src="css/images/small7.jpg" alt="" /></a></li>
				</ul>
			</div>
			<div class="more-nav">
				<a href="#" class="prev">previous</a>
				<a href="#" class="next">next</a>
			</div>
		</div>
		<!-- End More Products -->
		
		<!-- Text Cols -->
		<div class="cols">
			<div class="cl">&nbsp;</div>
			<div class="col">
				<h3 class="ico ico1">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col">
				<h3 class="ico ico2">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col">
				<h3 class="ico ico3">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col col-last">
				<h3 class="ico ico4">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- End Text Cols -->
		
	</div>
	<!-- End Side Full -->
	<!-- Footer included start-->
	<?php include ('includes/footer.php'); ?>
	<!-- Footer included end--> 
	