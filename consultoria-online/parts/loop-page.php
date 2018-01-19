<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="https://schema.org/WebPage">
										
    <section class="entry-content" itemprop="articleBody">
		
		<?php if (is_page(8)) { get_template_part('parts/content', 'home'); }?>
		<?php if (is_page(206)) { get_template_part('parts/content', 'home-es'); }?>
		<?php if (is_page(10)) { get_template_part('parts/content', 'contato'); }?>
		<?php if (is_page(329)) { get_template_part('parts/content', 'iso-9001'); }?>
		<?php if (is_page(155)) { get_template_part('parts/content', 'iso-9001-como-obter'); }?>
		<?php if (is_page(337)) { get_template_part('parts/content', 'iso-14001'); }?>
		<?php if (is_page(170)) { get_template_part('parts/content', 'quem-somos'); }?>
		<?php if (is_page(356)) { get_template_part('parts/content', 'clientes'); }?>
		<?php if (is_page(402)) { get_template_part('parts/content', 'ohsas-18001'); }?>
		<?php if (is_page(416)) { get_template_part('parts/content', 'iso-22000'); }?>
		<?php if (is_page(323)) { get_template_part('parts/content', 'iso-9001-migracao'); }?>
		<?php if (is_page(514)) { get_template_part('parts/content', 'posts'); }?>
		<?php if (is_page(594)) { get_template_part('parts/content', 'agradecimento-contato'); }?>
		<?php if (is_page(598)) { get_template_part('parts/content', 'agradecimento-proposta'); }?>
		<?php if (is_page(948)) { get_template_part('parts/content', 'home2'); }?>
		<?php if (is_page(1278)) { get_template_part('parts/content', 'iso-22000-como-obter'); }?>
		<?php if (is_page(1542)) { get_template_part('parts/content', 'pbqph'); }?>
		<?php if (is_page(1857)) { get_template_part('parts/content', 'iso-14001-migracao'); }?>

	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
					
</article> <!-- end article -->