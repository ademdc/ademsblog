
<!DOCTYPE html>
<html>
<head>
<title>Adem's blog</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="adem blog sports" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
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
	<div class="banner-body page">
		<div class="container">
<!-- header -->
			<?php include 'header.php';?>

<!-- //header -->
<div class='about'>
	<br><br>
		<div class='row'>
			<div class='col-md-6'>
				<p><h4>Manchester United manager Jose Mourinho helps fund £200m summer transfer spree</h4></p><br>
				<img src="images/news1.jpg" alt=" " class="img-responsive" />
				<p>Man Utd will plan to spend £200m this summer, with Antoine Griezmann,
					Nemanja Matic and Michael Keane all on Mourinho's wish list
				</p>
				<div class="more">
					<a href="blogs/blog1.php" class="hvr-bounce-to-bottom sint">Read More</a>
				</div>
			</div>
			<div class='col-md-6'>
				<p><h4>Manchester United confident David de Gea will stay</h4></p><br>
				<img src="images/news2.jpg" alt=" " class="img-responsive" />
				<p>Man Utd news includes an update on David de Gea's future at Old Trafford
					amid transfer interest from Real Madrid.
				</p>
				<div class="more">
					<a href="blogs/blog2.php" class="hvr-bounce-to-bottom sint">Read More</a>
				</div>
			</div>
		</div>

		<div class='row'>
			<div class='col-md-6'>
				<p><h4>Manchester United 'interested' in PSG star Lucas Moura and more transfer rumours</h4></p><br>
				<img src="images/news3.jpg" alt=" " class="img-responsive" />
				<p>Manchester United have made an approach for PSG star Lucas Moura, according to reports.
					The Reds previously came close to landing the Brazilian forward back in 2012
					when he was playing for Sao Paulo.</p>
				<div class="more">
					<a href="blogs/blog3.php" class="hvr-bounce-to-bottom sint">Read More</a>
				</div>
			</div>
			<div class='col-md-6'>
				<p><h4>Five Manchester United players who Jose Mourinho should build his team around</h4></p><br>
				<img src="images/news4.jpg" alt=" " class="img-responsive" />
				<p>Man Utd manager Jose Mourinho can build a successful team around the
					likes of Paul Pogba, Ander Herrera and Marcus Rashford.</p>
				<div class="more">
					<a href="blogs/blog4.php" class="hvr-bounce-to-bottom sint">Read More</a>
				</div>
			</div>
		</div>


		</div>
	</div>
</div>
		<?php require "including/footer.php";?>

<!-- //footer -->

<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
