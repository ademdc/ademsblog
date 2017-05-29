
<?php
$id = $_GET['id'];
if(isset($_POST['submit'])){

	if(isset($_POST['nickname']) && !empty($_POST['nickname'])){
     $nickname = $_POST['nickname'];
	}else{
	$log[] = "Erorr with nickname";
	}
	if(isset($_POST['email']) && !empty($_POST['email'])){
     $email = $_POST['email'];
	}else{
	$log[] = "Erorr with email";
	}
	if(isset($_POST['website']) && !empty($_POST['website'])){
     $website = $_POST['website'];
	}else{
	$log[] = "Erorr with website";
	}
	if(isset($_POST['message']) && !empty($_POST['message'])){
     $message = $_POST['message'];
	}else{
	$log[] = "Erorr with message";
	}
	if(isset($_POST['approved']) && !empty($_POST['approved'])){
     $approved = $_POST['approved'];
	}else{
		$approved = '0';
	$log[] = "Erorr with approved";
	}
	require 'databaseconnect.php';

	$sql = "UPDATE comments SET nickname='$nickname',email='$email',website='$website',message='$message',approved='$approved' WHERE commentNo=$id";

if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-warning'>Record updated successfully</div>";
} else {
    echo "Error updating record: " . $conn->error;
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
<meta name="keywords" content="adem dinarevic,adem,ademdc" />
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
			</div>


<!-- //header -->
	<?php session_start();
if(!$_SESSION['isLoggedIn']){
echo 'not logged in';
header("Location: admin.php");
}else{
	?>


	<?php

 if(isset($_GET['action']) && $_GET['action']=='edit'){
 	require 'databaseconnect.php';
 	$id = $_GET['id'];
 	$sql = "SELECT * FROM comments WHERE commentNo='$id'";
     $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<form method="post" action=""><br>Name <br>
            <input type="text" name="nickname" value="'.$row["nickname"].'">
            <br>Email<br>
			<input type="text" name="email" value="'.$row["email"].'"><br>
			Webiste<br>
			<input type="text" name="website" value="'.$row["website"].'"><br>
			Message <br>
			<textarea name="message" cols="30" rows="5" value="" >'.$row["message"].'</textarea> <br>
			Approved (1 for yes, 0 for No)<br>
			<select name="approved">
  <option value="0">0</option>
  <option value="1">1</option>
	</select>
			<br>
			<input class="btn-primary" type="submit" name="submit" ><br>

			</form>';
    }
} else {
    echo "0 results";
}

}
?>

			<br>
			<a href="adminpage2.php">Go Back</a>

	</div>
<!-- footer -->
	<?php $conn->close(); require "../including/footer.php"; }?>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>
