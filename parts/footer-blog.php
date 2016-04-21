</main>


<form action="#" class="site__signup">
	<div class="form-group">
		<label for="email">Sign up for the latest product news and updates</label>
		<input type="email" id="email" placeholder="Enter your email address">
		<input type="submit" class="btn btn--danger" value="Join">
	</div>
</form>

<footer class="site__footer site__footer--blog">
	<div class="container">
		<section class="site__footer__blog">
			<h3>
				Plugins
				<span class="welcome__stars">
					<svg class="icon icon-star">
						<use xlink:href="#icon-star"></use>
					</svg>
					<svg class="icon icon-star">
						<use xlink:href="#icon-star"></use>
					</svg>
					<svg class="icon icon-star">
						<use xlink:href="#icon-star"></use>
					</svg>
					<svg class="icon icon-star">
						<use xlink:href="#icon-star"></use>
					</svg>
					<svg class="icon icon-star">
						<use xlink:href="#icon-star"></use>
					</svg>
				</span>
			</h3>

			<div class="welcome__product">
				<header>
					<h3 class="welcome__product__title">
						<span class="icon">
							<!-- <img src="/assets/images/icon-migrate.png" alt="Migrate Icon"> -->
							<svg class="icon-migrate">
								<use xlink:href="#icon-migrate"></use>
							</svg>
						</span>
						WP Migrate DB Pro
					</h3>
					<a href="/migrate.php" class="btn btn--outline btn--primary">
						View Plugin
					</a>
				</header>
				<p class="welcome__product__description">
					Migration can be a beautiful thing. Copy your database from one WordPress install to another with one click in your dashboard.
				</p>
			</div>

			<div class="welcome__product">
				<header>
					<h3 class="welcome__product__title">
						<span class="icon">
							<!-- <img src="/assets/images/icon-s3.png" alt="S3 Icon"> -->
							<svg class="icon-offload">
								<use xlink:href="#icon-offload"></use>
							</svg>
						</span>
						WP Offload S3
					</h3>
					<a href="/offload.php" class="btn btn--outline btn--primary">
						View Plugin
					</a>
				</header>
				<p class="welcome__product__description">
					Speed up your WordPress site by offloading your media and assets to Amazon S3 & CloudFront
				</p>
			</div>
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