<?php
/**
 * @package WordPress
 * @subpackage 
 */

get_header(); ?>

	<div class="content">
	
		<div class="wide banner">
			<section class="container_12">
				<article class="grid_12">
					<h1>Death Star</h1>
					<p>That's no moon... that's a space station.</p>
				</article>
			</section>	
		</div>

<!-- grid reset -->	
		<div class="full container_12">
			<section class="masonry gallery clearfix">
			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
				<article class="sm grid_3">
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<figure>
							<?php the_content(''); ?>
						</figure>
					
						<h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<!--div class="byline">
							<span class="time"><?php // the_time('F jS, Y') ?></span> 
							<span class="name"> <?php // the_author() ?></span> 
						</div>
		
						<!--div class="entry">
							<?php // the_content('Read the rest of this entry &raquo;'); ?>
						</div-->
		
						<!--p class="post_meta"><?php // the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php // the_category(', ') ?> | <?php // edit_post_link('Edit', '', ' | '); ?>  <?php // comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p -->
					</div>
				</article>
				<?php endwhile; ?>

				<?php get_template_part('parts/pagination'); ?>

			<?php else : ?>

				<h3>Not Found</h3>
				<p>Sorry, but you are looking for something that isn't here.</p>
				<?php get_search_form(); ?>

			<?php endif; ?>
			</section>
		</div>

<!-- grid reset -->	
		<div class="full container_12">
			
			<!-- gallery: masonry -->	
			<section class="masonry gallery clearfix">
				<article class="md grid_6">
					<figure>
						<img src="http://media-cdn7.pinterest.com/upload/6262886951887235_1bR2QjvW_f.jpg">
					</figure>	
					<h3>Put a bird on it </h3>
				</article>
				
				<article class="sm grid_3">
					<figure>
						<img src="http://media-cdn7.pinterest.com/upload/1829656068665138_TdkUbI9E_f.jpg">
					</figure>	
					<h4>You probably haven't heard</h4>
				</article>
				
				<article class="sm grid_3">
					<figure>
						<img src="http://media-cdn8.pinterest.com/upload/1829656068665126_InKTGTCz_f.jpg">
					</figure>	
					<h4>Fugiat brooklyn helvetica </h4>
				</article>
				
				<article class="sm grid_3">
					<figure>
						<img src="http://media-cdn9.pinterest.com/upload/1829656068642645_8psHZmNz_f.jpg">
					</figure>
					<h4>Gluten-free ethical </h4>
				</article>
				
				<article class="sm grid_3">
					<figure>
						<img src="http://media-cdn9.pinterest.com/upload/1829656068642645_8psHZmNz_f.jpg">
					</figure>
					<h4>Mustache sed master cleanse </h4>
				</article>
				
			</section>
			
			<!-- gallery: horizontal x 3 -->
			<section class="horizontal gallery clearfix">
				<article class="sm grid_4">
					<figure>
						<img src="http://media-cdn7.pinterest.com/upload/1829656068665138_TdkUbI9E_f.jpg">
					</figure>	
					<h3>Put a bird on it </h3>
				</article>
				
				<article class="sm grid_4">
					<figure>
						<img src="http://media-cdn8.pinterest.com/upload/1829656068665126_InKTGTCz_f.jpg">
					</figure>	
					<h3>Mustache sed master cleanse</h3>
				</article>
				
				<article class="sm grid_4">
					<figure>
						<img src="http://media-cdn9.pinterest.com/upload/1829656068642645_8psHZmNz_f.jpg">
					</figure>
					<h3>Gluten-free ethical</h3>
				</article>
				
			</section>
		</div>
		
<!-- grid reset -->		
		<div class="wide">
			<div class="full container_12">
				
				<!-- gallery: horizontal x3 -->
				<section class="horizontal gallery clearfix">
					<article class="sm grid_4">
						<figure>
							<img src="http://media-cdn7.pinterest.com/upload/1829656068665138_TdkUbI9E_f.jpg">
						</figure>	
						<h3>Death Star 1</h3>
					</article>
					
					<article class="sm grid_4">
						<figure>
							<img src="http://media-cdn8.pinterest.com/upload/1829656068665126_InKTGTCz_f.jpg">
						</figure>	
						<h3>Death Star 3</h3>
					</article>
					
					<article class="sm grid_4">
						<figure>
							<img src="http://media-cdn9.pinterest.com/upload/1829656068642645_8psHZmNz_f.jpg">
						</figure>
						<h3>Death Star 2</h3>
					</article>
					
				</section>
			</div>
		</div>
			
