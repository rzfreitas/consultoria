<?php get_header(); ?>
			
<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="large-8 columns p-t-50 p-t-c padding-right" role="main">		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>		    	
		    <?php endwhile; else : ?>		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>
		    <?php endif; ?>
		</main> <!-- end #main -->
		
		<div class="large-4 columns p-t-50 p-t-c">
			<h4>Categoria(s): <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?></h4>	<h4 class="text-center fontbranca" id="titulo-colunista">Saiba mais</h4>
			<div class="colunistas">			
				<?php
				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 10, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>				
						<div class="row">
						<div class="large-6 columns"><a href="<?php the_permalink() ?>"> <?php the_post_thumbnail('thumbnail'); ?> </a></div>
						<div class="large-6 columns text-left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><strong><?php the_title(); ?></strong></a></div>
						</div><br>
				<?php }
				wp_reset_postdata(); ?>
			</div><br>
			<h4 class="text-center fontbranca" id="titulo-colunista">Newsletter</h4>		
			<div class="colunistas">
				<h5 class="text-center"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Receba artigos gratuitos no seu e-mail</h5>
				<div id="newsletter-e5c59ec964b7ee75db55"></div>
				<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
				<script type="text/javascript">
				new RDStationForms('newsletter-e5c59ec964b7ee75db55-html', 'UA-70350867-1').createForm();
				</script> 
			</div><br>
			<h4 class="text-center fontbranca" id="titulo-colunista">Colunistas</h4>
			<div class="colunistas text-center">							
				<div class="row collapse">
					<div class="medium-6 columns"><a href="https://www.consultoriaiso.org/author/deivison/"><img src="https://www.consultoriaiso.org/wp-content/uploads/2016/12/deivison-pedroza-verde-ghaia.jpg" alt="Deivison Pedroza Presidente do Grupo Verde Ghaia"></img></div>
					<div class="medium-6 columns" id="colunistas-small"><small class="font-preta"><strong>Deivison Pedroza</strong><br>Presidente do Grupo Verde Ghaia</small></a></div>
				</div><br>
				<div class="row collapse">
					<div class="medium-6 columns"><a href="https://www.consultoriaiso.org/author/fbrant/"><img src="https://www.consultoriaiso.org/wp-content/uploads/2016/12/fabiana-brant.png" alt="Fabiana Brant Consultora da Verde Ghaia"></img></div>
					<div class="medium-6 columns" id="colunistas-small">
					<small class="font-preta"><strong>Fabiana Brant</strong><br>Consultora do Grupo Verde Ghaia</small></a></div>
				</div><br>
				<div class="row collapse">
					<div class="medium-6 columns"><a href="https://www.consultoriaiso.org/author/daniela/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/colunistas/daniela-pedroza.jpg" alt="Daniela Pedroza Diretora da Verde Ghaia"></img></div>
					<div class="medium-6 columns" id="colunistas-small"><small class="font-preta"><strong>Daniela Pedroza</strong><br>Diretora do Grupo Verde Ghaia</small></a></div>
				</div>
			</div>
		</div>
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>