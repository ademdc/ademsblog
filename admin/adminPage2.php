
<?php


if(isset($_GET['action']) && $_GET['action']=='delete'){
echo '<div class = "alert alert-warning">Delete button clicked';
echo '<br>';
$id = $_GET['id'];

require 'databaseconnect.php';
$sql = "DELETE from comments WHERE commentNo='$id'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully </div>";
} else {
    echo "Error deleting record: </div>" . $conn->error;
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
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/myjavascript.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});

    $('.confirm').click(function() {
        return window.confirm("Are you sure you want to delete that record?");
    });
	});
</script>

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

    <div class='about'>

	<?php
session_start();

if(!$_SESSION['isLoggedIn']){
  header("Location: admin.php");
echo 'not logged in';
}else{
echo "<br>Connected successfully <br>";

echo '<br><br>';

echo "Welcome <b>".$_SESSION['username']."</b>";

?>
<br>
<br>



<p> Here are all comments</p>
<br>
<table class="table table-hover table-bordered" style="width:100%">
  <tr>
    <th>CommentNo</th>
    <th>Nickname</th>
    <th>email</th>
    <th>Website</th>
    <th colspan="2">Comment</th>
    <th>Approved</th>
    <th>Edit/Update</th>
  </tr>
<?php
require 'showData.php';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

    echo ' <tr>
    <td>'.$row['commentNo'].'</td>
    <td>'.$row['nickname'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['website'].'</td>
    <td colspan="2">'.$row['message'].'</td>
    <td>'.$row['approved'].'</td>
    <td><a href="editComment.php?action=edit&id='.$row['commentNo'].'">Edit</a>
    <a class="confirm" href="adminpage2.php?action=delete&id='.$row['commentNo'].'">Delete</a></td>
  </tr>';
}}
echo '</table>';
			$conn->close();?>

	</div>
</div>
<!-- footer -->
	<?php  require "../including/footer.php"; }?>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
