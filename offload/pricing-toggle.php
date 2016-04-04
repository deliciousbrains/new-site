<?php
	$nav = '';
	$page = 'offload';
	$subpage = 'pricing';
	include_once('../parts/header.php');
?>

<section class="page-header page-header--offload page-header--pricing">
	<?php include_once('../parts/nav-offload.php'); ?>
	<h1 class="page-title">Pricing &amp; Purchase</h1>
	<h2>How many media library items do you need?</h2>

	<div class="pricing__table">

		<span class="range-fill-wrap">
			<input type="range" min="0" max="100000" value="0" step="10000" class="range-fill" >
			<span class="range-fill-tooltip"></span>
		</span>

		<div class="pricing__plan__wrap">

			<div class="pricing__plan" data-items=1000000>
				<header class="pricing__plan__header">
					<h3>Plan 1</h3>
					<h4>$1000</h4>
				</header>
				<ul class="pricing__plan__features">
					<li>Up to <strong>1,000,000</strong> Media Library items across unlimited sites</li>
					<li>Whole Organization Supported</li>
					<li>Support for Multisite</li>
					<li>Media Files Addon</li>
					<li>Multisite Tools Addon</li>
					<li>CLI Addon</li>
					<li>1 Year of Software Updates & Priority Email Support</li>
				</ul>
				<footer class="pricing__plan__action">
					<a href="#0" class="btn btn--primary">Buy Now</a>
				</footer>
			</div>

			<div class="pricing__plan" data-items=500000>
				<header class="pricing__plan__header">
					<h3>500K</h3>
					<h4>$799</h4>
				</header>
				<ul class="pricing__plan__features">
					<li>Up to <strong>500,000</strong> Media Library items	across unlimited sites</li>
					<li>1 Year of Software Updates</li>
					<li>1 Year of PriorityExpert™ Email Support</li>
					<li>Assets Addon</li>
					<li>5 Compatibility Addons</li>
					<li>Multisite Supported</li>
				</ul>
				<footer class="pricing__plan__action">
					<a href="#0" class="btn btn--primary">Buy Now</a>
				</footer>
			</div>

			<div class="pricing__plan" data-items=100000>
				<header class="pricing__plan__header">
					<h3>Adamantium</h3>
					<h4>$399</h4>
				</header>
				<ul class="pricing__plan__features">
					<li>Up to <strong>100,000</strong> Media Library items	across unlimited sites</li>
					<li>Whole Organization Supported</li>
					<li>Support for Multisite</li>
					<li>Media Files Addon</li>
					<li>Multisite Tools Addon</li>
					<li>CLI Addon</li>
					<li>1 Year of Software Updates & Priority Email Support</li>
				</ul>
				<footer class="pricing__plan__action">
					<a href="#0" class="btn btn--primary">Buy Now</a>
				</footer>
			</div>

			<div class="pricing__plan" data-items=40000>
				<header class="pricing__plan__header">
					<h3>Platinum</h3>
					<h4>$249</h4>
				</header>
				<ul class="pricing__plan__features">
					<li>Up to <strong>40,000</strong> Media Library items across unlimited sites</li>
					<li>1 Year of Software Updates</li>
					<li>1 Year of PriorityExpert™ Email Support</li>
					<li>Assets Addon</li>
					<li>5 Compatibility Addons</li>
					<li>Multisite Supported</li>
				</ul>
				<footer class="pricing__plan__action">
					<a href="#0" class="btn btn--primary">Buy Now</a>
				</footer>
			</div>

			<div class="pricing__plan pricing__plan--popular" data-items=20000>
				<header class="pricing__plan__header">
					<h3>Gold</h3>
					<h4>$199</h4>
				</header>
				<ul class="pricing__plan__features">
					<li>Up to <strong>20,000</strong> Media Library items across unlimited sites</li>
					<li>1 Year of Software Updates</li>
					<li>1 Year of PriorityExpert™ Email Support</li>
					<li>Assets Addon</li>
					<li>5 Compatibility Addons</li>
					<li>Multisite Supported</li>
				</ul>
				<footer class="pricing__plan__action">
					<a href="#0" class="btn btn--danger">Buy Now</a>
				</footer>
			</div>

			<div class="pricing__plan" data-items=6000>
				<header class="pricing__plan__header">
					<h3>Silver</h3>
					<h4>$99</h4>
				</header>
				<ul class="pricing__plan__features">
					<li>Up to <strong>6,000</strong> Media Library items across unlimited sites</li>
					<li>1 Year of Software Updates</li>
					<li>1 Year of Standard Email Support</li>
					<li data-tooltip="The Silver license includes the WooCommerce, Easy Digital Downloads, and Meta Slider addons." data-tooltip-style="danger">3 Compatibility Addons</li>
				</ul>
				<footer class="pricing__plan__action">
					<a href="#" class="btn btn--primary">Buy Now</a>
				</footer>
			</div>

			<div class="pricing__plan" data-items=2000>
				<header class="pricing__plan__header">
					<h3>Bronze</h3>
					<h4>$59</h4>
				</header>
				<ul class="pricing__plan__features">
					<li>Up to <strong>2,000</strong>	Media Library items	across unlimited sites</li>
					<li>1 Year of Software Updates</li>
					<li>1 Year of Standard Email Support</li>
				</ul>
				<footer class="pricing__plan__action">
					<a href="#" class="btn btn--primary">Buy Now</a>
				</footer>
			</div>

		</div>

	</div>

