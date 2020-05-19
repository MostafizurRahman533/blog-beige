<?php get_header(); ?>
		<!-- Content -->		
		<div class="content row wow fadeIn" data-wow-duration="3s" data-wow-delay="0.5s">
			<div class="col-md-9 clearfix">	
				<!-- content -->				
				<div class="most-visited">					
					<h3 class="head-title">Search Result !</h3>
					<div class="alert alert-success">Your Key: <?php _e(''); echo '"'.$s.'"'; ?></div>			
					<?php 
						if ( have_posts() ) : 
							while ( have_posts() ) : the_post(); 
					?>
					<div class="row full-grid">
						<div class="col-sm-12 col-md-4 col-lg-4">
							<?php the_post_thumbnail('myFituredImage', array('class' => 'full-grid-image')); ?>
						</div>
						<div class="col-sm12 col-md-8 col-lg-8">
							<h4 class="full-grid-title"><?php the_title(); ?></h4>
							<p>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>">Read More</a>
							</p>
						</div>
					</div>
					<?php 
							endwhile; 
						else :
					?>
					<div class="alert alert-warning">Result : Not Found </div>
					<?php 
						endif; 
					?>	

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
				</div><!-- content -->
				<div class="clearfix"></div>
			</div><!-- end of left content --> 
			<?php get_template_part('sidebar'); ?>
		</div>
		<!--end content-->		
<?php get_footer(); ?> 