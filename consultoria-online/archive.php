<?php get_header(); ?>

<div class="rowfull">
	<div class="row p-t-70 p-b-70">
		<div class="large-9 columns">
				
				<header>
		    		<h1 class="page-title font-marinho"><?php the_archive_title();?></h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>					 
		    	</header>
				
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<hr>
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>					
				    
				<?php endwhile; ?>	

					
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		  </div>
		  <div class="large-3 columns text-right">			
				<h4 class="text-center medium-offset-1 fontbranca" id="titulo-colunista">Categorias</h4>		
				<div class="medium-offset-1 colunistas">
					<?php wp_list_categories( array(
						'orderby'    => 'name',					
						'exclude'    => array( 18, 11 ),
						'title_li'   => ''
						) ); ?> 
				</div><br>
		  </div>	
	</div>
</div>

<?php get_footer(); ?>