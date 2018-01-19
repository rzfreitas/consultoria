<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	
	
	<div class="large-8 columns">
		<span style="display: none"><time class="entry-date updated" datetime="<?php the_modified_date('c'); ?>" pubdate><?php the_modified_date('Y-m-d'); ?></time></span>
		<header class="article-header">
			<h2 class="entry-title single-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part( 'parts/content', 'byline' ); ?><br>
		</header> <!-- end article header -->
						
		<section class="entry-content" itemprop="articleBody">
			<div class="text-center"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a></div><br><br>
			<div class="text-justify"><?php the_excerpt('<button class="test">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?></div>
			<a href="<?php the_permalink();?>"><div class="text-center"><button class="button">LEIA MAIS</button></a></div><br>
		</section> <!-- end article section -->
						
		<footer class="article-footer">
			<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
			
		</footer> <!-- end article footer -->	
	</div>
	
</article> <!-- end article -->