</section>

<section class="pricing__guarantee">
	<h2>100% Money Back Guarantee</h2>
	<p>Your purchase is backed by our 100% No-Risk 60-Day Money Back Guarantee. If for any reason you are not happy with our product or service, simply let us know within 60 days of your purchase and we'll refund 100% of your money. No questions asked.</p>

	<p>We also guarantee that now is the best time to buy. If we do offer a lower price within 90 days of your purchase, let us know and we'll refund you the difference. There's really no point in waiting.</p>

	<svg class="icon icon-star">
		<use xlink:href="#icon-star"></use>
	</svg>
	<svg class="icon icon-star">
		<use xlink:href="#icon-star"></use>
	</svg>
</section>


<section class="pricing__faq">
	<h2>Frequently Asked Questions</h2>

	<div class="pricing__faq__section">
		<p class="faq__question">Do you offer refunds?</p>
		<p class="faq__answer">Yep. See our guarantee above for details.</p>

		<p class="faq__question">Will it work on a WordPress.com site? </p>
		<p class="faq__answer">No, WordPress.com does not enable you to install any plugins including ours.</p>

		<p class="faq__question">Will it work to offload Drupal, Joomla, or Expression Engine sites?</p>
		<p class="faq__answer">No, WP offload DB Pro only works with WordPress.</p>

		<p class="faq__question">Will it work on a WordPress.com site? </p>
		<p class="faq__answer">No, WordPress.com does not enable you to install any plugins including ours.</p>

		<p class="faq__question">Will it work to offload Drupal, Joomla, or Expression Engine sites?</p>
		<p class="faq__answer">No, WP offload DB Pro only works with WordPress.</p>
	</div>

	<div class="pricing__faq__section">
		<p class="faq__question">Do you offer refunds?</p>
		<p class="faq__answer">Yep. See our guarantee above for details.</p>

		<p class="faq__question">Will it work on a WordPress.com site? </p>
		<p class="faq__answer">No, WordPress.com does not enable you to install any plugins including ours.</p>

		<p class="faq__question">Will it work to offload Drupal, Joomla, or Expression Engine sites?</p>
		<p class="faq__answer">No, WP offload DB Pro only works with WordPress.</p>

		<p class="faq__question">Will it work on a WordPress.com site? </p>
		<p class="faq__answer">No, WordPress.com does not enable you to install any plugins including ours.</p>

		<p class="faq__question">Will it work to offload Drupal, Joomla, or Expression Engine sites?</p>
		<p class="faq__answer">No, WP offload DB Pro only works with WordPress.</p>
	</div>

	<div class="pricing__faq__actions">
		<a href="#" class="btn btn--primary btn--outline">Read More FAQs</a>
		<a href="#" class="btn btn--primary">Ask A Question</a>
	</div>
</section>


