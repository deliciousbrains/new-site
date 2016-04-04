<?php
	$nav = '';
	$page = 'offload';
	$subpage = 'documentation';
	include_once('../parts/header.php');
?>


<header class="page-header page-header--offload">
	<?php include_once('../parts/nav-offload.php'); ?>
	<h1 class="page-title">Documentation</h1>
</header>



<section class="docs">

	<form action="#" class="docs__search">
		<div class="form-group">
			<input type="search" placeholder="What are you searching for?">
			<input type="submit" class="btn" value="find">
		</div>
	</form>

	<aside class="docs__categories">
		<a href="#" class="docs__category">Getting Started</a>
		<a href="#" class="docs__category">Debugging</a>
		<a href="#" class="docs__category">CLI</a>
		<a href="#" class="docs__category">Common Errors</a>
		<a href="#" class="docs__category">How To</a>
		<a href="#" class="docs__category">Addons</a>
		<a href="#" class="docs__category">Multisite</a>
		<a href="#" class="docs__category">Changelogs</a>
		<a href="#" class="docs__category">Videos</a>
	</aside>

	<div class="docs__topics">
		<a class="docs__topic" href="#">Quick Start Guide</a>
		<a class="docs__topic" href="#">Exporting a Single Site Install as a Subsite for a Multisite Install</a>
		<a class="docs__topic" href="#">The source site supports utf8mb4 data but the target does not &hellip;</a>
		<a class="docs__topic" href="#">WP-CLI Command</a>
		<a class="docs__topic" href="#">WP-CLI Command – Export Subcommand</a>
		<a class="docs__topic" href="#">WP-CLI Command – Profile Subcommand</a>
		<a class="docs__topic" href="#">WP-CLI Command – Push/Pull Subcommands</a>
		<a class="docs__topic" href="#">A response was expected from the remote &hellip;</a>
		<a class="docs__topic" href="#">WP_HTTP_BLOCK_EXTERNAL</a>
		<a class="docs__topic" href="#">Mixed Case Table Names</a>
		<a class="docs__topic" href="#">Extracting a Subsite From Multisite to Create a New Single Site Install</a>
		<a class="docs__topic" href="#">Push or Pull?</a>
		<a class="docs__topic" href="#">How It Works Exactly</a>
		<a class="docs__topic" href="#">Find & Replace Fields</a>
		<a class="docs__topic" href="#">Serialized Data</a>
		<a class="docs__topic" href="#">Troubleshooting Guide</a>
		<a class="docs__topic" href="#">Known Plugin Conflicts</a>
		<a class="docs__topic" href="#">Compatibility Mode</a>
		<a class="docs__topic" href="#">Error Codes</a>
		<a class="docs__topic" href="#">Activating Your License</a>
	</div>

	<nav class="pagination">
		<a href="#" class="pagination__prev">&larr; Previous Page</a>

		<div class="pagination__pages">
			<a href="#" class="pagination__page active">1</a>
			<a href="#" class="pagination__page">2</a>
			<a href="#" class="pagination__page">3</a>
		</div>

		<a href="#" class="pagination__next">Next Page &rarr;</a>
	</nav>

</section>


<section class="callout">
	<div class="callout__content">
		<h2 class="callout__message">WP offload DB is essential for<br> every WordPress Developer</h2>
		<a href="/offload/pricing.php" class="btn btn--lg btn--danger callout__button">
			See Pricing
			<svg class="icon icon-chevron-right">
				<use xlink:href="#icon-chevron-right"></use>
			</svg>
		</a>
	</div>
</section>


<?php include_once('../parts/footer.php'); ?>