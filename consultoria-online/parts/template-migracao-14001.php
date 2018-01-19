<?php
/*
Template Name: Migração ISO 14001
*/
?>

<?php get_header(); ?>
			
	<div id="content">	
		<div id="inner-content" class="row-full">	
		    <main id="main" role="main">
				
				<div class="banner">
					<?php $image = get_field('banner_top_m_14');
					if( !empty($image) ): ?>
						<div id="img-banner" style="background: url(<?php echo $image['url']; ?>) no-repeat center center fixed;    
						-webkit-background-size: cover;
						-moz-background-size: cover;
						-o-background-size: cover;
						background-size: cover;
						height:500px">
						<div class="row columns breadcrumbs p-t-c">
							<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div id="breadcrumbs">','</div>');} ?>
						</div>
						<div class="row row-eq-height t-banner14 v-center">
							<div class="large-6 columns">
								<h2 class="v-center no-m"><?php echo the_field('title_banner_m14'); ?></h2>
							</div>
							<div class="large-6 columns">
								<?php echo the_field('text_banner_m14'); ?>
								
								<a class="btn-red-banner" data-toggle="animatedModal-contato">FALAR COM UM CONSULTOR</a>				
								<a class="btn-yllw-banner" onclick="scrollToElement('#planos', 0)">QUERO MIGRAR AGORA!</a>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>

				<div class="row p-t-50 p-b-50 p-t-c p-b-c">
					<div class="large-7 columns">
						<h1><?php the_field('h1_m_14'); ?></h1>
						<?php the_field('conteudo_1_m_14'); ?>
					</div>
					<div class="large-5 columns p-t-30">
						<?php the_field('video_m_14'); ?>
					</div>
				</div>

				<div class="bg-cinza2 p-t-50 p-b-50 p-t-c p-b-c">
					<div class="row">
						<h2><?php the_field('h2_2_m14'); ?></h2>
						<?php the_field('conteudo_2_m_14'); ?>
					</div>
					<div class="row">
						<h2><?php the_field('h2_3_m14'); ?></h2>
						<?php the_field('conteudo_3_m_14'); ?>
					</div>
				</div>

				<div class="bg-gradient p-t-50 p-b-50 p-t-c p-b-c crono">
					<div class="row columns p-b-50">
						<h2>Cada segundo conta! Não deixe para a última hora!</h2>
						<p>É interessante que as organizações se ajustem o quanto antes aos novos requisitos. Lembramos que os processos implicam em várias etapas, o que demanda tempo e preparação. Para não correr o risco de perder a certificação, entre em contato conosco e conheça a melhor forma de migrar para a versão 2015 ou comece sua migração agora.</p>
					</div>
					<div class="row row-eq-height">
						<div class="large-6 columns">
							<div class="v-center">
								<div class="hide-for-small-only clock-builder-output"></div>
								<div class="show-for-small-only clock-builder-small-output p-t-c p-b-c crono-mob"></div>
							</div>
						</div>
						<div class="large-6 columns p-t-c">
							<h2>MIGRE AGORA!</h2>
							<p>Você tem até Setembro de 2018 para migrar a nova norma <span class="f-amarela"><strong>ISO 9001</strong> versão 2015.</span></p>
						</div>						
					</div>
					<div class="btn-yllw p-t-30 text-center">
						<a onclick="scrollToElement('#planos', 0)">QUERO MIGRAR AGORA!</a>
					</div>
				</div>

				<div class="row p-t-50 p-b-50 blocos verde">
					<h2 class="text-center p-b-30"><?php echo the_field('h2_1_m14'); ?></h2>
					<?php if( have_rows('blocos') ): ?>													
						<ul>
							<?php while( have_rows('blocos') ): the_row(); 				  
							// vars
							$image = get_sub_field('icone');				
							$text = get_sub_field('texto_bloco');
							?>				
							<li class="text-center">							
								<img src="<?php echo $image['url']; ?>" alt="vantagens iso 9001 versão 2015" />
								<span class="text-justify"><?php echo $text ?></span>
							</li>
							<?php endwhile; ?>
						</ul>						
					<?php endif; ?>	
				</div>			

				<div class="bg-azul">
					<div class="row row-eq-height p-t-50 p-b-50 p-t-c p-b-c">				
						<div class="large-6 columns p-b-c">
							<h2 class="v-center"><?php echo the_field('subtitulo_1'); ?></h2>
						</div>
						<div class="large-6 columns">
							<?php echo the_field('texto_1'); ?>
						</div>					
					</div>
					<!-- <div class="row columns p-b-50 p-t-20 p-b-c">
						<div class="text-center btn-yllw">
							<a>QUERO SABER TUDO SOBRE A ISO 14001:2015</a>
						</div>
					</div> -->
				</div>
				
				<?php get_template_part('parts/content' , 'planos'); ?>

			</main> <!-- end #main -->		    
		</div> <!-- end #inner-content -->	
	</div> <!-- end #content -->

<?php get_footer(); ?>
