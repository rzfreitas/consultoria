<?php
/*
Template Name: OHSAS 18001
*/
?>

<?php get_header(); ?>
			
	<div id="content">	
		<div id="inner-content" class="row-full">	
		    <main id="main" role="main">

				<div class="banner-ohsas">					
					<div class="row columns breadcrumbs p-t-c">
						<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
					</div>
					<div class="row row-eq-height">
						<div class="large-3 columns f-laranja text-center p-t-50">
							<div classs="v-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ohsas-18001/ohsas-18001.png" alt="o que é iso 22000">
								<h1><?php echo the_field('h1_ohsas'); ?></h1>
							</div>
						</div>
						<div class="large-8 columns text-justify">
							<?php echo the_field('conteudo_1_ohsas'); ?>
							<div class="row columns btn-prpl">
								<a data-toggle="animatedModal-proposta">FALAR COM UM CONSULTOR</a>
							</div>
						</div>
					</div>
				</div>

				<div class="bg-gradient p-t-50 p-b-50 p-t-c p-b-c">
					<div class="row columns">
						<div class="large-6 columns">
							<h2><?php echo the_field('subtitulo_1_ohsas'); ?></h2>
							<?php echo the_field('conteudo_2_ohsas'); ?>
						</div>
						<div class="large-6 columns p-t-70">
							<div class="intrinsic-container intrinsic-container-16x9">
								<iframe src="https://www.youtube.com/embed/L-_5IpIYHaA" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="row columns btn-yllw p-t-30 text-center">
						<a onclick="scrollToElement('#planos', 0)">QUERO MIGRAR AGORA!</a>
					</div>
				</div>

				<div class="bg-cinza2 p-t-50 p-b-50 p-t-c p-b-c">
					<div class="row columns">
						<h2><?php echo the_field('subtitulo_2_ohsas'); ?></h2>
						<?php echo the_field('conteudo_3_ohsas'); ?>
					</div>
				</div>

				<div class="row columns p-t-50 p-t-c p-b-c">
					<h2><?php echo the_field('subtitulo_3_ohsas'); ?></h2>
					<?php echo the_field('conteudo_4_ohsas'); ?>
				</div>

				<div class="p-t-30 p-b-50 q-line">
					<?php if( have_rows('quadrinhos_ohsas') ): 
						$count = 0;
					?>				
						<?php while( have_rows('quadrinhos_ohsas') ): the_row(); 		  
							// vars
							$image = get_sub_field('img_q_ohsas');				
							$title = get_sub_field('title_q_ohsas');
							$content = get_sub_field('content_q_ohsas');
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

				<div class="bg-cinza2 p-t-50 p-b-50 p-t-c p-b-c">
					<div class="row columns">
						<h2><?php echo the_field('subtitulo_7_ohsas'); ?></h2>
						<?php echo the_field('conteudo_8_ohsas'); ?>
					</div>
				</div>	

				<div class="banner-ohsas b-22-full p-t-50 p-b-50 p-t-c p-b-c">					
					<div class="row columns">
						<h2><?php echo the_field('subtitulo_5_ohsas'); ?></h2>
						<?php echo the_field('conteudo_6_ohsas'); ?>
					</div>
					<div class="row columns p-a-p-14 p-a-p-ohsas">
						<?php if ( have_rows ('p_a_p_ohsas') ): ?>			
							<ol>
								<?php while ( have_rows('p_a_p_ohsas') ): the_row(); ?>
									<li>						
										<?php $content_e_14 = get_sub_field('etapa_ohsas'); ?>
										<?php $content_c_14 = get_sub_field('conteudo_pap_ohsas'); ?>

										<h3><?php echo $content_e_14 ?></h3>
										<?php echo $content_c_14 ?>
									</li>
								<?php endwhile; ?>
							</ol>
						<?php endif; ?>
					</div>
				</div>

				<div class="bg-img-4">
					<div class="row bg-laranja">
						<h2><?php echo the_field('subtitulo_6_ohsas'); ?></h2>
						<?php echo the_field('conteudo_7_ohsas'); ?>
					</div>
				</div>
				
				<?php get_template_part('parts/content' , 'planos-certificacao'); ?>

			</main> <!-- end #main -->		    
		</div> <!-- end #inner-content -->	
	</div> <!-- end #content -->

<?php get_footer(); ?>
