<?php get_header(); ?>

	<div class="container">
		<section id="content" class="l-9-1">

			<?php 
				// Display sticky posts for content slider
				$sticky_query = new WP_Query( array(
					'posts_per_page' => 4,
					'post__in'  => get_option( 'sticky_posts' ),
					'ignore_sticky_posts' => 1
				) );
			?>
			
			<ul id="promo-slider" class="promoted-articles">
				<?php if ( $sticky_query->have_posts() ): while ( $sticky_query->have_posts() ): $sticky_query->the_post(); ?>
					<li class="promoted-article">
						<article>
							<figure class="article-image">
								<div class="img-placeholder landscape">
									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
											<?php

												// Get responsive thumbnail
												echo get_responsive_thumbnail(array( array('promoted-large', 800), array('promoted-medium', 500), array('promoted-small', 320, true)));

											?>
										</a>
									<?php endif; ?>
								</div>	
							</figure>
							<div class="article-content">
								<h2 class="article-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<div class="article-copy">
									<?php 

										$article_content = get_the_excerpt() . ' <a class="read-more-link smaller-font" href="' . get_the_permalink() . '">Read more</a>';
										echo '<p>' . $article_content . '</p>';
									?>
								</div>
							</div>	
						</article>
					</li>
				<?php endwhile; endif; ?>	
			</ul>

			<ul class="slider-title-nav l-module" data-slider-ref="promo-slider">
				<?php 
					$j = 0; // Title counter
					if ( $sticky_query->have_posts() ): while ( $sticky_query->have_posts() ): $sticky_query->the_post(); 
				?>
					<li><a href="<?php the_permalink(); ?>" data-ref="<?php echo $j; ?>"><?php the_title(); ?></a></li>
				<?php 
						$j++;
					endwhile; endif;
					wp_reset_postdata(); 
				?>
			</ul>
			
			<!-- Latest articles from each category -->
			<ul class="latest-articles list-articles l-module">
			<?php 
				$categories = array(
					array('Analysis', 'Analysis'),
					array('Politics', 'Politics'),
					array('Profiles and Interviews', 'Profiles &amp; Interviews'),
					array('Africa Within', 'Africa Within'),
					array('African Diaspora', 'African Diaspora'),
					array('African Markets', 'African Markets'),
					array('Arts and Culture', 'Arts &amp; Culture'),
					array('Opinions', 'Opinions'),
					array('Advertorials', 'Advertorial')
				);
				
				$cat_counter = 0;
				/* foreach ( $categories as $category ) : 
					
					$category_name = $category[0];
					$category_label = $category[1];
					$category_id = get_cat_ID( $category_name );
					
					$num_months = 12;
					$time_back = strtotime('-'.$num_months.' Months');
					$date_from = date('F jS, Y',$time_back);
				*/
				/*	$latest_posts = get_posts( array(
						'cat' => $category_id,
						'posts_per_page' => 1,
						'orderby' => 'date',
						'date_query' => array(
							array( 'after' => $date_from )
						)
					) ); 
					
					*/
					
					$latest_posts = get_posts( array(
						//'cat' => $category_id,
						'cat' => '-1520, -795, -864, -862, -863, -785, -1945, -1, -2103',
						'posts_per_page' => 9,
						'orderby' => 'date',
						"post__not_in"	 =>	get_option("sticky_posts")

						//'date_query' => array(
						//	array( 'after' => $date_from )
						//) 
					) );
					
					foreach ($latest_posts as $post) : setup_postdata( $post ); ?>
					
					<?php 
						$categories = get_the_category();
						$category_name = $categories[0]->name;
						$category_id = get_cat_ID( $category_name );

						//if( !is_sticky( get_the_ID() ) && !in_category('Advertorials') && !in_category('Sponsored') && !in_category('Classifieds') && !in_category('Announcement') && !in_category('jobs') &&!in_category('Tenders') && !in_category('Uncategorised')){
					?>
					
						<li class="category <?php if ( in_category( 'Advertorials' )) { echo 'advertorial'; } ?>">
							<h2 class="category-title <?php if (  in_category( 'Advertorials' ) ) { echo 'advertorial'; } ?>">
								<a href="<?php echo get_category_link( $category_id ); ?>" title="More articles in <?php echo $category_name; ?>">
									<?php echo $category_name; ?>
								</a>
							</h2>
							<article>
								<figure class="article-image img-placeholder landscape">
									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'promoted-small' ); ?>
											<img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
										</a>
										<?php 
											if ( in_category( 'Sponsored' )) {
												echo '<p class="sponsored-tag">Sponsored</p>';
											}
										?>
									<?php endif; ?>
								</figure>
								<h3 class="article-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<div class="article-copy">
									<?php the_excerpt(); ?>
								</div>
							</article>
						</li>
					<?php endforeach; ?>
						
					<?php if ($cat_counter % 3 == 2) : ?>
						<hr class="list-divider">
					<?php endif; ?>

					<?php wp_reset_postdata(); $cat_counter++; ?>
				<?php // endforeach; ?>
				
			</ul><!-- .latest-articles -->

		</section><!-- /#content -->
		
		<?php get_template_part('sidebar', 'home'); ?>
		
	</div><!-- /.container -->		

	<section class="widget-area after-content">
		<div class="container">
		
			<?php get_template_part('parts/_classifieds'); ?>
			<?php get_template_part('parts/_featured-events'); ?>
			<?php get_template_part('parts/_ad-unit-mpu'); ?>
			
		</div><!-- /.container -->
	</section>
		
	<?php get_template_part('parts/_pre-footer'); ?>
					
<?php get_footer(); ?>