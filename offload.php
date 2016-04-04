<?php
	$nav = '';
	$page = 'offload';
	$subpage = '';
	include_once('parts/header.php');
?>


<header class="plugin-intro plugin-intro--offload">

	<?php include_once('parts/nav-offload.php'); ?>
	<div class="plugin-intro__content">

		<a href="https://www.youtube.com/watch?v=Y5k0wTCyixw" class="plugin-intro__play" data-lity>
			<svg class="icon icon-play">
				<use xlink:href="#icon-play"></use>
			</svg>
		</a>

		<h1>WP Offload S3</h1>
		<h2>Speed Up Your WordPress Site</h2>
		<h3>by offloading your media and assets to Amazon S3 & CloudFront</h3>

		<div class="plugin-tweets">
			<div class="item">
				<div class="media media--tweet">
					<img class="media__img" src="https://pbs.twimg.com/profile_images/1341344778/n82408466_32367502_3013-300x201_200x200.jpg" alt="Pippin">
					<div class="media__body">
						<h5 class="tweet-by">Nick Haskins @</h5>
						<p class="tweet-body">“Great plugin, great support. What a perfect little plugin. I really enjoy when I don't have to write something from scratch. Works just as intended, and friendly support to boot.”</p>
						<svg class="icon icon-twitter">
							<use xlink:href="#icon-twitter"></use>
						</svg>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="media media--tweet">
					<img class="media__img" src="https://pbs.twimg.com/profile_images/654234159897026560/CQFQRnjV_200x200.jpg" alt="Laura">
					<div class="media__body">
						<h5 class="tweet-by">Matty LB @</h5>
						<p class="tweet-body">“A BRILLIANT solution for S3 storage & Cloudfront distribution! I looked everywhere for a solution that would send my media to S3 storage AND allow Amazon CloudFront to serve it, and each re&hellip;”</p>
						<svg class="icon icon-twitter">
							<use xlink:href="#icon-twitter"></use>
						</svg>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="media media--tweet">
					<img class="media__img" src="https://pbs.twimg.com/profile_images/689526007770972161/4cssCOaK_200x200.png" alt="Tom">
					<div class="media__body">
						<h5 class="tweet-by">Tom McFarlin @tommcfarlin</h5>
						<p class="tweet-body">Today, i give continued thanks to @dliciousbrains for migrate db pro and the ease at which it offers migrations from dev-to-and-from-staging</p>
						<svg class="icon icon-twitter">
							<use xlink:href="#icon-twitter"></use>
						</svg>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="media media--tweet">
					<img class="media__img" src="https://pbs.twimg.com/profile_images/658610827524743168/14zaaTht_200x200.jpg" alt="Jenny">
					<div class="media__body">
						<h5 class="tweet-by">Jenny Beaumont @jennybeaumont</h5>
						<p class="tweet-body">How did I ever survive without WP Migrate DB Pro before? #winning</p>
						<svg class="icon icon-twitter">
							<use xlink:href="#icon-twitter"></use>
						</svg>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="media media--tweet">
					<img class="media__img" src="https://pbs.twimg.com/profile_images/654234159897026560/CQFQRnjV_200x200.jpg" alt="Laura">
					<div class="media__body">
						<h5 class="tweet-by">Laura Kalbag @laurakalbag</h5>
						<p class="tweet-body">“How much time did we waste moving WordPress sites before WP Migrate DB Pro? (SO much time. It’s a great plugin.)”</p>
						<svg class="icon icon-twitter">
							<use xlink:href="#icon-twitter"></use>
						</svg>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="media media--tweet">
					<img class="media__img" src="https://pbs.twimg.com/profile_images/689526007770972161/4cssCOaK_200x200.png" alt="Tom">
					<div class="media__body">
						<h5 class="tweet-by">Tom McFarlin @tommcfarlin</h5>
						<p class="tweet-body">Today, i give continued thanks to @dliciousbrains for migrate db pro and the ease at which it offers migrations from dev-to-and-from-staging</p>
						<svg class="icon icon-twitter">
							<use xlink:href="#icon-twitter"></use>
						</svg>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="plugin-intro__video">
		<video preload="metadata" autoplay loop>
			<source src="https://wickr.com/videos/wickr-brand.mp4" type="video/mp4">
			<source src="https://wickr.com/videos/wickr-brand.webm" type="video/webm">
			<source src="assets/video/dizzy.ogv" type="video/ogg">
		</video>
	</div>

</header>


