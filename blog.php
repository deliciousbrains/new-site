<?php
	$nav = '';
	$page = 'blog';
	include_once('parts/header.php');
?>


<header class="page-header">
	<h1 class="page-title">Blog</h1>
</header>

<nav class="blog__nav">

	<ul>
		<li class="label">View by</li>
		<li><a href="#">Most Recent</a></li>
		<li class="active"><a href="#">Product News</a></li>
		<li><a href="#">Series</a></li>
	</ul>

	<form action="#" class="blog__search">
		<div class="form-group">
			<input type="email" id="email" placeholder="Search for a blog post">
			<input type="submit" class="btn btn--danger" value="Search">
		</div>
	</form>

</nav>

<section class="blog__list">


	<article class="blog__post">

		<a href="/blog-post.php" class="blog__post__feature__link">
			<img src="/assets/images/blog-a-day-of-rest.jpg" alt="A Day Of Rest" class="blog__post__feature">
		</a>

		<div class="blog__post__body">
			<h2 class="blog__post__title">
				<a href="/blog-post.php">Our Struggles to Stay Healthy While Working From Home</a>
			</h2>
			<div class="blog__post__excerpt">
				<p>Recently in a Slack chat we discussed how we try and stay healthy while working from home. We all have different methods, some have been consistent and dedicated to staying fit and healthy, some not so much.</p>

				<p>We’ve all decided that we’re going to “air our laundry” with this post, whether it’s clean or not, and make a commitment to ourselves and each other to improve our physical and mental health in the coming year.</p>
			</div>
			<time class="blog__post__date" datetime="2015-12-16">
				Dec. 16, 2015
			</time>
		</div>

		<footer class="blog__post__meta">
			<img src="//www.gravatar.com/avatar/e538ca4cb34839d4e5e3ccf20c37c67b?size=120" class=" greyscale" alt="">
			<span class="blog__post__comment-count">3</span>
		</footer>
	</article>


	<article class="blog__post">
		<div class="blog__post__body">
			<h2 class="blog__post__title">
				<a href="/blog-post.php">HTTP/2, HTTPS, Let’s Encrypt and WordPress</a>
			</h2>
			<div class="blog__post__excerpt">
				<p>TL;DR — HTTP/2 is awesome, but requires HTTPS, which is hard to setup. Let’s Encrypt and WordPress can make HTTPS setup simple and help achieve a faster web sooner.</p>
			</div>
			<time class="blog__post__date" datetime="2015-12-08">
				Dec. 8, 2015
			</time>
		</div>
		<footer class="blog__post__meta">
			<img src="//www.gravatar.com/avatar/86319ea402d6a2c4da23eed3051ad424?size=120" class=" greyscale" alt="">
			<span class="blog__post__comment-count">33</span>
		</footer>
	</article>


	<article class="blog__post">
		<div class="blog__post__body">
			<h2 class="blog__post__title">
				<a href="/blog-post.php">WP REST API Part 2.5: Using it in WordPress 4.4</a>
			</h2>
			<div class="blog__post__excerpt">
				<p>WordPress 4.4 is set to be released in the next couple of weeks, and is bringing with it the first half of the REST API integration. This is pretty exciting news for WordPress theme and plugin developers&hellip;</p>
			</div>
			<time class="blog__post__date" datetime="2015-12-01">
				Dec. 1, 2015
			</time>
		</div>
		<footer class="blog__post__meta">
			<img src="//www.gravatar.com/avatar/e538ca4cb34839d4e5e3ccf20c37c67b?size=120" class=" greyscale" alt="">
			<span class="blog__post__comment-count">3</span>
		</footer>
	</article>


	<article class="blog__post">
		<div class="blog__post__body">
			<h2 class="blog__post__title">
				<a href="/blog-post.php">Hosting WordPress Yourself Part 8 – Complete Nginx Configuration</a>
			</h2>
			<div class="blog__post__excerpt">
				<p>In the previous post of this series Hosting WordPress Yourself, I covered security enhancements, automatic server updates, WooCommerce caching and automated server tasks. In this final&hellip;</p>
			</div>
			<time class="blog__post__date" datetime="2015-11-24">
				Nov. 24, 2015
			</time>
		</div>
		<footer class="blog__post__meta">
			<img src="//www.gravatar.com/avatar/86319ea402d6a2c4da23eed3051ad424?size=120" class=" greyscale" alt="">
			<span class="blog__post__comment-count">1</span>
		</footer>
	</article>


</section>



<nav class="pagination pagination--blog">
	<a href="#" class="pagination__prev">
		<svg class="icon icon-arrow-left">
			<use xlink:href="#icon-arrow-left"></use>
		</svg>
		<span>Previous Page</span>
	</a>

	<div class="pagination__pages">
		<a href="#" class="pagination__page active">1</a>
		<a href="#" class="pagination__page">2</a>
		<a href="#" class="pagination__page">3</a>
	</div>

	<a href="#" class="pagination__next">
		<span>Next Page</span>
		<svg class="icon icon-arrow-right">
			<use xlink:href="#icon-arrow-right"></use>
		</svg>
	</a>
</nav>

<?php include_once('parts/footer-blog.php'); ?>