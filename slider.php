		<!-- Slider -->
		<div class="slider wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">

<?php
    global $post;
    $i=0;
    $args = array('posts_per_page' => -1, 'post_type'=> 'slider-items','page'=> $paged, 'order' => 'DESC');
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post);
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-items');  
    $i++;
    $this_id = get_the_ID(); 
    global $wpdb;
    $m_name_subtitle = '';
    $tbl_postmeta = $wpdb->prefix."postmeta";           
    $meta_name_subtitle = 'meta-subtitle-slider';           
    $query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_subtitle'";
    $result = $wpdb->get_results($query_result);
    $count = 0;
    foreach($result as $row){
        $m_name_subtitle = $row->meta_value;
    }
?>
<!-- ---------------------------------------------------------------------- -->
				<div class="item <?php if($i==1){ echo 'active'; } ?>">
				  <img src="<?php echo $large_image_url[0]; ?>" alt="..." class="slider-image">
				  <div class="carousel-caption">
					<h2><?php the_title(); ?></h2>
					<p><?php the_excerpt(); ?></p>
				  </div>
				</div>    
<!-- ---------------------------------------------------------------------- -->
<?php endforeach;?>
			



			  </div>
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>		
		</div>
		<!--end slider-->