<?php
	$nav = '-blank';
	$page = '';
	include_once('parts/header.php');
?>

<section class="welcome">

	<div class="welcome__wrap">

		<div class="welcome__brand">
			<h1 class="welcome__brand__message">
				<svg class="icon icon-logo">
					<use xlink:href="#icon-logo"></use>
				</svg>
				Hi. We're Delicious Brains. <br>We make super awesome <br>plugins for WordPress.
			</h1>
		</div>

		<div class="welcome__products">
			<div class="welcome__products__content">

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
					<div class="welcome__product__reviews">
						<div class="owl-carousel">
							<p class="item">&rdquo;WP-Migrate-DB-Pro is the best thing to ever happen to #WordPress devs&ldquo;</p>
							<p class="item">&rdquo;WP-Migrate-DB-Pro is the best thing to ever happen to #WordPress devs&ldquo;</p>
							<p class="item">&rdquo;WP-Migrate-DB-Pro is the best thing to ever happen to #WordPress devs&ldquo;</p>
						</div>
					</div>
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
					<div class="welcome__product__reviews">
						<div class="owl-carousel">
							<p class="item">&rdquo;What a perfect little plugin, I really enjoy when I don’t have to write something from scratch. Works just as intended, and friendly support to boot.&ldquo;</p>
							<p class="item">&rdquo;What a perfect little plugin, I really enjoy when I don’t have to write something from scratch. Works just as intended, and friendly support to boot.&ldquo;</p>
							<p class="item">&rdquo;What a perfect little plugin, I really enjoy when I don’t have to write something from scratch. Works just as intended, and friendly support to boot.&ldquo;</p>
							<p class="item">&rdquo;What a perfect little plugin, I really enjoy when I don’t have to write something from scratch. Works just as intended, and friendly support to boot.&ldquo;</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</section>


<?php include_once('parts/footer.php'); ?>