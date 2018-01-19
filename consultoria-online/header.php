<!DOCTYPE html>
  <html amp lang="pt-BR">
  <html class="no-js"  <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Mobile Meta -->
		<meta class="foundation-mq">		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
		<!-- Drop Google Analytics here -->
		<!-- end analytics -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
	</head>
	<!-- Uncomment this line if using the Off-Canvas Menu --> 	
	<body <?php body_class(); ?>>
		<?php include_once("analyticstracking.php") ?>
		<div class="off-canvas-wrapper">							
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>			
			<div class="off-canvas-content" data-off-canvas-content>				
				<header class="header" role="banner" id="altura-header">					
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <div class="hide-for-small-only" id="meuMenu"><?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?></div>
					 <div class="show-for-small-only"><?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?></div>					 
					<div class="reveal" id="animatedModal11" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">	
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							<label>
								<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'jointswp' ) ?></span>
								<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Digite sua pesquisa...', 'jointswp' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointswp' ) ?>" />
							</label>
							<input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Pesquisar', 'jointswp' ) ?>" />
						</form>
						<button class="close-button" data-close aria-label="Close modal" type="button">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>	
				</header> <!-- end .header --> 
				<div class="height-fix"></div>              
                <a href="javascript:void(0);" id="scroll" title="Ir para o topo">Subir<span></span></a>		