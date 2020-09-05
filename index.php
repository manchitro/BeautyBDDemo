<!DOCTYPE html>
<html>
<head>
	<title>Beauty BD</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177287651-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-177287651-1');
	</script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="FB Live Online Item Catalog Demo">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="icon" href="favicon.png">
</head>
<body>
	<?php
	include 'header.php';
	?>
	<main role="main">
		<section class="discount-product-slider">
			<?php
			require 'includes/dbh.inc.php';
			$sql ="SELECT * FROM product where discount > 0";
			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt, $sql)) {
				echo "SQL Failed".mysqli_stmt_error($stmt);
				exit();
			}
			else{
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				mysqli_stmt_bind_result($stmt, $productId, $productName, $price, $discount, $description, $productClicks, $productImage, $categoryId);
				echo '<h1><u>Discounted Products</u></h1>';
				echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">';
				echo '<ol class="carousel-indicators">';
				for ($i=0; $i < mysqli_stmt_num_rows($stmt); $i++) { 
					if ($i == 0) {
						echo '<li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="'.$i.'" class="active"></li>';
					}
					else{
						echo '<li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="'.$i.'"></li>';
					}
				}
				echo '</ol>';
				echo '<div class="carousel-inner">';
				$index = 0;
				while (mysqli_stmt_fetch($stmt)) {
					if ($index == 0) {
						echo '<div class="carousel-item active">';
					}
					else{
						echo '<div class="carousel-item">';
					}
					echo '<h5>'.$discount.'% OFF</h5>';
					echo '<img class="d-block w-50 m-auto" role="button" src="'.$productImage.'" onclick="window.open(\'product.php?pid='.$productId.'\', \'_blank\')">';
					echo '</div>';
					$index++;
				}
				echo '</div>';
				echo '
				<a class="carousel-control-prev bg-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next bg-dark" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>';
			}
			?>		
		</section>
		<h1 class="album-title"><u>Categories</u></h1>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">
					<?php
					require 'includes/dbh.inc.php';
					$sql ="SELECT * FROM category";
					$stmt = mysqli_stmt_init($conn);

					if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo "SQL Failed".mysqli_stmt_error($stmt);
						exit();
					}
					else{
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						mysqli_stmt_bind_result($stmt, $categoryId, $categoryName, $categoryImage);
						if(mysqli_stmt_num_rows($stmt) == 0){
							echo "<p>You have no sections as of now. Use the add section button to create a section.";
						}
						else{
							while (mysqli_stmt_fetch($stmt)) {
								echo '
								<div class="col-md-4">
									<div class="card mb-4 shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
											<image href="'.$categoryImage.'" height="100%" width="100%" onclick="location.href=\'product_list.php?cid='.$categoryId.'\'" role="button" />
										</svg>
										<div class="card-body">
											<p class="card-text">'.$categoryName.'</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href=\'product_list.php?cid='.$categoryId.'\'">View</button>
													<button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.open(\'https://www.facebook.com/messages/t/1439803996096094\', \'_blank\')">Contact Seller</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								';
							}
						}
					}
					?>
				</div>
			</div>
		</div>
	</main>
	<?php
	include 'footer.php';
	?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"><\/script>')</script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
