<?php
	$nav = '';
	$page = '404';
	include_once('parts/header.php');
?>


<header class="page-404">
	<h1>Page Not Found</h1>

	<img src="assets/images/404.png" alt="404 Page Not Found">

	<h2>Try One of the Following</h2>

	<div>
		<a href="/index.php" class="btn">Home</a>
		<a href="/blog.php" class="btn">Blog</a>
		<a href="/migrate.php" class="btn">WP Migrate DB Pro</a>
	</div>
</header>




<?php include_once('parts/footer.php'); ?>