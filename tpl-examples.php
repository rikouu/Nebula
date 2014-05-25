<?php
/**
 * Template Name: Examples
 * @TODO: Delete this file before launching the site!
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="sixteen columns">
			<? the_breadcrumb(); ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						
						<?php wp_link_pages( array( 'before' => '' . 'Pages:', 'after' => '' ) ); ?>
						<?php edit_post_link( 'Edit', '<p class="edit-link">', '</p>' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				<?php //comments_template( '', true ); ?>
			<?php endwhile; ?>
		</div><!--/columns-->
	</div><!--/row-->
</div><!--/container-->


<div class="container">
	<div class="row">
		<div class="sixteen columns">
			<hr/>
				<h2>Basic WP Query</h2>
				<h5><a href="http://codex.wordpress.org/Function_Reference/query_posts" target="_blank">Documentation &raquo;</a></h5>
				<p>This is a basic Wordpress query posts, but also shows how Gumby columns can be integrated into the logic. This also shows the Wordpress plugin WP-PageNavi.</p>
				<div class="container">
					<div class="row">
					    <?php $count = 0; ?>
					    <?php query_posts( array( 'category_name' => 'Examples', 'showposts' => 4, 'paged' => get_query_var('paged') ) ); ?>
					        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					            <?php if ( $count%2 == 0 && $count != 0 ) : ?>
					                </div><!--/row-->
					                <div class="row">
					            <?php endif; ?>
					                     
					            <div class="eight columns">
							        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							            <h5 class="news-title entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
							            <span class="newsdate"><em><a href="#"><?php the_time('F j, Y'); ?></a></em></span>
							            <div class="entry-content">
							                <?php echo nebula_the_excerpt('Read More &raquo;', 35, 1); ?>
							                <p><?php edit_post_link('Edit'); ?></p>
							            </div><!-- .entry-content -->
							        </article><!-- #post-## -->
							    </div><!--/columns-->
					                         
					            <?php $count++; ?>
					                         
					        <?php endwhile; ?>
					        <?php wp_pagenavi(); ?>
					    <?php wp_reset_query(); ?>
					</div><!--/row-->
					
				</div><!--/container-->
			<hr/>
		</div><!--/columns-->
	</div><!--/row-->
</div><!--/container-->


<div class="container">
	<div class="row">
		<div class="sixteen columns">
				<h2>Google Map Iframe</h2>
				<h5><a href="https://developers.google.com/maps/documentation/embed/guide" target="_blank">Documentation &raquo;</a></h5>
				<p>This is an iframe integration of Google Maps. Not as flexible as the JavaScript API, but very easy to use.</p>
				<iframe
					width="100%"
					height="250"
					frameborder="0" style="border:0"
					src="https://www.google.com/maps/embed/v1/place
					?key=AIzaSyArNNYFkCtWuMJOKuiqknvcBCyfoogDy3E
					&q=Pinckney+Hugo+Group
					&zoom=14
					&maptype=roadmap">
				</iframe>
			<hr/>
		</div><!--/columns-->
	</div><!--/row-->
</div><!--/container-->



<div class="container">
	<div class="row">
		<div class="sixteen columns">
				<h2>Google Map API v3</h2>
				<h5><a href="https://developers.google.com/maps/documentation/javascript/tutorial" target="_blank">Documentation &raquo;</a></h5>
				<p>This is the full integration of Google Maps using the API v3.</p>
				
			<hr/>
		</div><!--/columns-->
	</div><!--/row-->
</div><!--/container-->




<div class="container">
	<div class="row">
		<div class="sixteen columns">
				<h2>Youtube Embed</h2>
				<h5><a href="https://developers.google.com/youtube/player_parameters" target="_blank">Documentation &raquo;</a></h5>
				<p>This shows how a Youtube video can be embedded. This iframe integration has corresponding scripts in the footer to track interactions with this video in Google Analytics. Using the Youtube Data API, we can pull information out of the video dynamically. The Gumby wrapper with the class "video" allows for fluid width videos, so it is best to wrap the iframe with that (along with the class of "youtube" (in this case), "vimeo", or "twitch"</p>
				<p><strong>Important:</strong> Make sure to include the query parameter of "enablejsapi=1" for tracking to work (The class "youtubeplayer" must also be present on the iframe element)! It is also recommended to use the query parameter of "wmode=transparent" too.</p>
				
				<div class="container">
					<div class="row">
						<div class="eight columns">
														
							<?php youtubeMeta('jtip7Gdcf0Q'); ?>
							
							<article class="youtube video">
								<iframe id="<?php echo $vidMeta['safetitle']; ?>" class="youtubeplayer" width="560" height="315" src="http://www.youtube.com/embed/<?php echo $vidMeta['id']; ?>?wmode=transparent&enablejsapi=1&origin=<?php echo $vidMeta['origin']; ?>" frameborder="0" allowfullscreen=""></iframe>
							</article>
														
							<br/>
							<div class="container">
								<div class="row">
									<div class="four columns">
										<a href="<?php echo $vidMeta['href']; ?>" target="_blank"><img src="http://i1.ytimg.com/vi/<?php echo $vidMeta['id']; ?>/hqdefault.jpg" width="100"/></a>
									</div><!--/columns-->
									<div class="twelve columns">
											<a href="<?php echo $vidMeta['href']; ?>" target="_blank"><?php echo $vidMeta['title']; ?></a> <span style="font-size: 12px;">(<?php echo $vidMeta['duration']; ?>)</span>
											<span style="display: block; font-size: 12px; line-height: 18px;">
												by <?php echo $vidMeta['author']; ?><br/>
												<?php echo $vidMeta['content']; ?>
											</span>
									</div><!--/columns-->
								</div><!--/row-->
							</div><!--/container-->
							
						</div><!--/columns-->
						<div class="eight columns">
							
							<?php youtubeMeta('fjh61K3hyY0'); ?>
							
							<article class="youtube video">
								<iframe id="<?php echo $vidMeta['safetitle']; ?>" class="youtubeplayer" width="560" height="315" src="http://www.youtube.com/embed/<?php echo $vidMeta['id']; ?>?wmode=transparent&enablejsapi=1&origin=<?php echo $vidMeta['origin']; ?>" frameborder="0" allowfullscreen=""></iframe>
							</article>
														
							<br/>
							<div class="container">
								<div class="row">
									<div class="four columns">
										<a href="<?php echo $vidMeta['href']; ?>" target="_blank"><img src="http://i1.ytimg.com/vi/<?php echo $vidMeta['id']; ?>/hqdefault.jpg" width="100"/></a>
									</div><!--/columns-->
									<div class="twelve columns">
											<a href="<?php echo $vidMeta['href']; ?>"><?php echo $vidMeta['title']; ?></a> <span style="font-size: 12px;">(<?php echo $vidMeta['duration']; ?>)</span>
											<span style="display: block; font-size: 12px; line-height: 18px;">
												by <?php echo $vidMeta['author']; ?><br/>
												<?php echo $vidMeta['content']; ?>
											</span>
									</div><!--/columns-->
								</div><!--/row-->
							</div><!--/container-->
							
						</div><!--/columns-->
					</div><!--/row-->
				</div><!--/container-->
				
				
				
				
				
			<hr/>
		</div><!--/columns-->
	</div><!--/row-->
</div><!--/container-->


<div class="container">
	<div class="row">
		<div class="sixteen columns">
				<h2>HTML5 Video</h2>
				<h5><a href="#" target="_blank">Documentation &raquo;</a></h5>
				<p>This is a local video embed that works cross-browser, and soon enough on iOS and mobile devices. File types and codecs will be described here as well.</p>
				
			<hr/>
		</div><!--/columns-->
	</div><!--/row-->
</div><!--/container-->



<div class="container">
	<div class="row">
		<div class="sixteen columns">
				<h2>CSS Browser Selector</h2>
				<h5><a href="#" target="_blank">Documentation &raquo;</a></h5>
				<p>Useful for debugging, but should only be enabled if feature detection (using Modernizr) will not work!</p>
				
			<hr/>
		</div><!--/columns-->
	</div><!--/row-->
</div><!--/container-->


<div class="container">
	<div class="row">
		<div class="sixteen columns">
				<h2>Retina Images</h2>
				<h5><a href="http://gumbyframework.com/docs/components/#!/retina-images" target="_blank">Documentation &raquo;</a></h5>
				<p>Useful for debugging, but should only be enabled if feature detection (using Modernizr) will not work!</p>
		</div><!--/columns-->
	</div><!--/row-->
	<div class="row">
		<div class="eight columns">
				<p>This image is only a standard-resolution.</p>
				<img src="<?php bloginfo('template_directory');?>/images/phg/welcome.jpg" />
		</div><!--/columns-->
		<div class="eight columns">
				<p>This image has a retina backup.</p>
				<img src="<?php bloginfo('template_directory');?>/images/phg/welcome.jpg" gumby-retina />
		</div><!--/columns-->
	</div><!--/row-->
	<div class="row">
		<div class="sixteen columns">
			<hr/>
		</div><!--/columns-->
	</div><!--/row-->
</div><!--/container-->


<div class="container socialcon">
	<div class="row">
		<div class="sixteen columns fb-like-box-con">
			<h2>Facebook Feed</h2>
			<h5><a href="#" target="_blank">Documentation &raquo;</a></h5>
			<p>This is an integrated Facebook feed from a page using the Wordpress plugin Custom Facebook Feed.</p>
			<div id="fbcon">
				<div class="fbhead">
					<p><a href="https://www.facebook.com/PinckneyHugo" target="_blank"><i class="icon-facebook"></i>Facebook</a></p>
				</div><!--/fbhead-->
				<div class="fbbody">
					<div class="container">
						<div class="fb-feed">
							<div class="row tweetcon">
								<div class="four columns">
									<div class="fbicon"><a href="https://www.facebook.com/PinckneyHugo" target="_blank"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-ash3/s160x160/64307_10150605580729671_377991150_a.jpg"/></a></div>
								</div><!--/columns-->
								<div class="twelve columns">
									<div class="fbuser">
										<a href="https://www.facebook.com/PinckneyHugo" target="_blank">Pinckney Hugo Group</a>
									</div><!--/fbuser-->
									<div class="fbpost">
										<?php echo do_shortcode('[custom-facebook-feed id=PinckneyHugo num=3]'); ?>
									</div><!--/fbpost-->
								</div><!--/columns-->
							</div><!--/row-->
						</div><!--/fb-feed-->
					</div><!--/container-->
				</div><!--/fbbody-->
			</div><!--/fbcon-->
			<hr/>
		</div><!--/columns-->
	</div><!--/row-->
	<div class="row">
		<div class="sixteen columns">
			<h2>Twitter Feed</h2>
			<h5><a href="#" target="_blank">Documentation &raquo;</a></h5>
			<p>This is a Twitter integration using twitter.js to pull.</p>
			<div id="twittercon">
				<div class="twitterhead">
					<p><a href="https://twitter.com/pinckneyhugo" target="_blank"><i class="icon-twitter"></i>Tweets</a></p>
				</div><!--/twitterhead-->
				<div class="twitterbody">
					<div class="container">
						<div class="twitter-feed">		
							<div id="twitter_update_list"></div>
						</div><!--/twitter-feed-->
					</div><!--/container-->
				</div><!--/twitterbody-->
			</div><!--/twittercon-->
			<hr/>
		</div><!--/columns-->
	</div><!--/row-->
</div><!--/container-->

<?php get_footer(); ?>
