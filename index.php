<?php
if(isset($_POST['submit'])){
	$email = $_POST['email'];

	include 'admin/databaseconnect.php';

	$sql = "INSERT INTO subscription VALUES(NULL,'$email')";

	if ($conn->query($sql) === TRUE) {
	    echo "<div class='alert alert-warning'>Subscription added.</div>";
	    echo "<script type='text/javascript'>alert('Thank you for subscribing.')</script>";

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Adem's blog </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="adem dinarevic, blog, adem dinarevic blog" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/myjavascript.js"></script>

<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>

<body>
<!-- banner-body -->
	<div class="banner-body">
		<div class="container">
<!-- header -->
			<?php include 'header.php';?>
<!-- //header -->
<!-- header-bottom -->
	<div class="header-bottom">
		<div class="header-bottom-top">
			<ul>
				<li><a href="http://facebook.com/ademdinarevic" class="g"> </a></li>
				<li><a href="http://twitter.com" class="p"> </a></li>
				<li><a href="http://plus.google.com" class="facebook"> </a></li>
				<li><a href="https://www.linkedin.com/in/adem-dinarevi%C4%87-4ab445102/" class="twitter"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
<!-- banner -->
		<div class="banner">
<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });

				    });
				  </script>
			<!--//End-slider-script -->
				<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-inf">
								<h3>Champions league final</h3>
								<p>Real Madrid and Juventus are playing for glory in Stchokholm in the final of the Champions league. Can't wait...</p>
								<a href="blogs/blog1.php">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>Manchester United vs Ajax</h3>
								<p>Is Manchester united going to win for the first time in their history the Europa league copetition?</p>
								<a href="blogs/blog2.php">See More</a>
							</div>
						</li>
						<li>
							<div class="banner-inf">
								<h3>Zeljeznicar to challenge for title</h3>
								<p>It is tough in the first Bosnian football league this season where three teams challenge the title.</p>
								<a href="blogs/blog3.php">See More</a>
							</div>
						</li>
					</ul>
				</div>
		</div>
<!-- //banner -->
<!-- banner-bottom -->
			<div class="banner-bottom">
				<ul id="flexiselDemo1">
					<li>
						<div class="banner-bottom-grid">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
							<p>Man Utd will plan to spend £200m this summer, with Antoine Griezmann,
								Nemanja Matic and Michael Keane all on Mourinho's wish list</p>
							<div class="more">
								<a href="blogs/blog1.php" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-bottom-grid">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
							<p>Man Utd news includes an update on David de Gea's future at Old Trafford
								amid transfer interest from Real Madrid.</p>
							<div class="more">
								<a href="blogs/blog2.php" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-bottom-grid">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
							<p>>Manchester United have made an approach for PSG star Lucas Moura, according to reports.
								The Reds previously came close to landing the Brazilian forward back in 2012
								when he was playing for Sao Paulo.</p>
							<div class="more">
								<a href="blogs/blog3.php" class="hvr-bounce-to-bottom sint">Read More</a>
							</div>
						</div>
					</li>
				</ul>
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: {
										portrait: {
											changePoint:480,
											visibleItems: 1
										},
										landscape: {
											changePoint:640,
											visibleItems:2
										},
										tablet: {
											changePoint:768,
											visibleItems: 3
										}
									}
								});

							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
<!-- //banner-bottom -->
<!-- blog -->
			<div class="blog">
				<div class="blog-left">
					<div class="blog-left-grid">
						<div class="blog-left-grid-left">
							<h3><a href="blogs/blog4.php">Five Manchester United players who Jose Mourinho should build his team around</a></h3>
							<p>by <span>admin</span> | May 29,2017 | <span>Sint</span></p>
						</div>
						<div class="blog-left-grid-right">
							<a href="#" class="hvr-bounce-to-bottom non">0 Comments</a>
						</div>
						<div class="clearfix"> </div>
						<a href="single.html"><img src="images/news4.jpg" alt=" " class="img-responsive" /></a>
						<p class="para"> Man Utd manager Jose Mourinho can build a successful team around the
							likes of Paul Pogba, Ander Herrera and Marcus Rashford.</p>
						<div class="rd-mre">
							<a href="blogs/blog4.php" class="hvr-bounce-to-bottom quod">Read More</a>
						</div>
					</div>
					<div class="blog-left-grid">
						<div class="blog-left-grid-left">
							<h3><a href="blogs/blog3.php">Manchester United 'interested' in PSG star Lucas Moura and more transfer rumours</a></h3>
							<p>by <span>admin</span> | May 4,2017 | <span>Sint</span></p>
						</div>
						<div class="blog-left-grid-right">
							<a href="#" class="hvr-bounce-to-bottom non">0 Comments</a>
						</div>
						<div class="clearfix"> </div>
						<a href="blogs/blog3.php"><img src="images/news3.jpg" alt=" " class="img-responsive" /></a>
						<p class="para"> For the supporters clad in Manchester United red, watching Ander Herrera dance to his own chant and Zlatan Ibrahimovic having his picture taken with a suggestive banner, Wednesday night brought to an end a nine year wait for a European trophy.
							It's the same amount of time that elapsed between Barcelona and Moscow, but the retirement of Sir Alex Ferguson and the advent of smart phones means more has changed this time around.
							As the players took selfies on the pitch and posted dressing room clips to Instagram, there was the palpable sense that this is the start. This squad wants more.
							The majority have now won the FA Cup, League Cup and the Europa League, but ambitions now turn towards the game's largest prizes, starting with a return to the Champions League next term.</p>
						<div class="rd-mre">
							<a href="blogs/blog3.php" class="hvr-bounce-to-bottom quod">Read More</a>
						</div>
					</div>
				</div>
				<div class="blog-right">
					<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					 <script type="text/javascript">
						 $(document).ready(function () {
							 $('#horizontalTab').easyResponsiveTabs({
								 type: 'default', //Types: default, vertical, accordion
								 width: 'auto', //auto or any width like 600px
								 fit: true   // 100% fit in a container
							 });
						 });
							</script>
					<link rel="stylesheet" href="css/swipebox.css">
					<script src="js/jquery.swipebox.min.js"></script>
					 <script type="text/javascript">
						 jQuery(function($) {
							 $(".swipebox").swipebox();
						 });
					 </script>
					<div class="newsletter">
						<h3>Subscribe To Our Newsletter</h3>
						<form method="post" action="#">
							<input type="email" name='email' value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
							<input type="submit" name='submit' value="Send">
						</form>
					</div>
					<div class="four-fig">
						<div class="four-fig1">
							<a href="images/18.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/18.jpg" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="images/15.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/15.jpg" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="images/16.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/16.jpg" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="four-fig1">
							<a href="images/17.jpg" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img src="images/17.jpg" class="img-responsive" alt=" " />
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>

				</div>
				<div class="clearfix"> </div>
			</div>
<!-- //blog -->
	</div>
<!-- //header-bottom -->
		</div>
	</div>
<!-- //banner-body -->
<!-- footer -->
	<?php require "including/footer.php";?>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
