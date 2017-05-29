
<!DOCTYPE html>
<html>
<head>
<title>Adem's blog</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="adem dinarevic, blog, adamsdc, adembayor" />
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
	<div class="banner-body abt">
		<div class="container">
<!-- header -->
		<?php include 'header.php';?>

<!-- //header -->
<!-- about-page -->
	<div class="about">
			<div class="about-text">
				<h3>About Me</h3>
			</div>
			<div class="about-info">
				<h4>Work hard, dream big!</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
					words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
				<div class="col-md-5 about-info-left">
					<img src="images/10-.jpg" alt=""/>
				</div>
				<div class="col-md-7 about-info-right">
					<h4>piece of classical Lorem Ipsum </h4>
					<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, <span>by injected humour,  to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
					or randomised words which don't look even slightly believable.Lorem Ipsum available, but the majority</span> have suffered alteration in some form, by injected humour.</p>
				</div>
				<div class="clearfix"> </div>

			</div>
			<div class="about-grid">


						  <div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
<!-- //about-page -->
		</div>
	</div>
<!-- footer -->
	<?php include 'including/footer.php'; ?>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
