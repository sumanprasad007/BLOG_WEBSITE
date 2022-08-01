<!doctype html>

<head>

	<title>www.blogsite.com</title>

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/styles.css" />
	<!-- Font Awesome -->
	<link href="font/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
	<header class="header">
		<div class="container">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					<span class="sr-only">Toggle navigation</span>

					</button>
					<a href="#" class="navbar-brand scroll-top logo"><b>BLOG </b>SITE</a>
				</div>
				<!--/.navbar-header-->
				<div id="main-nav" class="collapse navbar-collapse">
					<ul class="nav navbar-nav" id="mainNav">
						<li class="active"><a href="#home" class="scroll-link">Home</a></li>
						<li><a href="#aboutUs" class="scroll-link">About Us</a></li>
						<li><a href="#services" class="scroll-link">Blogs</a></li>
						<li><a href="#portfolio" class="scroll-link">Portfolio</a></li>
						<li><a href="#contactUs" class="scroll-link">Contact Us</a></li>


					</ul>
				</div>
				<!--/.navbar-collapse-->
			</nav>
			<!--/.navbar-->
		</div>
		<!--/.container-->
	</header>
	<!--/.header-->
	<div id="#top"></div>
	<section id="home" class="page-section">
		<div class="banner-container">
			<div class="container banner-content">
				<h1>Let's Learn<br /><span>with Blog Site</span></h1>
				<p style="color: white;" class="lead">"Simplicity is the soul of effeciency" ~ Austin Freeman</p>
				<p><a href="#about" class="button-outline"> More.. </a></p>

			</div>
		</div>
		</div>

		<!--/.container-->
	</section>
	<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
	<section id="aboutUs" class="page-section darkBg pDark pdingBtm30">
		<div class="container">
			<div class="heading text-center">
				<!-- Heading -->
				<h2>About Us</h2>
				<p>We are here to provide the Educational Content in an Entertainment Way</p>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-4">
					<h3><i class="fa fa-desktop color"></i> &#10032; What we do?</h3>
					<!-- Paragraph -->
					<p>Educational Content as Entertaining as Netflix Show</p>

				</div>
				<div class="col-md-4 col-sm-4">
					<!-- Heading -->
					<h3><i class="fa fa-cloud color"></i> &#10032; Why choose us?</h3>
					<!-- Paragraph -->
					<p>Quick insights anytime, anywhere</p>
				</div>
				<div class="col-md-4 col-sm-4">
					<!-- Heading -->
					<h3><i class="fa fa-home color"></i> &#10032; Where are we?</h3>
					<!-- Paragraph -->
					<p>Available Everywhere just need phone with Internet</p>
				</div>
			</div>
		</div>


		<!--/.container-->
	</section>

	<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

	<div class="container">
		<div class="heading text-center">
			<!-- Heading -->
			<h2>Blogs</h2>
			<p>"Experience is the name everyone gives to their mistakes." ~ Oscar Wilde</p>
		</div>

		<!-- grid item -->
		<div class="grid-item col-md-6">
			<div class="item-content clearfix">
				<div class="text-content">

					<h4>CyberSecurity Awareness</h4>
					<img style="width: 40rem;" src="images/image.png" alt="">
				</div>
			</div><!-- end: .item-content -->
		</div><!-- end: .grid-item -->

		<!-- grid item -->
		<div class="grid-item col-md-6">
			<div class="item-content clearfix">
				<div class="text-content">

					<h4>Caesar Cipher - Encryption</h4>
					<img style="width: 25rem;"
						src="https://1.bp.blogspot.com/-zyYtLn0nO-A/X9ehoRCn2eI/AAAAAAAAAUc/4z8pK_dKSBMU8g7FFlcG6dSYZeXfZqIygCLcBGAsYHQ/a700/Fun-with-Caesar-Shift-Cipher-store-product-image-500x500.jpg"
						alt="">



				</div>
			</div><!-- end: .item-content -->
		</div>

	</div>
	</section>
	</div>

	<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

	<!--/.container-->
	</section>

	<section id="portfolio" class="page-section section appear clearfix">
		<div class="container">

			<div class="heading text-center">
				<!-- Heading -->
				<h2>Portfolio</h2>
				<p> I prefer myself to be trained like an Orthosox & play like Champion </p>
			</div>


			<div class="row">
				<nav id="filter" class="col-md-12 text-center">
					<ul>
						<li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
						<li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Web Design</a></li>
						<li><a href="#" class="btn-theme btn-small" data-filter=".photography">Blogging</a></li>
						<li><a href="#" class="btn-theme btn-small" data-filter=".print">Hacks & Tips</a></li>
					</ul>
				</nav>
				<div class="col-md-12">
					<div class="row">


					</div>

				</div>


			</div>

			<!-- ///////////////////////////////////////////////////////////////////////////////////// -->

			<div class="portfolio-item">
				<!-- <img src="images/portfolio/img1.jpg" alt="" /> -->
				<!-- <img src="images/portfolio/Image687.jpg" alt="" /> -->
				<!-- <img src="images/portfolio/Image847.jpg" alt="" /> -->
				<img src="images/portfolio/Image449.jpg" alt="" />

			</div>

		</div>

		</div>
	</section>

	<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


	<section id="contactUs" class="page-section">
		<div class="container">

			<div class="heading text-center">
				<!-- Heading -->
				<h2>Contact Us</h2>
				<p>Need help or wanted to share anything, feel free to contact us! </p>
			</div>


			<div class="col-sm-4">
				<h4>Email Id:</h4>
				<address>
					suman.prasad@adypu.edu.in<br>
				</address>
				<h4>Phone:</h4>
				<address>
					9766229768<br>
				</address>
			</div>

			<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
	<!--/.container-->
	</section>

	<!-- ///////////////////////////////////////////////////////////////////////////////////// -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
        
		
		// Connecting to the Database
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "contacts";

		// Create a connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Die if connection was not successful
		if (!$conn){
			die("Sorry we failed to connect: ". mysqli_connect_error());
		}
		else{ 
			// Submit these to a database
			// Sql query to be executed 
			$sql = "INSERT INTO `contactus` (`name`, `email`, `concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
			$result = mysqli_query($conn, $sql);
	
			if($result){
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Success!</strong> Your entry has been submitted successfully!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			</div>';
			}
			else{
				// echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			</div>';
			}

		}

    }

    
?>

<div class="container mt-3">
<h1>Contact us for your concerns</h1>
    <form action="index.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea> 
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------- -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <!--/.page-section-->
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        Copyright 2021 All Rights Reserved <div class="pull-right">Click to check my Blogs <a
                                href="https://programmingwithsumanprasad.blogspot.com/" target="blank">Suman Praad</a></div>
                    </div>
                </div> <!-- / .row -->
            </div>
        </section>
        <!-- In nav bar it targets Blog to scroll down till blogs page -->
        <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
    
    <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------- -->
    
</body>

</html>