<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>
		<!-- Content -->		
		<div class="content row wow fadeIn" data-wow-duration="3s" data-wow-delay="0.5s">
			<div class="col-md-9 clearfix">
				<img src="<?php echo get_template_directory_uri(); ?>/asset/images/adds.png" alt="n/a" class="img-responsive">
				<br/>
				<div class="post-details">
					<div class="post-content">
					<?php 
						if ( have_posts() ) : 
							while ( have_posts() ) : the_post(); 
					?>
						<?php the_post_thumbnail('myFituredImage', array('class' => 'img-responsive', 'style'=>'width:100%; max-height:580px; ')); ?>

						<p><br/>Fig: <?php the_title(); ?></p>
						<p>
							<i class="far fa-clock"></i> &nbsp; <?php the_time('M d,Y'); ?> &nbsp; | &nbsp; 
							<?php the_tags(); ?>
						</p>
						<p><?php the_title(); ?></p>
						<?php the_content(); ?>						
					<?php 
							endwhile; 
						endif; 
					?>  
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- content -->				
				<div class="most-visited">					
					<h3 class="head-title">Related Post</h3>

<?php
	//for use in the loop, list 5 post titles related to first tag on current post
	$tags = wp_get_post_tags($post->ID);
	if ($tags) {
	$first_tag = $tags[0]->term_id;
	$args=array(
	'tag__in' => array($first_tag),
	'post__not_in' => array($post->ID),
	'posts_per_page'=>6,
	'caller_get_posts'=>1
	);
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
	while ($my_query->have_posts()) : $my_query->the_post(); 
?>
					<div class="row full-grid">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<?php the_post_thumbnail('myFituredImage', array('class' => 'full-grid-image', 'style'=>'width:100%;')); ?>
						</div>
						<div class="col-sm12 col-md-8 col-lg-8">
							<h4 class="full-grid-title"><?php the_title(); ?></h4>
							<p class="text-jusfy">
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>">Read More</a>
							</p>
						</div>
					</div>
<?php
			endwhile;
		}
		wp_reset_query();
	}
?>				
<br/><br/>
				</div><!-- conten -->
				<div class="clearfix"></div>
				<div class="comments-form">
					<h3 class="category-title">Comments !</h3> 
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-2">
									<img src="<?php echo get_template_directory_uri(); ?>/asset/images/profiles/3.jpg" alt="n/a" class="img img-rounded img-fluid"/>
									<p class="text-secondary text-center">15 Minutes Ago</p>
								</div>
								<div class="col-md-10">
									<p>
										<a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>
										<span class="float-right"><i class="text-warning fa fa-star"></i></span>
								   </p>
								   <div class="clearfix"></div>
									<p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									<p>
										<a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
										<a class="float-right btn text-white btn-info"> <i class="fa fa-heart"></i> Like</a>
								   </p>
								</div>
							</div>
								<div class="card card-inner">
									<div class="card-body">
										<div class="row">
											<div class="col-md-2">
												<img src="<?php echo get_template_directory_uri(); ?>/asset/images/profiles/2.jpg" alt="n/a" class="img img-rounded img-fluid"/>
												<p class="text-secondary text-center">15 Minutes Ago</p>
											</div>
											<div class="col-md-10">
												<p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
												<p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
												<p>
													<a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
													<a class="float-right btn text-white btn-info"> <i class="fa fa-heart"></i> Like</a>
											   </p>
											</div>
										</div>
									</div>
								</div>
						</div>
						<hr/>
						<!-- form.. -->
						<form class="form-horizontal">
						  <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label"> Write Comment</label>
							<div class="col-sm-10">
							  <textarea class="form-control" rows="4" placeholder="Enter Your Comments !"></textarea>
							</div>
						  </div>

						  <div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-info">Post Comment</button>
							</div>
						  </div>
						</form>						
					</div>	
					<!-- content -->
					<br/><br/>
					<img src="<?php echo get_template_directory_uri(); ?>/asset/images/adds.png" alt="n/a" class="img-responsive">
					<br/>
				</div>
				<div class="clearfix"></div>
				
			</div><!-- end of left content --> 			
			<?php get_template_part('sidebar'); ?>
		</div>
		<!--end content-->		
<?php get_footer(); ?> 