<section class="pricing__tweets">
	<div class="container">
		<h2>Seem a Little Pricey?</h2>
		<p class="pricing__tweets__intro">Some quick math... let's say you charge $50 per hour. WP offload DB Pro only needs to save you 4 hours and a Developer license has paid for itself! And it certainly will, just look what our customers are saying...</p>


		<div class="media media--tweet">
			<img class="media__img" src="https://pbs.twimg.com/profile_images/1341344778/n82408466_32367502_3013-300x201_200x200.jpg" alt="Pippin">
			<div class="media__body">
				<h5 class="tweet-by">Pippinsplugins @pippinsplugins</h5>
				<p class="tweet-body">“WP offload DB Pro might be the most amazing thing that has happened in a really long time in the #WordPress world: <a href="#">deliciousbrains.com/wp-offload-db-pro/</a></p>
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</div>
		</div>

		<div class="media media--tweet">
			<img class="media__img" src="https://pbs.twimg.com/profile_images/654234159897026560/CQFQRnjV_200x200.jpg" alt="Laura">
			<div class="media__body">
				<h5 class="tweet-by">Laura Kalbag @laurakalbag</h5>
				<p class="tweet-body">“How much time did we waste moving WordPress sites before WP offload DB Pro? (SO much time. It’s a great plugin.)”</p>
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</div>
		</div>

		<div class="media media--tweet">
			<img class="media__img" src="https://pbs.twimg.com/profile_images/658610827524743168/14zaaTht_200x200.jpg" alt="Jenny">
			<div class="media__body">
				<h5 class="tweet-by">Jenny Beaumont @jennybeaumont</h5>
				<p class="tweet-body">How did I ever survive without WP offload DB Pro before? #winning</p>
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</div>
		</div>

		<div class="media media--tweet">
			<img class="media__img" src="https://pbs.twimg.com/profile_images/689526007770972161/4cssCOaK_200x200.png" alt="Tom">
			<div class="media__body">
				<h5 class="tweet-by">Tom McFarlin @tommcfarlin</h5>
				<p class="tweet-body">Today, i give continued thanks to @dliciousbrains for offload db pro and the ease at which it offers migrations from dev-to-and-from-staging</p>
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</div>
		</div>

		<div class="media media--tweet">
			<img class="media__img" src="https://pbs.twimg.com/profile_images/1341344778/n82408466_32367502_3013-300x201_200x200.jpg" alt="Pippin">
			<div class="media__body">
				<h5 class="tweet-by">Pippinsplugins @pippinsplugins</h5>
				<p class="tweet-body">“WP offload DB Pro might be the most amazing thing that has happened in a really long time in the #WordPress world: <a href="#">deliciousbrains.com/wp-offload-db-pro/</a></p>
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</div>
		</div>

		<div class="media media--tweet">
			<img class="media__img" src="https://pbs.twimg.com/profile_images/654234159897026560/CQFQRnjV_200x200.jpg" alt="Laura">
			<div class="media__body">
				<h5 class="tweet-by">Laura Kalbag @laurakalbag</h5>
				<p class="tweet-body">“How much time did we waste moving WordPress sites before WP offload DB Pro? (SO much time. It’s a great plugin.)”</p>
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</div>
		</div>

		<div class="media media--tweet">
			<img class="media__img" src="https://pbs.twimg.com/profile_images/658610827524743168/14zaaTht_200x200.jpg" alt="Jenny">
			<div class="media__body">
				<h5 class="tweet-by">Jenny Beaumont @jennybeaumont</h5>
				<p class="tweet-body">How did I ever survive without WP offload DB Pro before? #winning</p>
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</div>
		</div>

		<div class="media media--tweet">
			<img class="media__img" src="https://pbs.twimg.com/profile_images/689526007770972161/4cssCOaK_200x200.png" alt="Tom">
			<div class="media__body">
				<h5 class="tweet-by">Tom McFarlin @tommcfarlin</h5>
				<p class="tweet-body">Today, i give continued thanks to @dliciousbrains for offload db pro and the ease at which it offers migrations from dev-to-and-from-staging</p>
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</div>
		</div>

		<div class="media media--tweet">
			<img class="media__img" src="https://pbs.twimg.com/profile_images/1341344778/n82408466_32367502_3013-300x201_200x200.jpg" alt="Pippin">
			<div class="media__body">
				<h5 class="tweet-by">Pippinsplugins @pippinsplugins</h5>
				<p class="tweet-body">“WP offload DB Pro might be the most amazing thing that has happened in a really long time in the #WordPress world: <a href="#">deliciousbrains.com/wp-offload-db-pro/</a></p>
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</div>
		</div>

	</div>
</section>


<?php
$pricing_toggle = true;
?>

<?php include_once('../parts/footer.php'); ?>