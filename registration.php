<?php include('includes/config.php'); ?>

<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $usql = "INSERT INTO `users` VALUES ('$username','$name','$mobile','$address')";

    mysqli_query($con, $usql);

    $role = "3";

    $usql1 = "INSERT INTO `login` VALUES ('$username','$password','$role')";

    mysqli_query($con, $usql1);

    $smsg = "Registred Successfully";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Multi Store</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"
	content="BOX SHOP Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link
	href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css"
	media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start slider -->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<!--end slider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css"
	media="screen" />
<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo").flexisel({
					visibleItems: 5,
					animationSpeed: 1000,
					autoPlay: true,
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
			    			visibleItems: 2
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
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="wrap">
			<div class="header-bottom">
				<div class="search">
					<div class="header-right">
						<ul>
							<li class="user"><i class="lock"></i> <a href="login.php">Login</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="wrap">
		<div class="navigation-strip">
			<a href="index.php"><img src="images/logo.png" class="img-responsive"
				alt="" style="display: inline-block; padding: 0 0; margin: 0 0;" />
			</a>
			<div class="top-menu">
				<!-- start header menu -->
				<ul class="megamenu skyblue">
					<li><a href="index.php">Home</a></li>
					<li><a href="registration.php">User Registration</a></li>
					<li><a href="storeregistration.php">Store Registration</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>


		<!-- start account -->
		<div class="login-page">
			<div class="dreamcrub">
				<div class="account_grid">
					<div class="col-md-6 login-right">
						<h3>Register Here</h3>
								<form method="post" class="form form-vertical" id="test-form"
									method="post" onSubmit="loadVal();">

									<span style="color: green;"> <?php echo isset($smsg)?$smsg:'';?> </span>
									<div>
										<span>Enter Email</span> <input type="email" name="username"
											id="username" required
											<?php echo isset($_POST['username'])?$_POST['username']:'';?>>
									</div>

									<div>
										<span>Password</span> <input type="password" name="password"
											id="password" required
											<?php echo isset($_POST['password'])?$_POST['password']:'';?>>
									</div>

									<div>
										<span>Name</span> <input type="text" name="name" id="name"
											required
											<?php echo isset($_POST['name'])?$_POST['name']:'';?>>
									</div>

									<div>
										<span>Mobile</span> <input type="text" name="mobile"
											id="mobile" pattern="[7-9]{1}[0-9]{9}" 
											title="Phone number with 7-9 and remaing 9 digit with 0-9"
											required
											<?php echo isset($_POST['mobile'])?$_POST['mobile']:'';?>>
									</div>
									
									<div>
										<span>Address</span> <textarea name="address"
											id="address" required cols="68"
											<?php echo isset($_POST['address'])?$_POST['address']:'';?>></textarea>
									</div>

									<input type="submit" name="submit" value="Register">
								</form>
							</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<?php include('includes/footer.php'); ?>