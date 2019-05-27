<?php
require './configs/app_top.php';
$title = "Japanese Buddies";
include './includes/header.php';
?>

	<div id="content">
		<div id="section">
			<div>
				<h1>Japanese Buddies!</h1>
				<p>This is an E-learning platform for the japanese teachers and students. For you, For learning. You can use different section of this web page to help you learn japanese. 
				Here we have different multi-media application apply and which provide different learning method for you to choose. 
				If you're having problems using this website, please find your teacher for help.</p>
			</div>
			<div id="figure">
				<a href="<?php echo get_site_url(); ?>"><img src="images/japan.jpg" alt="Image"/></a>
				<span></span>
			</div>
			<span class="background"></span>
		</div>
	</div>


<div id="section2">
		
		<section id="testimornial-area">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
						<div class="testimonial-content">
							<img src="images/3-1.jpg" alt="Image">
							<h3>はる<br> 春 </h3><h2>Spring</h2> (March – May)
							<p> A lot of the country ablaze with beautiful white and pink cherry blossom. Temperatures begin to rise and before hot rainy season. </p>
							<a href="spring.php" class="content-link">Read More</a>
							<br>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
						<div class="testimonial-content">
							<img src="images/3-2.jpg" alt="Image" >
								<h3>なつ<br>夏</h3><h2>Summer</h2> (June – August)
								<p> Summer is very hot and humid, lots of great festivals in Japan and there are lots of spectacular firework shows going on across the country.</p>
								<a href="summer.php" class="content-link">Read More</a>
								<br>
								<p id="redd"></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
						<div class="testimonial-content">
							<img src="images/3-3.jpg" alt="Image">
							<h3>あき<br>秋</h3><h2>Autumn</h2> (September – November)
							<p>In Autumn The country also now changes in to a haven of red and scarlet leaves which contrast strikingly against the deep blue clear skies.</p>
							<a href="autumn.php" class="content-link">Read More</a>
							<br>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
						<div class="testimonial-content">
							<img src="images/3-4.jpg" alt="Image">
							<h3>ふゆ<br>冬 </h3><h2>Winter</h2> (December – March) 
							<p>Japan are carpeted in a brilliant white coating of fresh powdery snow making the traditional Japanese onsen (hot springs) even more fun to sit in. </p>
							<a href="winter.php" class="content-link">Read More</a>
							<br>
							<p id="dets"></p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<?php
include './includes/footer.php';
require './configs/app_bottom.php';
?>
