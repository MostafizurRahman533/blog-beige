<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
 <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('site-title');  ?></title>

	<?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
 	<?php wp_body_open(); ?>	
	<div class="container">
		<!-- Header -->
		<div class="scroll">
			<div class="col-md-2 col-sm-4 col-xs-4 col-lg-2 headline text-center">
				News Headline 
			</div>
			<div class="col-md-10 col-sm-8 col-xs-8 col-lg-10">
				<marquee>Prime Minister Sheikh Hasina parmitted the Rohinga people. | Donald Trump warning the Tehoran - Today | Prime Minister Sheikh Hasina parmitted the Rohinga people. |</marquee>
			</div>
		</div>
		<header class="header clearfix wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s">
			<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
				<h1> <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?> </h1>
			</div>

			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 social text-right">
				<a href="" class="social-icons"><i class="fab fa-facebook-square"></i></a>
				<a href="" class="social-icons"><i class="fab fa-twitter-square"></i></a>
				<a href="" class="social-icons"><i class="fab fa-youtube-square"></i></a>
				<a href="" class="social-icons"><i class="fab fa-google-plus-square"></i></a>
			</div>
		</header>
		<!---end header--> 
		<!-- NAVBAR -->
		<div class="top-menu wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="">Home</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php 
        wp_nav_menu(
             array(
             	'theme_location' => 'Menu_name1',
                'container_class' => 'main-navigation',
                'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
              )
         ); 
?>

				  <form class="navbar-form navbar-right" action="<?php echo home_url( '/' ); ?>">
					<div class="form-group align-right">
					  <input type="search" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" />
					</div>
					<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
				  </form>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>		
		</div>
		<!--end top-menu --> 