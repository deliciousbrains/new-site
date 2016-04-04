</main>


<form action="#" class="site__signup">
	<div class="form-group">
		<label for="email">Sign up for the latest product news and updates</label>
		<input type="email" id="email" placeholder="Enter your email address">
		<input type="submit" class="btn btn--danger" value="Join">
	</div>
</form>

<footer class="site__footer">
	<div class="container">
		<section class="site__footer__posts">
			<h3>Latest Posts <a href="#0">View All</a></h3>
			<ul class="latest-posts">
				<li class="latest-post">
					<header class="latest-post__header">
						<h4 class="latest-post__title">
							<a href="/blog-post.php">Hosting WordPress Yourself Part 8 – Complete Nginx Configuration</a>
						</h4>
						<span class="latest-post__meta">
							<span class="blog__post__comment-count">13</span>
						</span>
					</header>

					<img src="//www.gravatar.com/avatar/e538ca4cb34839d4e5e3ccf20c37c67b?size=60" alt="Brad's Avatar" class="greyscale">
					<span>Published Nov 18th - 2015</span>
				</li>
				<li class="latest-post">
					<header class="latest-post__header">
						<h4 class="latest-post__title">
							<a href="/blog-post.php">WP Offload S3 0.9.7 & Pro Upgrade 1.0.2 Released with 3 New Addons</a>
						</h4>
						<span class="latest-post__meta">
							<span class="blog__post__comment-count">3</span>
						</span>
					</header>

					<img src="//www.gravatar.com/avatar/e538ca4cb34839d4e5e3ccf20c37c67b?size=60" alt="Brad's Avatar" class="greyscale">
					<span>Published Nov 18th - 2015</span>
				</li>
				<li class="latest-post">
					<header class="latest-post__header">
						<h4 class="latest-post__title">
							<a href="/blog-post.php">WordPress Plugin Review: GitHub README</a>
						</h4>
						<span class="latest-post__meta">
							<span class="blog__post__comment-count">27</span>
						</span>
					</header>

					<img src="//www.gravatar.com/avatar/e538ca4cb34839d4e5e3ccf20c37c67b?size=60" alt="Brad's Avatar" class="greyscale">
					<span>Published Nov 18th - 2015</span>
				</li>
			</ul>
		</section>

		<section class="site__footer__contact">
			<h4>Technical Support</h4>
			<p>To request support, visit the Help tab inside the plugin. You can also find the support email address by logging into My Account.</p>

			<h4>General Inquiries</h4>
			<p><a href="mailto:nom@deliciousbrains.com">nom@deliciousbrains.com</a></p>

			<ul class="site__footer__contact__half">
				<li><a href="/about.php">About</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Giving Back</a></li>
				<li><a href="/blog.php">Blog</a></li>
				<li><a href="/contact.php">Contact us</a></li>
			</ul>

			<ul class="site__footer__contact__half">
				<li><a href="/account.php">Account</a></li>
				<li><a href="/affiliate.php">Affiliates</a></li>
			</ul>

			<div class="site__footer__contact__half">
				<h4>WP Migrate DB Pro</h4>
				<ul>
					<li><a href="/migrate.php">Features</a></li>
					<li><a href="#">Addons</a></li>
					<li><a href="/migrate/pricing.php">Pricing &amp; Purchase</a></li>
					<li><a href="/migrate/documentation.php">Documentation</a></li>
					<li><a href="/migrate/faqs.php">FAQs</a></li>
					<li><a href="#">Video</a></li>
					<li><a href="/migrate/buzz.php">Buzz</a></li>
				</ul>
			</div>

			<div class="site__footer__contact__half">
				<h4>WP Offload S3</h4>
				<ul>
					<li><a href="/offload.php">Features</a></li>
					<li><a href="#">Addons</a></li>
					<li><a href="/offload/pricing.php">Pricing &amp; Purchase</a></li>
					<li><a href="/offload/documentation.php">Documentation</a></li>
					<li><a href="/offload/faqs.php">FAQs</a></li>
					<li><a href="#">Video</a></li>
					<li><a href="/offload/buzz.php">Buzz</a></li>
				</ul>
			</div>

		</section>
	</div>
</footer>

<footer class="site__colophon">
	<p>
		&copy; 2013&ndash;<?php echo date("Y"); ?> Delicous Brains, LLC. All Rights Reserved.
		<a href="#0">Privacy Policy</a>|<a href="#0">Terms and Conditions</a>
	</p>
	<ul class="site__social">
		<li>
			<a href="#">
				<svg class="icon icon-github">
					<use xlink:href="#icon-github"></use>
				</svg>
			</a>
		</li>
		<li>
			<a href="#">
				<svg class="icon icon-facebook">
					<use xlink:href="#icon-facebook"></use>
				</svg>
			</a>
		</li>
		<li>
			<a href="#">
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</a>
		</li>
	</ul>
</footer>



<script id="__bs_script__">
//<![CDATA[
	document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]>
</script>


<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="/assets/js/vendor/gridOverlay.js"></script>
<script src="/assets/js/vendor/throttle-scroll.js"></script>
<script src="/assets/js/vendor/owl.js"></script>
<script src="/assets/js/vendor/jquery.cookie.min.js"></script>
<script src="/assets/js/vendor/responsive-nav.jquery.js"></script>

<?php if ( isset($tablesaw) && $tablesaw ) : ?>
	<script src="/assets/js/vendor/tablesaw.js"></script>
<?php endif; ?>

<?php if ( isset($lity) && $lity ) : ?>
	<script src="/assets/js/vendor/lity.js"></script>
<?php endif; ?>

<script src="/assets/js/main.js"></script>

<?php if ( isset($pricing_toggle) && $pricing_toggle ) : ?>
	<script src="/assets/js/price-toggle.js"></script>
<?php endif; ?>

</body>
</html>