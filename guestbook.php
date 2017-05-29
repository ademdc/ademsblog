
<?php
if(isset($_GET['submit'])){
  require 'admin/databaseconnect.php';

  $nickname = $_GET['name'];
  $email = $_GET['email'];
  $website = $_GET['website'];
  $message = $_GET['message'];
  $date = date('Y-m-d H:i:s');

$sql = "INSERT INTO comments
VALUES (NULL, '$nickname', '$email','$website','$message','0','$date')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-warning'>Comment pending.</div>";
    echo "<script type='text/javascript'>alert('Comment waiting to be approved.')</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
 <script type="text/javascript" src="js/myjavascript.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});


});

</script>
<!-- start-smoth-scrolling -->
</head>

<body>
<!-- banner-body -->
	<div class="banner-body cntct">
		<div class="container">
<!-- header -->
	<?php include 'header.php';?>
<!-- //header -->
<!-- contact -->
	<div class="contact">
		<div class="contact-left">
			<iframe src=https://www.google.com/maps/embed/v1/place?key=AIzaSyDEKHpaEe_2isbbJXs15LerDETryPYivic&q=Mahala,Breza" frameborder="0" style="border:0"></iframe>
		</div>
		<div class="contact-right">
			<p class="phn">+387 61 048 386</p>
			<p class="phn-bottom">Novo Naselje bb
					<span>71370 Breza</span></p>
			<p class="lom">I am currently living in Breza, a small town close to Sarajevo.</p>
		</div>
		<div class="clearfix"> </div>

			<div class="col-md-4">
    <div class="form-area">
        <form method='get' role="form" id='commentform'>
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Leave a comment</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="website" name="website" placeholder="Website" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" name ="message" maxlength="140" rows="7"></textarea>
                    </div>

        <input type="submit" id="submit" name="submit" class="btn btn-primary pull-right"></input>
        </form>
    </div>
</div>

		<div class="clearfix"> </div>
	   <h3>Comments</h3>

		<?php
require 'admin/showData.php';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if($row['approved']=='1'){
echo '<div class="comment-grid-top">
			<div class="comments-top-top">
				<div class="top-comment-left">
					<a href="#"><img class="img-responsive" src="images/co.png" alt=""></a>
				</div>
				<div class="top-comment-right">
					<ul>
						<li><span class="left-at"><a href="#">'.$row['nickname'].'</a></span></li>
						<li><span class="right-at">'.$row['date'].'</span></li>

					</ul>
				<p>'.$row['message'].'</p>
				</div>
				<div class="clearfix"> </div>
			</div>

				<div class="clearfix"> </div>
			</div>';
			}}}

			$conn->close();?>
	</div>
<!-- //contact -->
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
