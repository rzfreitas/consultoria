<!--?php the_content(); ?>
<!--?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

<?php global $post;

if (is_front_page()):
    get_template_part('parts/content', 'home');
elseif (is_page(6)):
	get_template_part('templates/content','certificacao');
elseif (is_page(18)):
	get_template_part('templates/content','manter-iso');
elseif (is_page(10)):
	get_template_part('templates/content','consultoria');
elseif (is_page(18)):
	get_template_part('templates/content','contato');	
elseif (is_page(634)):
	get_template_part('templates/content','migrar-iso');
elseif (is_page(745)):
	get_template_part('templates/content','business');
else:
 //while (have_posts()) : the_post(); ?>
 -->
 <?php the_title(); ?>
				 <?php the_content(); ?>
			
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
  <?php
  //endwhile;
endif;?>
