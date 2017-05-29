<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Adem's blog</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="adem's blog, blog adem dinarevic" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for portfolio -->
<link rel="stylesheet" type="text/css" href="../css/style5.css" />
<link rel="stylesheet" type="text/css" href="../css/common.css" />
<!-- //for portfolio -->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/jquery.bsPhotoGallery.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="../js/jquery.bsPhotoGallery.js"></script>

</script>
<script>
	$(document).ready(function(){
		$('ul.first').bsPhotoGallery({
			"classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
			"hasModal" : true,
			// "fullHeight" : false
		});
	});
</script>
</head>

</head>

<body>
<!-- banner-body -->
	<div class="banner-body abt">
		<div class="container">
<!-- header -->
			<?php include 'albumheader.php'; ?>
<!-- //header -->
<!-- portfolio -->
			<div class="portfolio">
				<h3>Album 1</h3>


		        <ul class="row first">
		            <li>
		                <img alt="Rooney"  src="https://premierleague-static-files.s3.amazonaws.com/premierleague/photo/2017/01/27/cf65ed32-8730-4a1e-bbd0-f75e9e1d33de/GettyImages-624343542.jpg">
		                <div class="text">Wayne Rooney playing for Manchester United</div>
		            </li>
		            <li>
		                <img alt="Nani"  src="http://img7.mynet.com/spr/article//2015/06/30/nani-640.jpg">
		                <div class="text">Nani playing for Manchester United</div>
		            </li>
		            <li>
		                <img alt="Old Trafford"  src="http://www.stadiumguide.com/wp-content/gallery/oldtrafford/oldtrafford8.jpg">
		                 <div class="text">The stadium of Man Utd</div>
		            </li>
		            <li>
		                <img alt="Pogba"  src="http://i.dailymail.co.uk/i/pix/2016/08/09/07/37073EE100000578-3715123-image-a-29_1470724321914.jpg">
		                <div class="text">Pogboom</div>
		            </li>
		            <li>
		                <img alt="Martial"  src="https://premierleague-static-files.s3.amazonaws.com/premierleague/photo/2017/02/11/4551388d-0a31-402e-a0ea-795c15831c9d/634727976.jpg">
		                <div class="text">Most expensive teenager of all time</div>
		            </li>



		  </ul>


		    </div> <!-- /container -->
			</div>
<!-- //portfolio -->
		</div>
	</div>
<!-- footer -->
	<?php require "including/footer.php";?>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
