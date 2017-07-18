<div id="sidebar" class="l-3-10">

	<aside class="widget-area secondary">
		<?php get_template_part('parts/_ad-unit-top-mpu'); ?>
		<?php dynamic_sidebar('Secondary'); ?>
	</aside>

	<?php get_template_part('parts/_company_profile_navigation'); ?>
	<?php get_template_part('parts/_popular-articles'); ?>	

		<?php get_template_part('parts/_ad-unit-skyscraper'); ?>
		
	<!-- <div class="tab-panel">
		<h4 class="tab-title">The Latest</h4>
		<ol class="list-article" style="margin-bottom:50px;">
			<?php
				

				$args = array(
					'post_type' => 'post',
					'cat' => '2103',
					'order' => 'DESC',
					'posts_per_page' => 5,
				);

			/*	$popular_posts = new WP_Query( $args );
				if ( $popular_posts->have_posts() ): while ( $popular_posts->have_posts() ): $popular_posts->the_post();  */
				//while($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
				<?php
				$popular_posts = get_posts( $args ); 

				foreach ( $popular_posts as $post ) : setup_postdata( $post ); 
				?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 

				<?php 

				endforeach;

				/* endwhile; 
						endif; */ 

			/*
				$popular = get_posts( array(
					'post_type' => 'post',
					'posts_per_page' => 7,
					'meta_key' => 'post_views_count',
					'orderby' => 'meta_value_num',
					'order' => 'DESC'
				) ); 
				foreach ( $popular as $post ) : setup_postdata( $post ); 
			
				//endforeach;

				*/

				wp_reset_query();
			?>
		</ol>
	</div> -->


</div><!-- /#sidebar -->