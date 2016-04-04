<?php
	$klass = '';
	if ( $page == 'migrate' || $page == 'offload' ) {
		$klass = 'site__nav--faded';
	}
?>

<header class="site__header">

	<div class="site__mobile-links">
		<a href="/">
			<svg class="icon icon-logo">
				<use xlink:href="#icon-logo"></use>
			</svg>
		</a>

		<a href="/account.php">
			Account
		</a>
	</div>

	<nav class="site__nav <?php echo $klass; ?>" role="navigation" id="main-nav">
		<ul class="menu">
			<li class="menu__item <?php echo ( $page == 'migrate' ) ? 'current-page-item' : ''; ?>">
				<a href="/migrate.php">
					WP Migrate DB Pro
				</a>
				<span class="nav-arrow">
					<svg class="icon icon-chevron-down">
						<use xlink:href="#icon-chevron-down"></use>
					</svg>
				</span>
				<ul class="sub-menu">
					<li class="menu__item">
						<a href="/migrate.php">
							Features
						</a>
					</li>
					<li class="menu__item">
						<a href="#0">
							Addons
						</a>
					</li>
					<li class="menu__item">
						<a href="/migrate/pricing.php">
							Pricing &amp; Purchase
						</a>
					</li>
					<li class="menu__item">
						<a href="/migrate/documentation.php">
							Documentation
						</a>
					</li>
					<li class="menu__item">
						<a href="/migrate/faqs.php">
							FAQs
						</a>
					</li>
					<li class="menu__item">
						<a href="/migrate/buzz.php">
							Buzz
						</a>
					</li>
				</ul>
			</li>
			<li class="menu__item <?php echo ( $page == 'offload' ) ? 'current-page-item' : ''; ?>">
				<a href="/offload.php">
					WP Offload S3
				</a>
				<span class="nav-arrow">
					<svg class="icon icon-chevron-down">
						<use xlink:href="#icon-chevron-down"></use>
					</svg>
				</span>
				<ul class="sub-menu">
					<li class="menu__item">
						<a href="/offload.php">
							Features
						</a>
					</li>
					<li class="menu__item">
						<a href="#0">
							Addons
						</a>
					</li>
					<li class="menu__item">
						<a href="/offload/pricing.php">
							Pricing &amp; Purchase
						</a>
					</li>
					<li class="menu__item">
						<a href="/offload/documentation.php">
							Documentation
						</a>
					</li>
					<li class="menu__item">
						<a href="/offload/faqs.php">
							FAQs
						</a>
					</li>
					<li class="menu__item">
						<a href="/offload/buzz.php">
							Buzz
						</a>
					</li>
				</ul>
			</li>
			<li class="menu__item menu__item--logo">
				<a href="/">
					<svg class="icon icon-logo">
						<use xlink:href="#icon-logo"></use>
					</svg>
				</a>
			</li>
			<li class="menu__item <?php echo ( $page == 'about' ) ? 'current-page-item' : ''; ?>">
				<a href="/about.php">
					About
				</a>
			</li>
			<li class="menu__item <?php echo ( $page == 'blog' ) ? 'current-page-item' : ''; ?>">
				<a href="/blog.php">
					Blog
				</a>
			</li>
			<li class="menu__item <?php echo ( $page == 'contact' ) ? 'current-page-item' : ''; ?>">
				<a href="/contact.php">
					Contact
				</a>
			</li>
			<li class="menu__item menu__item--account <?php echo ( $page == 'account' ) ? 'current-page-item' : ''; ?>">
				<a href="/account.php">
					Account
				</a>
			</li>
		</ul>
	</nav>

</header>