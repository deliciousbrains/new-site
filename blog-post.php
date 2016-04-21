<?php
	$nav = '';
	$page = 'blog';
	include_once('parts/header.php');
?>


<header class="page-header page-header--blog">
	<h1 class="page-title">Our Struggles to Stay Healthy While Working From Home</h1>
	<time datetime="2015-12-16">Dec. 16, 2015</time>
</header>


<article class="blog__post blog__post--single">

	<img src="/assets/images/blog-a-day-of-rest.jpg" alt="A Day Of Rest" class="blog__post__feature">

	<div class="blog__post__entry">
		<p>Recently in a Slack chat we discussed how we try and stay healthy while working from home. We all have different methods, some have been consistent and dedicated to staying fit and healthy, some not so much.</p>

		<p>We’ve all decided that we’re going to “air our laundry” with this post, whether it’s clean or not, and make a commitment to ourselves and each other to improve our physical and mental health in the coming year.</p>

		<p>Read on to see how each of our team feels about their health, the challenges they face keeping healthy while working from home, and what changes if any they intend to make in 2016.</p>

		<div class="media media--center">
			<img src="//www.gravatar.com/avatar/a3dbc76c987031a8b794e0afa08f0536?size=120" alt="Ash Gravatar" class="media__img greyscale">
			<div class="media__body">
				<h2>Ash</h2>
			</div>
		</div>

		<p>This year there has been big changes to my lifestyle. Not only is it the first time I’ve worked remotely, but it’s also my first year out of the military, after serving nearly 6 years in the Royal Air Force. I’ve literally gone from hardly ever being at home to being there the majority of my time, which is awesome, but not without its own challenges. Discipline and motivation being the biggest ones.

		<p>Keeping up with my fitness has been my biggest downfall this year. I’ve never really enjoyed cardio, who does?! In the military, fitness is very much ingrained into the lifestyle so you could never get away from it. In addition to squadron runs and circuits, I would hit the gym 4-5 times a week of an evening. Keeping fit was easy. There was always someone to motivate you and we were all very competitive. Now that I work from home the only person I have to compete with is myself and lack of motivation prevents me from doing so. I have had short periods of regular running, T25 and kettlebell workouts, but they’ve never lasted more than a couple of months. That needs to change!</p>

		<p>Drinking coffee became a bad habit of mine towards the start of the year. Regular headaches were common, which I put down to too much caffeine. I’ve since started drinking a lot more water and moved to decaf, and I feel a lot better for it.</p>

		<p>My goal for 2016 is to become more consistent in regards to exercise and run at least 20k per week. Granted, it’s not a massive target, but enough to keep my base fitness level up. If anyone else is up for the challenge, you can find me on Strava.</p>

	</div>

	<footer class="blog__post__author">
		<h3>About the Author</h3>
		<div class="media author">
			<img src="//www.gravatar.com/avatar/86319ea402d6a2c4da23eed3051ad424?size=120" class="media__img greyscale" alt="">
			<p class="media__body author__bio">Ian is always developing software, usually with PHP and JavaScript, loves wrangling SQL to squeeze out as much performance as possible, but also enjoys tinkering with and learning new concepts from new languages.</p>
			<div class="author__social about__person__networks">
				<a href="#0" class="author__social__icon">
					<svg class="icon icon-twitter">
						<use xlink:href="#icon-twitter"></use>
					</svg>
				</a>
				<a href="#0" class="author__social__icon">
					<svg class="icon icon-globe">
						<use xlink:href="#icon-globe"></use>
					</svg>
				</a>
			</div>
		</div>
	</footer>

	<aside class="well well--danger" id="subscribe">
		<h4 class="well__title">WordPress Development and Deployment Strategy</h4>
		<p class="well__description">Free pro tips on advanced WordPress development techniques and deployment strategies.</p>
		<form action="#" class="well__signup">
			<div class="form-group">
				<input type="email" id="email" placeholder="Enter your email address">
				<input type="submit" class="btn btn--danger-dark" value="Join">
			</div>
		</form>
	</aside>

</article>


<aside class="related">
	<header class="related__header">
		<h3 class="related__title">Related Posts</h3>
		<form action="#" class="related__search">
			<div class="form-group">
				<input type="text" id="related" placeholder="find related posts">
				<button type="submit" class="btn btn--danger">
					<svg class="icon icon-search">
						<use xlink:href="#icon-search"></use>
					</svg>
				</button>
			</div>
		</form>
	</header>

	<div class="related__posts">
		<a href="#0" class="related__post">
			<figure>
				<img src="/assets/images/blog-a-day-of-rest.jpg" alt="A Day of Rest">
				<figcaption>
					<h4>Hosting WordPress Yourself Part 8 – Complete Nginx Configuration</h4>
				</figcaption>
			</figure>
		</a>
		<a href="#0" class="related__post">
			<figure>
				<img src="/assets/images/blog-a-day-of-rest.jpg" alt="A Day of Rest">
				<figcaption>
					<h4>The Awkward Addon Pricing Model For WordPress Plugins</h4>
				</figcaption>
			</figure>
		</a>
		<a href="#0" class="related__post">
			<figure>
				<img src="/assets/images/blog-a-day-of-rest.jpg" alt="A Day of Rest">
				<figcaption>
					<h4>WP REST API Part 2.5: Using it in WordPress 4.4</h4>
				</figcaption>
			</figure>
		</a>
	</div>

</aside>


<?php include_once('parts/footer-blog.php'); ?>