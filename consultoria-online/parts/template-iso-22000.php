<?php
/*
Template Name: ISO 22000
*/
?>

<?php get_header(); ?>
			
	<div id="content">	
		<div id="inner-content" class="row-full">	
		    <main id="main" role="main">
				
				<div class="banner-22">
					<div class="row columns breadcrumbs p-t-c">
            			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
        			</div>			
					<div class="row row-eq-height">
						<div class="large-3 columns f-rosa text-center">
							<div class="v-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iso-22000/iso-22000.png" alt="o que é iso 22000">
								<h1><?php echo the_field('h1_22'); ?></h1>
							</div>
						</div>
						<div class="large-9 columns text-justify">
							<?php echo the_field('conteudo_1_22'); ?>
							<div class="row columns btn-prpl">
								<a data-toggle="animatedModal-proposta">FALAR COM UM CONSULTOR</a>
							</div>
						</div>
					</div>
				</div>

				<div class="bg-gradient p-t-50 p-b-50 p-t-c p-b-c">
					<div class="row columns">
						<h2><?php echo the_field('subtitulo_1_22'); ?></h2>
						<?php echo the_field('conteudo_2_22'); ?>
					</div>
					<div class="row columns btn-yllw p-t-30 text-center">
						<a onclick="scrollToElement('#planos', 0)">QUERO MIGRAR AGORA!</a>
					</div>
				</div>

				<div class="bg-cinza2 p-t-50 p-b-50 p-t-c p-b-c">
					<div class="row columns">
						<h2><?php echo the_field('subtitulo_2_22'); ?></h2>
						<?php echo the_field('conteudo_3_22'); ?>
					</div>
				</div>

				<div class="row columns p-t-50 p-t-c p-b-c">		
					<h2><?php echo the_field('subtitulo_3_22'); ?></h2>
					<?php echo the_field('conteudo_4_22'); ?>				
				</div>
				<div class="row p-t-c p-b-c">
					<img class="img-float" src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/tipos-empresas.png" alt="tipos empresas obter iso 9001 2015" />
				</div>
				<div class="line-22"></div>

				<div class="row columns p-t-50 p-t-c p-b-c">
					<h2><?php echo the_field('subtitulo_4_22'); ?></h2>
					<?php echo the_field('conteudo_5_22'); ?>
				</div>

				<div class="p-t-30 p-b-50 q-line">
					<?php if( have_rows('quadrinhos_22') ): 
						$count = 0;
					?>				
						<?php while( have_rows('quadrinhos_22') ): the_row(); 		  
							// vars
							$image = get_sub_field('img_q_22');				
							$title = get_sub_field('title_q_22');
							$content = get_sub_field('content_q_22');
						?>
							<?php if (($count %2) == 0 ) : ?>
								<div class="row">							
									<div class="large-6 columns">
										<ul>
											<li><img src="<?php echo $image['url'] ?>" alt="vantagens certificação iso 9001" /></li>
											<li class="text-justify"><h3><?php echo $title ?></h3>
												<?php echo $content ?>
											</li>
										</ul>
									</div>
									<div class="large-6 columns c-none"></div>
								</div>
								<?php else : ?>
								<div class="row">							
									<div class="large-6 columns c-none"></div>
									<div class="large-6 columns">
										<ul>
											<li><img src="<?php echo $image['url'] ?>" alt="vantagens certificação iso 9001" /></li>											
											<li class="text-justify"><h3><?php echo $title ?></h3>
												<?php echo $content ?>
											</li>
										</ul>
									</div>
								</div>
							<?php endif; ?>
						<?php $count++; endwhile; ?>													
					<?php endif; ?>	
				</div>				

				<div class="banner-22 b-22-full p-t-50 p-b-50 p-t-c p-b-c">					
					<div class="row columns">
						<h2><?php echo the_field('subtitulo_5_22'); ?></h2>
						<?php echo the_field('conteudo_6_22'); ?>
					</div>
					<div class="row columns p-a-p-14">
						<?php if ( have_rows ('p_a_p_22') ): ?>			
							<ol>
								<?php while ( have_rows('p_a_p_22') ): the_row(); ?>
									<li>						
										<?php $content_e_14 = get_sub_field('etapa_22'); ?>
										<?php $content_c_14 = get_sub_field('conteudo_pap_22'); ?>

										<h3><?php echo $content_e_14 ?></h3>
										<?php echo $content_c_14 ?>
									</li>
								<?php endwhile; ?>
							</ol>
						<?php endif; ?>
					</div>
				</div>

				<div class="bg-img-3">
					<div class="row bg-vinho2">
						<h2><?php echo the_field('subtitulo_6_22'); ?></h2>
						<?php echo the_field('conteudo_7_22'); ?>
					</div>
				</div>
				
				<?php get_template_part('parts/content' , 'planos-certificacao'); ?>

			</main> <!-- end #main -->		    
		</div> <!-- end #inner-content -->	
	</div> <!-- end #content -->

<?php get_footer(); ?>
