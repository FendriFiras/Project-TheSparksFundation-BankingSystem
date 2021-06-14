<!DOCTYPE html>
<html lang="en">
<?php
include('./components/Head.php')
?>


<body>
	<div class="wrapper-main">
		<!-- Navigation -->
		<?php
		include('./components/NavBar.php')
		?>

		<header class="slider-main">
			<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<!-- Slide One - Set the background image for this slide in the line below -->
					<div class="carousel-item active" style="background-image: url('images/high-angle-view-of-some-rolled-banknotes-and-coins-on-more-banknotes.jpg')">
						<div class="carousel-caption d-none d-md-block">
							<h3>Welcome to TSF</h3>
							<p>Basic Banking App</p>
						</div>
					</div>
					<!-- Slide Two - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('images/beautiful-asian-woman-using-smartphone-buying-online-shopping.jpg')">
						<div class="carousel-caption d-none d-md-block">
							<h3>Dummy data</h3>
							<p>10
								customers</p>
						</div>
					</div>
					<!-- Slide Three - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('images/man-holding-credit-card-in-hand-and-entering-security-code-using-laptop-keyboard.jpg')">
						<div class="carousel-caption d-none d-md-block">
							<h3>Customers table</h3>
							<p>Transfers table will record all transfers
								happened</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</header>
		<!-- Page Content -->
		<div class="container">
			<!-- About Section -->
			<div class="about-main">
				<div class="row">
					<div class="col-lg-6">
						<h2>Welcome to TSF</h2>
						<h5>Statement</h5>
						<p>To inspire students, help them innovate and let them integrate to build the next generation humankind.</p>
						<h5>Inspire</h5>
						<p>To inspire, motivate and encourage students to learn, create and help build a better society.</p>
						<h5>Innovate</h5>
						<p>To teach new ways of thinking, to innovate and solve the problems on their own.</p>
						<h5>Integrate</h5>
						<p>To let the students integrate, and help each other, learn from each other and do well together.</p>

					</div>
					<div class="col-lg-6">
						<img class="img-fluid rounded" src="images/about-img.jpg" alt="" />
					</div>
				</div>
				<!-- /.row -->
			</div>
		</div>
		<!-- Contact Us -->
		<div class="touch-line">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<p>Get in touch with us.</p>
					</div>
					<div class="col-md-4">
						<a class="btn btn-lg btn-secondary btn-block" href="contact.html"> Contact Us </a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
		<!--footer starts from here-->
		<?php
		include('./components/Footer.php')
		?>
</body>

</html>