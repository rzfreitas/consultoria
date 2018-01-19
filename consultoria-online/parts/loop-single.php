<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
	<span style="display: none">
		<time class="entry-date updated" datetime="<?php the_modified_date('c'); ?>" pubdate><?php the_modified_date('Y-m-d'); ?></time>
	</span>
	<meta itemprop="dateModified" content="<?php the_modified_date('Y-m-d'); ?>" />

	<a style="display: none" itemprop="mainEntityOfPage" href="http://consultoriaiso.org/"><h2 itemprop="name">Verde Ghaia Consultoria Online</h2></a>

	<span style="display: none" class="source" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<div itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
 			<meta itemprop="height" content="300">
            	<meta itemprop="width" content="300">
			<img style="display: none" itemprop="url"  alt="<?php the_title(); ?>"  src="https://s3-sa-east-1.amazonaws.com/lg7/vgconsultoriaonline.png" />
        </div>
		<span itemprop="name">
			<a href="https://www.consultoriaiso.org/">Verde Ghaia Consultoria Online</a>
		</span>
    </span>
				
	<div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
 		<meta itemprop="height" content="300">
            <meta itemprop="width" content="300">
		<img style="display: none" itemprop="url"  alt="<?php the_title(); ?>"  src="<?php the_post_thumbnail_url(); ?>" />
    </div>
		
	<header class="article-header">	
		<h1 class="entry-title single-title font-verde" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->
					
    <section class="entry-content p-t-c font-preta" itemprop="articleBody">		
		<?php the_content(); ?>
	</section> <!-- end article section -->
	<?php get_template_part( 'parts/content', 'byline' ); ?>				
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->

	<?php if( get_field('active_plans') == 'sim' ): ?>
		<?php get_template_part('parts/content' , 'planos-posts'); ?>
	<?php endif; ?>

	<div class="row columns padding-bottom p-t-30 p-b-c">
		<p>Compartilhe nas redes sociais:</p>
		<a class="icon-link round facebook fill" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&t=<?php the_title();?>" target="_blank" title="Compartilhar no Facebook"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
		<a class="icon-link round twitter fill" href="http://twitter.com/share?text=%20Sharing%20on%20Twitter&url=<?php the_permalink();?>&hashtags=consultoriaonline,certificaçãoISO,VerdeGhaia" target="_blank" title="Compartilhar no Tweeter"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
		<a class="icon-link round google-plus fill" href="http://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank" title="Compartilhar no Google+"><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;
		<a class="icon-link round linkedin fill" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>" target="_blank" title="Compartilhar no LinkedIn"><i class="fa fa-linkedin"></i></a>
	</div>	
	<hr>

	<?php comments_template(); ?>	
													
</article> <!-- end article -->