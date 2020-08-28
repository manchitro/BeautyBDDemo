<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'testfb');
$tableName = "category";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.1.1">
	<title>FB Live Demo</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="album.css">

	<link rel="icon" href="favicon.png">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		.slideproduct{
			width: 50%;
			height: 300px;
			display: block;
			margin: auto;
			background-image: url('https://images.unsplash.com/photo-1554034483-04fda0d3507b?ixlib=rb-1.2.1&w=1000&q=80');
			background-size: 100% 100%;
			box-shadow: 1px 2px 10px 5px black;
			animation:slider 9s infinite linear;
		}

		@keyframes slider {
			0%{background-image: url('https://images.unsplash.com/photo-1579546929518-9e396f3cc809?ixlib=rb-1.2.1&w=1000&q=80');}
			35%{background-image: url('https://cdn.pixabay.com/photo/2016/11/29/05/45/astronomy-1867616__340.jpg');}
			75{background-image: url('https://i.pinimg.com/736x/d9/f6/d2/d9f6d2bc09c60ec7b170a57be6c7b996.jpg');}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="album.css" rel="stylesheet">
</head>
<body>
	<header>
		<div class="collapse bg-dark" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
						<h4 class="text-white">Beauty BD Shop</h4>
						<p class="text-muted">Twin Tower Shopping Complex, Shop # 121/A,
							Ground Floor, Shantinagar
						Dhaka, Bangladesh</p>
					</div>
					<div class="col-sm-4 offset-md-1 py-4">
						<h4 class="text-white">Contact</h4>
						<ul class="list-unstyled">
							<li><a href="https://www.facebook.com/beautybd.org" class="text-white">Like on Facebook</a></li>
							<li><a href="#" class="text-white">Email me</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-dark bg-dark shadow-sm">
			<div class="container d-flex justify-content-between">
				<a href="#" class="navbar-brand d-flex align-items-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
					<strong>Beauty BD</strong>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>
	</header>

	<main role="main">

		<!-- Create slider blocks -->

		<section class="jumbotron text-center">

			<div class="slideproduct">
				<h1>Discount Products</h1>
			</div>

		</section>

		<div class="album py-5 bg-light">
			<div class="container">

				<div class="row">

					<!-- Create all category blocks -->

					<?php
					$query = "SELECT * FROM $tableName";
					$result = mysqli_query($connection, $query);
					while ($row = mysqli_fetch_assoc($result)) {
						?>
						<div class="col-md-4">
							<div class="card mb-4 shadow-sm">
								<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> 
									<image href="<?php echo $row['category_image'] ?>" height="100%" width="100%"/>
									</svg>
									<div class="card-body">
										<!--  -->
										<p class="card-text"><?= $row['category_name'] ?></p>

										<div class="d-flex justify-content-between align-items-center">
											<div class="btn-group">
												<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
												<button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href='https://www.facebook.com/messages/t/1439803996096094'">Contact Seller</button>
											</div>
											<small class="text-muted">9 mins</small>
										</div>
									</div>
								</div>
							</div>

						<?php } ?>


					</div>
				</div>
			</div>

		</main>

		<footer class="text-muted">
			<div class="container">
				<p class="float-right">
					<a href="#">Back to top</a>
				</p>
				<p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
				<p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"><\/script>')</script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		</html>