<section class="plugin-features plugin-features--offload">
	<div class="container container--center">
		<div class="left-half">
			<h3>Copy files from your wordpress media library to Amazon S3 to serve your assets.</h3>
			<ul>
				<li>Stop wasting time on migrations</li>
				<li>Eliminate the pain that is migrating a WordPress database</li>
				<li>Work less, bill the same, increasing your effective hourly rate</li>
				<li>No more fiddling with SQL files</li>
			</ul>
			<p>
				<a href="#" class="btn btn--lg btn--danger">
					Get Plugin
					<svg class="icon icon-chevron-right">
						<use xlink:href="#icon-chevron-right"></use>
					</svg>
				</a>
			</p>
		</div>
		<div class="figure-right">
			<h2>
				<svg class="icon icon-speedometer">
					<use xlink:href="#icon-speedometer"></use>
				</svg>
				Increase Your Speed,<br>Increase Your Sales
			</h2>
		</div>
	</div>
	<!-- <img src="/assets/images/offload-intro.jpg" alt="Increase Your Speed, Increase Your Sales" > -->
	<span class="plugin-features__bg" style="background-image: url(/assets/images/offload-intro.jpg);"></span>
</section>


<section class="how-it-works">

	<div class="container">

		<h2>How It Works</h2>

		<div class="accordion">

			<h3 class="accordion__title open">Push and Pull your databases</h3>
			<div class="accordion__content open" data-image="/assets/images/how-it-works-1.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
			</div>

			<h3 class="accordion__title">Find & replace that handles serialized data</h3>
			<div class="accordion__content" data-image="/assets/images/product-fpo.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
			</div>

			<h3 class="accordion__title">Backup your database before replacing it</h3>
			<div class="accordion__content" data-image="/assets/images/how-it-works-1.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
			</div>

			<h3 class="accordion__title">Take control of your migration and follow its progress</h3>
			<div class="accordion__content" data-image="/assets/images/product-fpo.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
			</div>

			<h3 class="accordion__title">Media Files Addon</h3>
			<div class="accordion__content" data-image="/assets/images/product-fpo.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
			</div>

			<h3 class="accordion__title">CLI Addon</h3>
			<div class="accordion__content" data-image="/assets/images/product-fpo.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
			</div>

			<h3 class="accordion__title">Another Addon</h3>
			<div class="accordion__content" data-image="/assets/images/product-fpo.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
			</div>

			<a href="#0" class="btn btn--lg btn--danger">
				See Pricing
				<svg class="icon icon-chevron-right">
					<use xlink:href="#icon-chevron-right"></use>
				</svg>
			</a>

		</div>
	</div>
	<img src="/assets/images/how-it-works-1.jpg" alt="Push &amp; Pull Your Databases" class="accordion__image">
</section>


<?php include_once('parts/testimonials.php'); ?>


<section class="features">
	<h2>Addons</h2>

	<span class="addon">
		<svg class="icon icon-woocommerce">
			<use xlink:href="#icon-woocommerce"></use>
		</svg>
		<h5>Woocommerce</h5>
		<img src="/assets/images/offload/woocommerce.png" alt="WooCommerce">
	</span>

	<span class="addon">
		<svg class="icon icon-edd">
			<use xlink:href="#icon-edd"></use>
		</svg>
		<h5>Easy Digital Downloads</h5>
		<img src="/assets/images/offload/edd.png" alt="Easy Digital Downloads">
	</span>

	<span class="addon">
		<svg class="icon icon-wpml">
			<use xlink:href="#icon-wpml"></use>
		</svg>
		<h5>WPML</h5>
		<img src="/assets/images/offload/wpml.png" alt="WPML">
	</span>

	<span class="addon">
		<svg class="icon icon-puzzle">
			<use xlink:href="#icon-puzzle"></use>
		</svg>
		<h5>Enable Media Replace</h5>
		<img src="/assets/images/offload/media-replace.png" alt="Enable Media Replace">
	</span>

	<span class="addon">
		<svg class="icon icon-meta-slider">
			<use xlink:href="#icon-meta-slider"></use>
		</svg>
		<h5>Meta Slider</h5>
		<img src="/assets/images/offload/metaslider.png" alt="Meta Slider">
	</span>

	<a href="#0" class="btn btn--lg btn--danger">
		See Pricing
		<svg class="icon icon-chevron-right">
			<use xlink:href="#icon-chevron-right"></use>
		</svg>
	</a>

</section>


<?php
$lity = true;
?>

<?php include_once('parts/footer.php'); ?>