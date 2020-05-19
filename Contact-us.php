<!--
Template Name: Contact-Us
-->
<?php get_header(); ?>
		<!-- Content -->		
		<div class="content row wow fadeIn" data-wow-duration="3s" data-wow-delay="0.5s">
			<div class="col-md-9 clearfix">	
				<!-- content -->				
					<?php 
						if ( have_posts() ) : the_post(); 
					?>				
				<div class="contact-us">					
					<h3 class="head-title"><?php the_title(); ?></h3>
					<div class="col-sm-12 col-md-12 col-lg-12 full-grid text-justify">
							<?php the_content(); ?>
							<br/><br/><br/>
							<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Your Name</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputEmail3" placeholder="e.g &mdash; Jon Due">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Your Email</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputEmail3" placeholder="e.g &mdash; example@mail.com !">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Subject</label>
								<div class="col-sm-10">
								  <input type="text" class="form-control" id="inputPassword3" placeholder="Enter Your Subject !">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Message</label>
								<div class="col-sm-10">
								  <textarea class="form-control" id="message" rows="7" placeholder="Enter Your Message !"></textarea>
								</div>
							  </div>
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								  <div class="checkbox">
									<label>
									  <input type="checkbox"> Add Email To Subscription List !
									</label>
								  </div>
								</div>
							  </div>
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								  <button type="submit" class="btn btn-default btn-msg">Send Message !</button>
								</div>
							  </div>
							</form>
							<div class="flip-group">
								<h3 class="head-title">Flips Title</h3>
								
								<div class="col-sm-12 col-md-4">
									<div class="flip-box">
									  <div class="flip-box-inner">
										<div class="flip-box-front">
										  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/flips/1.jpg" alt="..." class="img-responsive">
										</div>
										<div class="flip-box-back">
										  <h2>Branch-01</h2>
										  <p>
										  	Main Branch <br/><br/>
										  	124/A, Road - 3/A, Jigatola, Dhanmondi, Dhaka-1207
										  </p>
										</div>
									  </div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="flip-box">
									  <div class="flip-box-inner">
										<div class="flip-box-front">
										  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/flips/2.jpg" alt="..." class="img-responsive">
										</div>
										<div class="flip-box-back">
										  <h2>Back Side</h2>
										  <p>Loren Ipsum is the dummy and example text for web template. This text is use for simply showing the ui/ux of this template.</p>
										</div>
									  </div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="flip-box">
									  <div class="flip-box-inner">
										<div class="flip-box-front">
										  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/flips/3.jpg" alt="..." class="img-responsive">
										</div>
										<div class="flip-box-back">
										  <h2>Back Side</h2>
										  <p>Loren Ipsum is the dummy and example text for web template. This text is use for simply showing the ui/ux of this template.</p>
										</div>
									  </div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="flip-box">
									  <div class="flip-box-inner">
										<div class="flip-box-front">
										  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/flips/4.jpg" alt="..." class="img-responsive">
										</div>
										<div class="flip-box-back">
										  <h2>Back Side</h2>
										  <p>Loren Ipsum is the dummy and example text for web template. This text is use for simply showing the ui/ux of this template.</p>
										</div>
									  </div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="flip-box">
									  <div class="flip-box-inner">
										<div class="flip-box-front">
										  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/flips/5.jpg" alt="..." class="img-responsive">
										</div>
										<div class="flip-box-back">
										  <h2>Back Side</h2>
										  <p>Loren Ipsum is the dummy and example text for web template. This text is use for simply showing the ui/ux of this template.</p>
										</div>
									  </div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="flip-box">
									  <div class="flip-box-inner">
										<div class="flip-box-front">
										  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/flips/6.jpg" alt="..." class="img-responsive">
										</div>
										<div class="flip-box-back">
										  <h2>Back Side</h2>
										  <p>Loren Ipsum is the dummy and example text for web template. This text is use for simply showing the ui/ux of this template.</p>
										</div>
									  </div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="flip-box">
									  <div class="flip-box-inner">
										<div class="flip-box-front">
										  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/flips/7.jpg" alt="..." class="img-responsive">
										</div>
										<div class="flip-box-back">
										  <h2>Back Side</h2>
										  <p>Loren Ipsum is the dummy and example text for web template. This text is use for simply showing the ui/ux of this template.</p>
										</div>
									  </div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="flip-box">
									  <div class="flip-box-inner">
										<div class="flip-box-front">
										  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/flips/8.jpg" alt="..." class="img-responsive">
										</div>
										<div class="flip-box-back">
										  <h2>Back Side</h2>
										  <p>Loren Ipsum is the dummy and example text for web template. This text is use for simply showing the ui/ux of this template.</p>
										</div>
									  </div>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="flip-box">
									  <div class="flip-box-inner">
										<div class="flip-box-front">
										  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/flips/9.jpg" alt="..." class="img-responsive">
										</div>
										<div class="flip-box-back">
										  <h2>Back Side</h2>
										  <p>Loren Ipsum is the dummy and example text for web template. This text is use for simply showing the ui/ux of this template.</p>
										</div>
									  </div>
									</div>
								</div>
							</div>
					</div>
				</div><!-- content -->

					<?php 		
						endif; 
					?>

				<div class="clearfix"></div>
			</div><!-- end of left content --> 
			<?php get_template_part('sidebar'); ?>
		</div>
		<!--end content-->		
<?php get_footer(); ?> 