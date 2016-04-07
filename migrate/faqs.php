<?php
	$nav = '';
	$page = 'migrate';
	$subpage = 'faq';
	include_once('../parts/header.php');
?>


<header class="page-header page-header--migrate" id="top">
	<?php include_once('../parts/nav-migrate.php'); ?>
	<h1 class="page-title">Frequently Asked Questions</h1>
</header>


<section class="faq">
	<aside class="faq__categories">
		<h5>Categories:</h5>
		<a href="#general" class="faq__category">General</a>
		<a href="#licenses" class="faq__category">Licenses</a>
		<a href="#data" class="faq__category">Data</a>
		<a href="#discounts" class="faq__category">Discounts</a>
	</aside>

	<div class="faq__sections">
		<section class="faq__section" id="general">
			<h2 class="faq__section__title">General</h2>

			<p class="faq__question">What are the requirements to run WP Migrate DB Pro?</p>
			<div class="faq__answer">
				- Latest version of WordPress or the one previous
				- PHP 5.2.4+
				(we do not support safe mode)
				- MySQL 5.0+
				- Apache 2+ or Nginx 1.4+
				It will likely work with other web servers that support PHP & MySQL, but we do not officially support those.
				- Firefox and Webkit-based browsers like Chrome or Safari. Internet Explorer is not supported.
			</div>

			<p class="faq__question">Do you offer refunds?</p>
			<p class="faq__answer">Yep. See our guarantee above for details.</p>

			<p class="faq__question">Will it work on a WordPress.com site? </p>
			<p class="faq__answer">No, WordPress.com does not enable you to install any plugins including ours.</p>

			<p class="faq__question">Will it work to migrate Drupal, Joomla, or Expression Engine sites?</p>
			<p class="faq__answer">No, WP Migrate DB Pro only works with WordPress.</p>

			<hr>
			<a href="#top" class="back_to_top">Back To Top</a>

		</section>
		<section class="faq__section" id="licenses">
			<h2 class="faq__section__title">Licenses</h2>

			<p class="faq__question">How do software updates and support work? </p>
			<p class="faq__answer">To continue receiving software updates and support 1 year after purchase, you will need to renew your license. We'll send you an email well in advance of your license expiring with instructions on how to renew and offering a 30% discount.</p>

			<p class="faq__question">What counts as an "install"? </p>
			<p class="faq__answer">Any time you activate the plugin license on a site with a new URL, that counts as an install. So, http://dev.awesomesite.com and http://awesomesite.com would be two installs.</p>

			<hr>
			<a href="#top" class="back_to_top">Back To Top</a>

		</section>
		<section class="faq__section" id="data">
			<h2 class="faq__section__title">Data</h2>

			<p class="faq__question">Q</p>
			<p class="faq__answer">No, WP Migrate DB Pro only works with WordPress.</p>

			<hr>
			<a href="#top" class="back_to_top">Back To Top</a>

		</section>
		<section class="faq__section" id="discounts">
			<h2 class="faq__section__title">Discounts</h2>

			<p class="faq__question">Q</p>
			<p class="faq__answer">No, WP Migrate DB Pro only works with WordPress.</p>

			<hr>
			<a href="#top" class="back_to_top">Back To Top</a>

		</section>

		<section class="well">
			<h4 class="well__title">Have another questions? Send ‘em our way</h4>
			<a href="#" class="btn btn--outline btn--primary">Ask A Question</a>
			<a href="#" class="btn btn--outline btn--primary">Read Documentation</a>
		</section>
	</div>

</section>

<section class="callout">
	<div class="callout__content">
		<h2 class="callout__message">WP Migrate DB is essential for<br> every WordPress Developer</h2>
		<a href="/migrate/pricing.php" class="btn btn--lg btn--danger callout__button">
			See Pricing
			<svg class="icon icon-chevron-right">
				<use xlink:href="#icon-chevron-right"></use>
			</svg>
		</a>
	</div>
</section>


<?php include_once('../parts/footer.php'); ?>