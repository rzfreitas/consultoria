</div>
<div class="rowfull bgcolor-grey">
	<div class="row">

		<div class="large-12 columns p-t-70">
		<?php 

		  $paged = get_query_var('paged') ? get_query_var('paged') : 1;

		  $custom_args = array(
			  'post_type' => 'post',
			  'posts_per_page' => 24,
			  'paged' => $paged
			);
			
		  $custom_query = new WP_Query( $custom_args ); ?>

		  <?php if ( $custom_query->have_posts() ) : ?>
			<h1 style="display:none">Notícias Verde Ghaia</h1>
			<!-- Slider carrousel -->
			<div class="flexslider box-shadow margin-right-20-desk margin-left-20-desk">
				<script>jQuery(document).ready(function() {jQuery(".flexslider").flexslider({animation:"slide"})});</script>
  				<ul class="slides">
					<?php
						$args = array(
							'numberposts'        => '10',
							'post_type'          => 'post',
							'post_status'        => 'publish',
							'category__not_in'   => array( 10, 11, 57 )
						);
						$recent_posts = wp_get_recent_posts($args);
						foreach( $recent_posts as $recent ){							
							echo '<li>
								<div class="large-5 columns nopadding centered hover-zoom">
									<a href="' . get_permalink($recent["ID"]) . '">
										<img src="' . get_the_post_thumbnail_url($recent["ID"], 'medium-large') . '" align="center" width="600" height="400" alt="' . $recent["post_title"] . '">
									</a>
								</div>';
								echo '<div class="large-7 columns centered titulo-post medium-11 m-t-35">
									<h2><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></h2>';
									echo '<div class="left m-t-20">
										<p class="padding-left-30-desk padding-right-30-desk"> ' . get_excerpt_by_id($recent["ID"]) . 
										'</p>
									</div>';
									echo '<div class="centered m-t-20">
										<a  href="' . get_permalink($recent["ID"]) . '">
											<button class="button yellow-button">LEIA MAIS</button>
										</a>
									</div>';
								echo '</div>';
							echo '</li>';							
						}
						wp_reset_query();
					?>
				</ul>
			</div>

			<!-- the loop -->	
			<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>			
				
			  <article class="large-4 medium-6 columns text-center row-eq-height blog-box">
					<table class="no-border-spacing">
							<tr class="blog-post-img">
								<td class="nopadding">
									<div class="img-post hover-zoom">
										<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium-large', array( 'alt' => get_the_title(), 'title' => get_the_title() ) ); ?></a>
									</div><br>
								</td>
							</tr>
						<tr class="bgcolor-white blog-post-text">
							<td>
								<div class="titulo-post medium-11 medium-centered">
									<h2><strong><a href="<?php the_permalink();?>"><?php the_title(); ?></a></strong></h2>
								</div>				
							</td>
						</tr>
						<tr>
							<td>
								<div class="content medium-10 medium-centered text-justify post-button">
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink();?>"><div class="text-center"><button class="button yellow-button">LEIA MAIS</button></a>
								</div><br><br><br>
							</td>
						</tr>
					</table>
			  </article>
			  
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->
			<div class="large-12 columns p-b-70">
				<?php
					if (function_exists(custom_pagination)) {
					custom_pagination($custom_query->max_num_pages,"",$paged);
					}
				?>
			</div>

		  <?php wp_reset_postdata(); ?>

		  <?php else:  ?>			
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		  <?php endif; ?>
		</div>		  
	</div>
</div>