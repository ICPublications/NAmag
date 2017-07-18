<?php 
	get_header(); 
	
	$category_id = get_query_var('cat');
	$category = get_category( $category_id );
	$has_children = get_terms( 'category', array( 'parent' => $category_id, 'hide_empty' => false ) );
?>

	<div class="container">	
		<section id="content" class="l-8-1">
			
			<header class="l-small-module">
				<h1 id="page-title" class="title"><?php echo $category->name; ?></h1>

				<a class="rss-link" href="<?php bloginfo('url'); ?>?cat=<?php echo $category_id;?>&feed=rss2">
					<span class="icon-alone" data-icon="&#xe610;"></span><span class="screen-reader-text">RSS 2</span>
				</a>

				<?php
					if ( $has_children ) :
						echo "<ul class='category-list'>";
						$sub_categories = Array(
							'orderby' => 'id',
							'show_count' => 0,
							'title_li' => '',
							'use_desc_for_title' => 1,
							'child_of' => $category_id
						);

						foreach (get_categories($sub_categories) as $sub_category) {
							echo "<li>";
							echo $sub_category->name;
							echo "</li>";
						}

						echo "</ul>";
					endif;
				?>
			</header>

			<?php
				$i = 0; // Set post counter
				$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; // Gets current page of pagination
				$cat = get_queried_object_id();
				
				query_posts('cat='.$cat.'&posts_per_page=3&paged='.$paged);

				// The Loop
				if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>

			<article class="post opinion-list">
				<date class="post-date"><?php the_time('j F, Y'); ?></date>

				<p class="tags-list">
					Tagged in: 
					<?php
						// List tags
						$posttags = get_the_tags();
						
						if ($posttags) :
						
							$i = 1;
							foreach($posttags as $tag) :
							
								if ( $i < count($posttags) ) :
									echo '<span class="single-tag">' . $tag->name . '</span>, ';
								else :
									echo '<span class="single-tag">' . $tag->name . '</span>';
								endif;
								
								$i++; 
							endforeach;
							
						endif;
					?>
				</p>

				<h2 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<div class="article-image">
					<div class="img-placeholder landscape">
						<?php
							echo get_responsive_thumbnail(array( array('promoted-large', 800), array('promoted-medium', 500), array('promoted-small', 320, true)));
						?>
					</div>
				</div>
			
				<div class="article-content">
					<?php the_content('Read the full article'); ?>
				</div>	
			</article>

			<?php
				endwhile; endif;
				
				get_template_part('parts/_pagination'); 
				
				wp_reset_query();
			?>
	
		</section><!-- /#content -->

		<?php get_template_part('sidebar', 'opinions'); ?>

	</div><!-- /.container -->
	
	<?php get_template_part('parts/_pre-footer'); ?>

<?php get_footer(); ?>  