<!-- grid reset -->				
		<div class="full container_12">
		
			<!-- gallery: horizontal x4 -->	
			<section class="horizontal gallery clearfix">
				<article class="sm grid_3">
					<figure>
						<img src="http://media-cdn7.pinterest.com/upload/1829656068665138_TdkUbI9E_f.jpg">
					</figure>	
					<h3>Death Star 1</h3>
				</article>
				<article class="sm grid_3">
					<figure>
						<img src="http://media-cdn8.pinterest.com/upload/1829656068665126_InKTGTCz_f.jpg">
					</figure>	
					<h3>Death Star 3</h3>
				</article>
				<article class="sm grid_3">
					<figure>
						<img src="http://media-cdn9.pinterest.com/upload/1829656068642645_8psHZmNz_f.jpg">
					</figure>
					<h3>Death Star 2</h3>
				</article>
				<article class="sm grid_3">
					<figure>
						<img src="http://media-cdn7.pinterest.com/upload/1829656068665138_TdkUbI9E_f.jpg">
					</figure>	
					<h3>Death Star 1</h3>
				</article>
			</section>
			
			<!-- single post with Widget: Curator -->	
			<section class="single clearfix">
				<article class="ckearfix">
					<figure class="main grid_6">
						<img src="http://media-cdn9.pinterest.com/upload/1829656068642641_EHqNlY26_b.jpg" />
					</figure>
					<div class="copy grid_6">
						<h2>Title</h2>
						<cite>Name</cite>
						<blockquote>
							<p>Aliquip occupy portland tumblr fixie. Portland commodo umami etsy. Biodiesel stumptown deserunt, iphone post-ironic thundercats food truck laborum pariatur selvage twee banksy synth placeat mixtape. Nostrud sustainable occupy, fingerstache officia truffaut ea irony ut helvetica lo-fi narwhal sartorial.</p>
						</blockquote>
					</div>
					<div class="share grid_6">
						<ul>
							<li>
								<div class="fb-like" data-href="https://www.facebook.com/pages/Mister-Machine/152220894823377" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
							</li>
							<li>
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="mistermachine.com" data-text="mistermachine &gt; 2" data-via="designincode" data-hashtags="mistermachine">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</li>
							<li><a href="http://pinterest.com/pin/create/button/" class="pin-it-button" count-layout="horizontal">Pin It</a>
	<script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script></li>
							<li><g:plusone size="medium"></g:plusone></li>
						</ul>
					</div>
					<div class="share grid_6">
						<button>Buy Now</button>
					</div>
				</article>
				<div class="clear"></div>
				<article class="curator box round">
					<div class="mug grid_2">
						<img src="http://media-cdn3.pinterest.com/upload/1829656068642559_a6vqp4xh_f.jpg">
					</div>
					<div class="grid_8">
						<blockquote>
							<h4>The Curator</h4>
							<p>Odio bushwick adipisicing yr +1. Duis master cleanse messenger bag nesciunt fanny pack esse, food truck ad squid post-ironic. Veniam carles brunch, semiotics occaecat pinterest small batch forage post-ironic irure non quinoa aliqua blog farm-to-table. Mlkshk put a bird on it next level art party exercitation mollit est echo park.</p>
						</blockquote>	
					</div>
				</article>
			</section>
			
			<!-- single post w/ gallery -->
			<section class="single clearfix">
				
				<article>
					<div class="grid_1">
						<!-- Part: slideshow: vertical mini -->
						<ul class="slides">
							<li><a href="">
								<img src="http://media-cdn7.pinterest.com/upload/1829656068665138_TdkUbI9E_f.jpg">
							</a></li>
							<li><a href="">
								<img src="http://media-cdn7.pinterest.com/upload/1829656068665138_TdkUbI9E_f.jpg">
							</a></li>
							<li><a href="">
								<img src="http://media-cdn7.pinterest.com/upload/1829656068665138_TdkUbI9E_f.jpg">
							</a></li>
							<li><a href="">
								<img src="http://media-cdn7.pinterest.com/upload/1829656068665138_TdkUbI9E_f.jpg">
							</a></li>
						</ul>
					</div>
					
					<!-- main image -->
					<div class="grid_5">
						<figure class="main">
							<img src="http://media-cdn9.pinterest.com/upload/1829656068642641_EHqNlY26_b.jpg" />
						</figure>
						
						<!-- Part: Share -->
						<div class="share grid_5">
							<ul>
								<li>
									<div class="fb-like" data-href="https://www.facebook.com/pages/Mister-Machine/152220894823377" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
								</li>
								<li>
									<a href="https://twitter.com/share" class="twitter-share-button" data-url="mistermachine.com" data-text="mistermachine &gt; 2" data-via="designincode" data-hashtags="mistermachine">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								</li>
								<li><a href="http://pinterest.com/pin/create/button/" class="pin-it-button" count-layout="horizontal">Pin It</a>
		<script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script></li>
								<li><g:plusone size="medium"></g:plusone></li>
							</ul>
						</div>
					</div>
					
					<!-- Part: Copy -->
					<div class="copy grid_6">
						<h2>Title</h2>
						<cite>Name</cite>
						<blockquote>
							<p>Aliquip occupy portland tumblr fixie. Portland commodo umami etsy. Biodiesel stumptown deserunt, iphone post-ironic thundercats food truck laborum pariatur selvage twee banksy synth placeat mixtape. Nostrud sustainable occupy, fingerstache officia truffaut ea irony ut helvetica lo-fi narwhal sartorial.</p>
						</blockquote>
					</div>
					
				</article>
				
				<!-- Widget: Curator -->
				<article class="curator box round">
					<div>
						<blockquote>
							<h4>The Curator</h4>
							<p>Odio bushwick adipisicing yr +1. Duis master cleanse messenger bag nesciunt fanny pack esse, food truck ad squid post-ironic. Veniam carles brunch, semiotics occaecat pinterest small batch forage post-ironic irure non quinoa aliqua blog farm-to-table. Mlkshk put a bird on it next level art party exercitation mollit est echo park.</p>
						</blockquote>	
					</div>
				</article>
			</section>
	
	<!--div class="sidebar aside grid_3">
		<?php // get_sidebar(); ?>
	</div-->
</div>
<?php get_footer(); ?>