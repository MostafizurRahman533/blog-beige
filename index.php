<?php get_header(); ?>
<?php get_template_part('slider'); ?>
		<!-- Content -->		
		<div class="content row wow fadeIn" data-wow-duration="3s" data-wow-delay="0.5s">
			<div class="col-md-9 clearfix">
				<div class="recent-post">					
					<h3 class="head-title">Latest News</h3>
					<div class="post-grid row">
					<?php 
						//query_posts('posts_per_page=6');
						if ( have_posts() ) : 
							while ( have_posts() ) : the_post(); 
					?>
						<a href="<?php the_permalink(); ?>" class="post">
						  <div class="col-sm-6 col-md-4">
							<div class="thumbnail">
							  <?php the_post_thumbnail('myFituredImage', array('class' => 'post-image-grid','style' => ' height:180px')); ?>
							  <div class="caption" style="min-height: 220px;">
								<h4 class="post-title" style="height: 54px; overflow: hidden;"><?php the_title(); ?></h4>
								<p class="post-content-grid">
									<?php the_excerpt(); ?>
								</p>
								<p class="post-slags-grid">
									<br/><span><i class="far fa-clock"></i> &nbsp; <?php the_time('M d,Y'); ?></span>
								<p>
							  </div>
							</div>
						  </div>	
						</a>
					<?php 
							endwhile; 
						else :
							esc_html_e('<center>Content IF post not found !.</center>');		
						endif; 
					?>	
					</div>
					<div class="pull-left">

<?php 
	the_posts_pagination( array(
		'screen_reader_text' => ' ',
		'mid_size' => 4,
		'prev_text' => __( '<', 'DwinsTeam' ),
		'next_text' => __( '>', 'DwinsTeam' ),
	) );
?>
					</div>
				</div><!--end recent post--> 
				<div class="clearfix"></div>
				<div class="most-visited">					
					<h3 class="head-title">Most Visited</h3>
					<div class="row">
					   	<?php
					      	query_posts('meta_key=post_views_count&posts_per_page=2&orderby=meta_value_num&
					      	order=DESC');
					      	if (have_posts()) : while (have_posts()) : the_post();
					   	?>
						<a href="<?php the_permalink(); ?>" class="post">
						  <div class="col-sm-6 col-md-6">
							<div class="thumbnail">
							  <?php the_post_thumbnail('myFituredImage', array('class' => 'post-image-grid','style' => 'height:300px')); ?>
							  <div class="caption">
								<h4 class="post-title"><?php the_title(); ?></h4>
								<p class="post-content-grid">
									<?php the_excerpt(); ?>
								</p>
								<p class="post-slags-grid">
									<span><i class="far fa-clock"></i> <?php the_time('M d,Y'); ?></span> &nbsp; | &nbsp; 
									<span> By &mdash; <?php the_author(); ?></span>
								<p>
							  </div>
							</div>
						  </div>	
						</a>
					  	<?php
					   		endwhile; endif;
					   		wp_reset_query();
					   ?>						
					</div>
				</div>
				<div class="clearfix"></div>			
				<div class="most-visited">					
					<h3 class="head-title">Technology & Science</h3>
					
					<div class="row full-grid">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/1.webp" alt="..." class=" full-grid-image"> 
						</div>
						<div class="col-sm12 col-md-8 col-lg-8">
							<h4 class="full-grid-title">Post title example. </h4>
							<p>
								Loren ipsum dummy text for web content.Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content.  
								Loren ipsum dummy text for web content.Loren ipsum dummy text for web content. 
								<a href="">Read More</a>
							</p>
						</div>
					</div>
					<div class="row full-grid">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/2.webp" alt="..." class=" full-grid-image"> 
						</div>
						<div class="col-sm12 col-md-8 col-lg-8">
							<h4 class="full-grid-title">Post title example. </h4>
							<p>
								Loren ipsum dummy text for web content.Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content.  
								Loren ipsum dummy text for web content.Loren ipsum dummy text for web content. 
								<a href="">Read More</a>
							</p>
						</div>
					</div>
					<div class="row full-grid">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/3.webp" alt="..." class=" full-grid-image"> 
						</div>
						<div class="col-sm12 col-md-8 col-lg-8">
							<h4 class="full-grid-title">Post title example. </h4>
							<p>
								Loren ipsum dummy text for web content.Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content.  
								Loren ipsum dummy text for web content.Loren ipsum dummy text for web content. 
								<a href="">Read More</a>
							</p>
						</div>
					</div>
					<div class="row full-grid">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/4.jpg" alt="..." class=" full-grid-image"> 
						</div>
						<div class="col-sm12 col-md-8 col-lg-8">
							<h4 class="full-grid-title">Post title example. </h4>
							<p>
								Loren ipsum dummy text for web content.Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content. Loren ipsum dummy text for web content.  
								Loren ipsum dummy text for web content.Loren ipsum dummy text for web content. 
								<a href="">Read More</a>
							</p>
						</div>
					</div>
					<div aria-label="..." class="pull-left">
					  <ul class="pagination">
						<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
						
						<li class=""><a href="#">1 <span class="sr-only">(current)</span></a></li>
						<li class="active-pagination"><a href="#" >2 </a></li>
						<li class=""><a href="#">3 </a></li>
						<li class=""><a href="#">4 </a></li>
						<li class=""><a href="#">5 </a></li>
						<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
					  </ul>
					</div>					
				</div><!--ends-->				
				<div class="clearfix"></div>
				<div class="mini-grid">
					<h3 class="head-title">Related Post</h3>
					<div class="row">

					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/1.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/2.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/3.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/4.jpg" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/5.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/6.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/7.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/8.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/9.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/10.jpg" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/1.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/2.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>					  
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/3.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>					  
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/4.jpg" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>					  
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/5.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>					  
					  <div class="col-xs-6 col-sm-4 col-md-3">
						<a href="">
							<div class="thumbnail">
							  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post/6.webp" alt="..." class="mini-grid-post-image">
							  <div class="caption">
								<h5>Thumbnail label</h5>
							  </div>
							</div>
						</a>
					  </div>					  
					</div><!--ends-->					
				</div><!-- MINI- GRID -->
			</div><!--end of left content--> 
			<?php get_template_part('sidebar'); ?>
		</div>
		<!--end content-->		
<?php get_footer(); ?> 