<article class="post <?php echo $articlesize; ?>-list">

	<?php if ( $articlesize !== 'text' ) : ?>
	
		<div class="article-image">
			<div class="img-placeholder <?php echo $imagesize; ?> landscape">
			
				<a href="<?php the_permalink(); ?>">
					<?php 

						// Show full image for magazine covers
						if($imagesize == 'cover') :
							the_post_thumbnail('medium');
						
						else :
								if ( $articlesize == 'promoted' ) :
									echo get_responsive_thumbnail(array( array('promoted-large', 800), array('promoted-medium', 500), array('promoted-small', 320, true) ));
								elseif ( $articlesize == 'medium' ) :
									echo get_responsive_thumbnail(array( array('promoted-medium', 500), array('promoted-small', 320, true) ));
								else :
									the_post_thumbnail('promoted-small');
									//echo get_responsive_thumbnail(array('promoted-small', 320, true) );
								endif;
						
						endif; 

					?>
				</a>

			</div>
		</div>
		
	<?php endif; ?>		
	
	<div class="article-content">
		<h2 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<date class="post-date"><?php the_time('j F, Y'); ?></date>
		<?php the_excerpt(); ?>
	</div>	
	
</article>