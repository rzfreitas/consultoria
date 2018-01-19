<?php
/*
Template Name: ISO 14001
*/
?>

<?php get_header(); ?>
			
	<div id="content">	
		<div id="inner-content" class="row-full">	
		    <main id="main" role="main">
				
				<div class="banner-14">
					<div class="row columns breadcrumbs p-t-c">
						<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
					</div>				
					<div class="row row-eq-height">
						<div class="large-3 columns verde text-center">
							<div class="v-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iso-14001/iso-14001.png" alt="o que é iso 14001">
								<h1><?php echo the_field('h1_14'); ?></h1>
							</div>
						</div>
						<div class="large-8 columns text-justify">
							<?php echo the_field('conteudo_1_14'); ?>
							<div class="row columns btn-prpl">
								<a data-toggle="animatedModal-proposta">FALAR COM UM CONSULTOR</a>
							</div>
						</div>
					</div>
				</div>

				<div class="bg-cinza2 p-t-50 p-b-50 p-t-c p-b-c">
					<div class="row columns">
						<h2><?php echo the_field('subtitulo_1_14'); ?></h2>
						<?php echo the_field('conteudo_2_14'); ?>
					</div>
				</div>
				<div class="row p-t-50 p-b-50 p-t-c p-b-c">
					<h2><?php echo the_field('subtitulo_4_14'); ?></h2>
					<?php echo the_field('conteudo_5_14'); ?>
					<div class="p-t-30 q-line">
						<?php if( have_rows('quadrinhos_14') ): 
							$count = 0;
						?>				
							<?php while( have_rows('quadrinhos_14') ): the_row(); 		  
								// vars
								$image = get_sub_field('img_q_14');				
								$title = get_sub_field('title_q_14');
								$content = get_sub_field('content_q_14');
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
				</div>

				<div class="bg-gradient p-t-50 p-b-50 p-t-c p-b-c">
					<div class="row">
						<div class="large-6 columns">
							<h2><?php echo the_field('subtitulo_5_14'); ?></h2>
							<span class="text-justify"><?php echo the_field('conteudo_6_14'); ?></span>
						</div>
						<div class="large-6 columns p-t-90">
							<div class="intrinsic-container intrinsic-container-16x9">
								<iframe src="https://www.youtube.com/embed/_jE7ShmeqSw" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="row columns btn-yllw p-t-30 text-center">
								<a data-toggle="animatedModal-proposta">FALAR COM UM CONSULTOR</a>
							</div>
						</div>
					</div>
					<div class="row columns">
						<h2><?php echo the_field('subtitulo_2_14'); ?></h2>
						<?php echo the_field('conteudo_3_14'); ?>
					</div>
				</div>

				<div class="banner-14 p-t-50 p-b-50 p-t-c p-b-c b-22-full">
					<div class="row columns p-a-p-14">
						<h2><?php echo the_field('subtitulo_6_14'); ?></h2>
						<?php echo the_field('conteudo_7_14'); ?>
						<?php if ( have_rows ('p_a_p_14') ): ?>			
							<ol>
								<?php while ( have_rows('p_a_p_14') ): the_row(); ?>
									<li>						
										<?php $content_e_14 = get_sub_field('etapa_14'); ?>
										<?php $content_c_14 = get_sub_field('conteudo_pap_14'); ?>

										<h3><?php echo $content_e_14 ?></h3>
										<?php echo $content_c_14 ?>
									</li>
								<?php endwhile; ?>
							</ol>
						<?php endif; ?>
					</div>
				</div>

				<div class="bg-img-2">
					<div class="row bg-verde2">
						<h2><?php echo the_field('subtitulo_3_14'); ?></h2>
						<?php echo the_field('conteudo_4_14'); ?>
					</div>
				</div>
				
				<?php get_template_part('parts/content' , 'planos-certificacao'); ?>

			</main> <!-- end #main -->		    
		</div> <!-- end #inner-content -->	
	</div> <!-- end #content -->

<?php get_footer(); ?>
