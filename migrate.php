<?php
	$nav = '';
	$page = 'migrate';
	$subpage = '';
	include_once('parts/header.php');
?>


<header class="plugin-intro plugin-intro--migrate">

	<?php include_once('parts/nav-migrate.php'); ?>
	<div class="plugin-intro__content">

		<a href="https://www.youtube.com/watch?v=fHFcH4bCzmU" class="plugin-intro__play" data-lity>
			<svg class="icon icon-play">
				<use xlink:href="#icon-play"></use>
			</svg>
		</a>

		<h1>WP Migrate DB Pro</h1>
		<h2>Migration can be a beautiful thing</h2>
		<h3>Copy your database from one WordPress install to another with one click in your dashboard</h3>

		<div class="plugin-tweets">
			<div class="item">
				<div class="media media--tweet">
					<img class="media__img" src="https://pbs.twimg.com/profile_images/1341344778/n82408466_32367502_3013-300x201_200x200.jpg" alt="Pippin">
					<div class="media__body">
						<h5 class="tweet-by">Pippinsplugins @pippinsplugins</h5>
						<p class="tweet-body">“WP Migrate DB Pro might be the most amazing thing that has happened in a really long time in the #WordPress world: <a href="#">deliciousbrains.com/wp-migrate-db-pro/</a> …”</p>
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


<section class="container container--center plugin-features">
	<div class="left-half">
		<h3>Copy your database from one WordPress install to another with one click in your dashboard</h3>
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
	<figure class="figure-right">
		<img src="/assets/images/product-fpo.jpg" alt="Product" >
	</figure>

</section>


<section class="how-it-works">

	<div class="container">

		<h2>How It Works</h2>

		<div class="accordion">

			<?php
				$open = '';
				// for WordPress
				//if ( ! wp_is_mobile() ) $open = 'open';
			?>

			<h3 class="accordion__title <?php echo $open; ?>">Push and Pull your databases</h3>
			<div class="accordion__content <?php echo $open; ?>" data-image="/assets/images/how-it-works-1.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
				<img src="/assets/images/how-it-works-1.jpg" alt="Push and Pull your databases">
			</div>

			<h3 class="accordion__title">Find & replace that handles serialized data</h3>
			<div class="accordion__content" data-image="/assets/images/product-fpo.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
				<img src="/assets/images/product-fpo.jpg" alt="Find & replace that handles serialized data">
			</div>

			<h3 class="accordion__title">Backup your database before replacing it</h3>
			<div class="accordion__content" data-image="/assets/images/how-it-works-1.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
				<img src="/assets/images/how-it-works-1.jpg" alt="Push and Pull your databases">
			</div>

			<h3 class="accordion__title">Take control of your migration and follow its progress</h3>
			<div class="accordion__content" data-image="/assets/images/product-fpo.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
				<img src="/assets/images/product-fpo.jpg" alt="Find & replace that handles serialized data">
			</div>

			<h3 class="accordion__title">Media Files Addon</h3>
			<div class="accordion__content" data-image="/assets/images/product-fpo.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
				<img src="/assets/images/product-fpo.jpg" alt="Find & replace that handles serialized data">
			</div>

			<h3 class="accordion__title">CLI Addon</h3>
			<div class="accordion__content" data-image="/assets/images/product-fpo.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
				<img src="/assets/images/product-fpo.jpg" alt="Find & replace that handles serialized data">
			</div>

			<h3 class="accordion__title">Another Addon</h3>
			<div class="accordion__content" data-image="/assets/images/product-fpo.jpg">
				<p>Let's say you're developing locally but need the latest data from the live database. With WP Migrate DB Pro installed on both sites, you can simply pull the live database down and replace your local database (even if you local database isn't publicly accessible). Once your changes are ready for the staging site, you can push your local database up and replace your staging database. How's that for a workflow?</p>
				<img src="/assets/images/product-fpo.jpg" alt="Find & replace that handles serialized data">
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


<section class="features" id="features">
	<h2>Features</h2>

	<div class="feature">
		<span class="icon__wrap">
			<svg class="icon icon-checkmark-round">
				<use xlink:href="#icon-checkmark-round"></use>
			</svg>
		</span>
		<p class="feature__title">Export your database</p>
		<p>Save an SQL file of your database to your computer with URLs replaced.</p>
	</div>
	<div class="feature">
		<span class="icon__wrap">
			<svg class="icon icon-navicon">
				<use xlink:href="#icon-navicon"></use>
			</svg>
		</span>
		<p class="feature__title">Select tables to migrate</p>
		<p>Migrate all tables for the current install or select exactly which tables to migrate.</p>
	</div>
	<div class="feature">
		<span class="icon__wrap">
			<svg class="icon icon-ios-search-strong">
				<use xlink:href="#icon-ios-search-strong"></use>
			</svg>
		</span>
		<p class="feature__title">Filter out post types</p>
		<p>Select which post types you don’t want copied in migrations.</p>
	</div>
	<div class="feature">
		<span class="icon__wrap">
			<svg class="icon icon-close">
				<use xlink:href="#icon-close"></use>
			</svg>
		</span>
		<p class="feature__title">Exclude useless data</p>
		<p>Prevent SPAM comments and transients from being copied.</p>
	</div>
	<div class="feature">
		<span class="icon__wrap">
			<svg class="icon icon-wrench">
				<use xlink:href="#icon-wrench"></use>
			</svg>
		</span>
		<p class="feature__title">Migration profiles</p>
		<p>Just before you run a migration, save all the settings to reuse next time.</p>
	</div>
	<div class="feature">
		<span class="icon__wrap">
			<svg class="icon icon-happy-outline">
				<use xlink:href="#icon-happy-outline"></use>
			</svg>
		</span>
		<p class="feature__title">Phenomenal email support</p>
		<p>We take pride in delivering exceptional customer support.</p>
	</div>
	<div class="feature">
		<span class="icon__wrap">
			<svg class="icon icon-speedometer">
				<use xlink:href="#icon-speedometer"></use>
			</svg>
		</span>
		<p class="feature__title">Stress tested on huge databases</p>
		<p>We test migrating tables several GBs in size on shared hosting servers.</p>
	</div>
	<div class="feature">
		<span class="icon__wrap">
			<svg class="icon icon-ios-locked">
				<use xlink:href="#icon-ios-locked"></use>
			</svg>
		</span>
		<p class="feature__title">Solid security</p>
		<p>Our code is regularly audited by a WordPress security expert.</p>
	</div>

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