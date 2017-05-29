
<!DOCTYPE html>
<html>
<head>
<title>Adem's blog</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Quickly Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
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
</head>
	
<body>
<!-- banner-body -->
	<div class="banner-body logn">
		<div class="container">
<!-- header -->
			<div class="header">
				<div class="header-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						   <a class="navbar-brand" href="adminPage.php"><span>A</span>dems blog - admin page</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						 
						  <div class="sign-in">
							<ul>
								<li><a href="logout.php">Logout </a></li>
								
							</ul>
							</div>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
	
			<!-- search-scripts -->
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( "sb-search" ) );
				</script>
			<!-- //search-scripts -->
			</div>'

			
<!-- //header -->
	<div class="banner-body abt">

	<?php
session_start();

if(!$_SESSION['isLoggedIn']){
echo 'not logged in';
}else{
echo "Connected successfully";

echo '<br><br>';

echo "Welcome <b>".$_SESSION['username']."</b>";

?>
<br>
<br>



<p> Here are all comments</p>
<br>

<?php 
require 'showData.php';
$counter=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo '<div class="comment-grid-top">
			<h3>Comment'.$counter.'</h3>
			<div class="comments-top-top">
				<div class="top-comment-left">
					<a href="#"><img class="img-responsive" src="../images/co.png" alt=""></a>
				</div>
				<div class="top-comment-right">

					<ul>
						<li><span class="left-at"><a href="#">'.$row['nickname'].'</a></span></li>
						<li><span class="right-at">'.$row['date'].'</span></li>
						<li><a class="reply" href="editComment.php">Edit</a></li>
						
					</ul>
				<p>'.$row['message'].'</p>
				</div>
				<div class="clearfix"> </div>
			</div>
				
				<div class="clearfix"> </div>
			</div>';
			$counter++;}}

			$conn->close();?>

	</div>				 
<!-- footer -->
	<?php  require "../including/footer.php"; }?>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>