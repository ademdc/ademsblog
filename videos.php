
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
<script src="js/youtubemodal.js"></script>

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
</head>

<body>
<!-- banner-body -->
	<div class="banner-body page">
		<div class="container">
<!-- header -->
			<?php include 'header.php';?>
<!-- //header -->
<!-- pages -->
<div class='about'>
	<br>
	<div class="row">
	  <div class="col-md-4">
	    <div class="thumbnail">
	      <a href="#">
					<img src='https://img.youtube.com/vi/HTnoubSL_j0/0.jpg' class="video" data-video="https://www.youtube.com/embed/HTnoubSL_j0" data-toggle="modal" data-target="#videoModal"></img>
					<div class="caption">
	          <p>Celebration...</p>
	        </div>
	      </a>
	    </div>
	  </div>
	  <div class="col-md-4">
	    <div class="thumbnail">
	      <a href="#">
					<img src='https://img.youtube.com/vi/K8qHiI0wLfQ/0.jpg' class="video" data-video="https://www.youtube.com/embed/K8qHiI0wLfQ" data-toggle="modal" data-target="#videoModal"></img>
	        <div class="caption">
	          <p>Europa league final highlights</p>
	        </div>
	      </a>
	    </div>
	  </div>
	  <div class="col-md-4">
	    <div class="thumbnail">
	      <a href="#">
					<img src='https://img.youtube.com/vi/V3NBVM10Ico/0.jpg' class="video" data-video="https://www.youtube.com/embed/V3NBVM10Ico" data-toggle="modal" data-target="#videoModal"></img>
	        <div class="caption">
	          <p>Post match interiew - Jose Mourinho</p>
	        </div>
	      </a>
	    </div>
	  </div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="#">
					<img src='https://img.youtube.com/vi/SWMqV_WbXwE/0.jpg' class="video" data-video="https://www.youtube.com/embed/SWMqV_WbXwE" data-toggle="modal" data-target="#videoModal"></img>
					<div class="caption">
						<p>Top ten debut goals</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="#">
					<img src='https://img.youtube.com/vi/0RmSXfvqI8U/0.jpg' class="video" data-video="https://www.youtube.com/embed/0RmSXfvqI8U" data-toggle="modal" data-target="#videoModal"></img>
					<div class="caption">
						<p>All goals this season</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="#">
					<img src='https://img.youtube.com/vi/fqkzzzr6fN4/0.jpg' class="video" data-video="https://www.youtube.com/embed/fqkzzzr6fN4" data-toggle="modal" data-target="#videoModal"></img>
					<div class="caption">
						<p>Ferdinand interview</p>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="row">
	  <div class="col-md-4">
	    <div class="thumbnail">
	      <a href="#">
					<img src='https://img.youtube.com/vi/v-Wky90Kf-s/0.jpg' class="video" data-video="https://www.youtube.com/embed/v-Wky90Kf-s" data-toggle="modal" data-target="#videoModal"></img>
	        <div class="caption">
	          <p>Best goals in season...</p>
	        </div>
	      </a>
	    </div>
	  </div>
	  <div class="col-md-4">
	    <div class="thumbnail">
	      <a href="#">
					<img src='https://img.youtube.com/vi/0AO0qRhJlVY/0.jpg' class="video" data-video="https://www.youtube.com/embed/0AO0qRhJlVY" data-toggle="modal" data-target="#videoModal"></img>
	        <div class="caption">
	          <p>Paul Pogba, goals and skills...</p>
	        </div>
	      </a>
	    </div>
	  </div>
	  <div class="col-md-4">
	    <div class="thumbnail">
	      <a href="#">
					<img src='https://img.youtube.com/vi/W6PslBObDeI/0.jpg' class="video" data-video="https://www.youtube.com/embed/W6PslBObDeI" data-toggle="modal" data-target="#videoModal"></img>
	        <div class="caption">
	          <p>Ferguson opinion about PL 2017</p>
	        </div>
	      </a>
	    </div>
	  </div>
	</div>
<br>


<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
			</div>
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
