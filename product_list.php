<?php
	require 'includes/dbh.inc.php';
	$categoryID = $_GET['cid'];
	$catName = "";
	$sql ="SELECT * FROM category WHERE category_id = ?";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL Failed".mysqli_stmt_error($stmt);
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt, "i", $categoryID);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_bind_result($stmt, $categoryId, $categoryName, $categoryImage);
		if(mysqli_stmt_num_rows($stmt) == 0){
			echo "<p>No product found.</p>";
		}
		else{
			while (mysqli_stmt_fetch($stmt)) {
				$catName = $categoryName;
			}
		}
	}
?>

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
		<h1 class="album-title"><?php echo $catName; ?></h1>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">
					<?php

					$sql ="SELECT * FROM product WHERE categoryId = ?";
					$stmt = mysqli_stmt_init($conn);

					if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo "SQL Failed".mysqli_stmt_error($stmt);
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt, "s", $categoryID);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						mysqli_stmt_bind_result($stmt, $productId, $productName, $price, $discount, $description, $productClicks, $productImage, $categoryId);
						if(mysqli_stmt_num_rows($stmt) == 0){
							echo "<p>No product found.</p>";
						}
						else{
							while (mysqli_stmt_fetch($stmt)) {
								echo '
								<div class="col-md-4">
									<div class="card mb-4 shadow-sm">
										<svg class="bd-placeholder-img card-img-top py-4" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
											<image href="'.$productImage.'" height="100%" width="100%" onclick="location.href=\'product.php?pid='.$productId.'\'" role="button"/>
										</svg>
										<div class="card-body">';
										if ($discount > 0){
											echo '<p id="discount">Discount: '.$discount.'%</p>';
										}
										else{
											echo '<br>';
										}
											echo '<h4 class="card-text">'.$productName.'</h4>';
											if ($discount > 0){
												echo '<p class="card-text" id="price"><s>'.$price.'</s> '.round($price -($price * $discount / 100)).' BDT</p>';
											}
											else{
												echo '<p class="card-text" id="price">'.$price.' BDT</p>';
											}
											echo '<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href=\'product.php?pid='.$productId.'\'">View</button>
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
