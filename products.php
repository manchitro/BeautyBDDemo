<!DOCTYPE html>
<html>
<head>
	<title>FB Live Demo</title>
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
		<h1 class="album-title">Products</h1>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">
					<?php
					require 'includes/dbh.inc.php';
					$sql ="SELECT * FROM product";
					$stmt = mysqli_stmt_init($conn);

					if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo "SQL Failed".mysqli_stmt_error($stmt);
						exit();
					}
					else{
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						mysqli_stmt_bind_result($stmt, $productId, $productName, $price, $discount, $description, $productClicks, $productImage);
						if(mysqli_stmt_num_rows($stmt) == 0){
							echo "<p>No product found.</p>";
						}
						else{
							while (mysqli_stmt_fetch($stmt)) {
								echo '
								<div class="col-md-4">
									<div class="card mb-4 shadow-sm">
										<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
											<image href="'.$productImage.'" height="100%" width="100%" />
										</svg>
										<div class="card-body">
											<p class="card-text">'.$productName.'</p>
											<p class="card-text">'.$description.'</p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
													<button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href=\'https://www.facebook.com/messages/t/1439803996096094\'">Contact Seller</button>
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
