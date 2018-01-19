<?php
/*
Template Name: ISO 9001
*/
?>

<?php get_header(); ?>
			
	<div id="content">	
		<div id="inner-content" class="row-full">	
		    <main id="main" role="main">
				
				<div class="banner-9 p-t-c">
					<div class="row columns breadcrumbs p-t-c">
            			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
        			</div>						
					<div class="row row-eq-height">
						<div class="large-3 columns f-azul text-center">
							<div class="v-center">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iso-9001/iso-9001.png" alt="o que é iso 9001">
								<h1><?php echo the_field('h1_9'); ?></h1>
							</div>
						</div>
						<div class="large-8 columns text-justify">
							<?php echo the_field('conteudo_1'); ?>
							<div class="row columns btn-prpl p-t-30">
								<a data-toggle="animatedModal-proposta">FALAR COM UM CONSULTOR</a>
							</div>
						</div>
					</div>
				</div>

				<div class="bg-gradient p-t-50 p-b-50 p-t-c p-b-c crono">
					<div class="row p-b-30">
						<div class="large-7 medium-7 columns">
							<h2><?php echo the_field('subtitulo_1'); ?></h2>
							<span class="text-justify"><?php echo the_field('conteudo_2'); ?></span>
						</div>
						<div class="large-5 medium-5 columns p-t-70">
							<div class="intrinsic-container intrinsic-container-16x9">
								<iframe src="https://www.youtube.com/embed/7hOFpHYj9Yk" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="btn-yllw p-t-30">
								<a onclick="scrollToElement('#planos', 0)">QUERO MIGRAR AGORA!</a>
							</div>
						</div>
					</div>					
				</div>

				<div class="bg-cinza2 p-t-50 p-b-50 p-t-c p-b-c">
					<div class="row columns">
						<h2><?php echo the_field('subtitulo_2'); ?></h2>
						<?php echo the_field('conteudo_3'); ?>
					</div>
					<div class="p-t-30 q-line">
						<?php if( have_rows('quadrinhos') ): 
							$count = 0;
						?>				
							<?php while( have_rows('quadrinhos') ): the_row(); 		  
								// vars
								$image = get_sub_field('img_q');				
								$title = get_sub_field('title_q');
								$content = get_sub_field('content_q');
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
				
				<div class="row columns p-t-50 p-t-c p-b-c">		
					<h2><?php echo the_field('subtitulo_3'); ?></h2>
					<?php echo the_field('conteudo_4'); ?>				
				</div>
				<div class="row p-t-c p-b-c">
					<img class="img-float" src="<?php echo get_template_directory_uri(); ?>/assets/images/empresas/tipos-empresas.png" alt="tipos empresas obter iso 9001 2015" />
				</div>

				<div class="bg-azul p-t-50 p-b-50 p-t-c p-b-c">
					<div class="row bg-azul2">
						<h2><?php echo the_field('subtitulo_4'); ?></h2>
						<?php echo the_field('conteudo_5'); ?>
					</div>
					<!-- <div class="row columns btn-yllw p-t-30 text-center">
						<a onclick="scrollToElement('#planos', 0)">QUERO A CERFITICAÇÃO ISO 9001:2015</a>
					</div> -->
				</div>

				<div class="banner-9 p-t-50 p-b-50 p-t-c p-b-c">					
					<div class="row columns">
						<h2><?php echo the_field('subtitulo_5'); ?></h2>
					</div>
					<div class="row columns p-a-p">
						<?php if ( have_rows ('p_a_p') ): ?>			
							<ol>
								<?php while ( have_rows('p_a_p') ): the_row(); ?>
									<li>						
										<?php $content_2 = get_sub_field('etapa'); ?>

										<strong>passo:</strong> <?php echo $content_2 ?>
									</li>
								<?php endwhile; ?>
							</ol>			
						<?php endif; ?>
					</div>						
				</div>

				<div class="bg-img-1">
					<div class="row bg-azul2">
						<h2><?php echo the_field('subtitulo_6'); ?></h2>
						<?php echo the_field('conteudo_6'); ?>
					</div>
				</div>
				
				<?php get_template_part('parts/content' , 'planos-certificacao'); ?>

			</main> <!-- end #main -->		    
		</div> <!-- end #inner-content -->	
	</div> <!-- end #content -->

<?php get_footer(); ?>
