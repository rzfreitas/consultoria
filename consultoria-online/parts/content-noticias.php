<section>
<div class="p-t-50 p-b-50 p-b-c p-t-c noticias">
	<div class="row columns p-b-30">
		<h2 class="text-center columns p-b-30">Últimos Artigos</h2>
		<?php $aRecentPosts = new WP_Query("showposts=4"); ?>
		<ul>
			<?php while($aRecentPosts->have_posts()) : $aRecentPosts->the_post(); ?>
				<li>
					<a href="<?php the_permalink() ?>" title=""><?php the_post_thumbnail('medium');?></a>
					<?php the_category() ?>
					<a href="<?php the_permalink() ?>" title="Veja: <?php the_title(); ?> " rel="bookmark">
					<h2><?php the_title();?></h2></a>
					<?php the_excerpt(); ?>
					<a class="s-m" href="<?php the_permalink() ?>">Saiba mais <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
				</li>
			<?php endwhile; wp_reset_query(); ?>
		</ul>		
	</div>
	<div class="text-center">
		<a class="btn-rad btn-grn" href="<?php echo site_url(); ?>/blog">MAIS ARTIGOS NO BLOG</a>
	</div>
</div>
</section>