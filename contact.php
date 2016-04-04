<?php
	$nav = '';
	$page = 'contact';
	include_once('parts/header.php');
?>


<header class="page-header">
	<h1 class="page-title">Contact Us</h1>
</header>


<section class="contact">

	<div class="contact__details">
		<h2>Business Hours</h2>
		<p>We are a small, distributed team in the United States, Canada, and the United Kingdom. We respond to inquiries and support requests at all hours Monday to Friday. We work weekends from time-to-time, but try not to.</p>

		<h2>Technical Support</h2>
		<p>To request support, visit the Help tab inside the plugin. You can also find the support email address by logging into <a href="#">My Account</a>.</p>

		<h2>Dcoumentation</h2>
		<p>
			<a class="btn btn--outline btn--primary" href="/migrate.php">WP Migrate DB Pro</a>
			<a class="btn btn--outline btn--primary" href="/offload.php">WP Offload S3</a>
		</p>
	</div>

	<div class="contact__details">
		<h2>General Inquiries</h2>
		<p><a href="mailto:nom@deliciousbrains.com">nom@deliciousbrains.com</a></p>

		<h2>Mailing Address</h2>
		<p>
			Delicious Brains Inc.<br>
			Suite 200-252<br>
			14 Court Street<br>
			Truro, Nova Scotia<br>
			B2N 3H7<br>
			Canada
		</p>
	</div>

</section>


<?php include_once('parts/testimonials.php'); ?>



<?php include_once('parts/footer.php'); ?>