<?php
	$page = ( isset($page) ) ? $page : '';
	$btn_class = ( $page == 'migrate' ) ? 'btn--info' : 'btn--outline btn--primary';
	$btn_class = ( $page == 'offload' ) ? 'btn--success' : $btn_class;
?>

<section class="testimonials">
	<div class="container">

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

		<div class="owl-carousel">

			<div class="item">

				<blockquote>

					<p>
						<span class="testimonials__quote testimonials__quote--left">
							<svg class="icon icon-left-quote">
								<use xlink:href="#icon-left-quote"></use>
							</svg>
						</span>
						Not only does WP Migrate DB Pro fill a glaring hole in my WordPress development. The support staff go out of their way to make sure that their plugin works, even when you are the one that broke it. Not just an essential plugin, an excellent company to buy from.
						<span class="testimonials__quote testimonials__quote--right">
							<svg class="icon icon-right-quote">
								<use xlink:href="#icon-right-quote"></use>
							</svg>
						</span>
					</p>

					<cite>- Trevor Green<br><a href="#">[ Agreenweb - @trevogre ]</a></cite>

				</blockquote>
			</div>

			<div class="item">

				<blockquote>
					<p>
						<span class="testimonials__quote testimonials__quote--left">
							<svg class="icon icon-left-quote">
								<use xlink:href="#icon-left-quote"></use>
							</svg>
						</span>
						Not only does WP Migrate DB Pro fill a glaring hole in my WordPress development. The support staff go out of their way to make sure that their plugin works, even when you are the one that broke it. Not just an essential plugin, an excellent company to buy from.
						<span class="testimonials__quote testimonials__quote--right">
							<svg class="icon icon-right-quote">
								<use xlink:href="#icon-right-quote"></use>
							</svg>
						</span>
					</p>

					<cite>- Trevor Green<br><a href="#">[ Agreenweb - @trevogre ]</a></cite>
				</blockquote>
			</div>

			<div class="item">

				<blockquote>
					<p>
						<span class="testimonials__quote testimonials__quote--left">
							<svg class="icon icon-left-quote">
								<use xlink:href="#icon-left-quote"></use>
							</svg>
						</span>
						Not only does WP Migrate DB Pro fill a glaring hole in my WordPress development. The support staff go out of their way to make sure that their plugin works, even when you are the one that broke it. Not just an essential plugin, an excellent company to buy from.
						<span class="testimonials__quote testimonials__quote--right">
							<svg class="icon icon-right-quote">
								<use xlink:href="#icon-right-quote"></use>
							</svg>
						</span>
					</p>

					<cite>- Trevor Green<br><a href="#">[ Agreenweb - @trevogre ]</a></cite>
				</blockquote>
			</div>

		</div>

		<a href="/migrate.php" class="btn <?php echo $btn_class; ?>">Get Plugin</a>

	</div>

</section>
