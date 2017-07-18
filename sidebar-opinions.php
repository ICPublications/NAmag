<div id="sidebar" class="l-4-9">

	<aside class="sidebar secondary l-module">
		<h3 class="section-heading title-invert">New African opinion columnists</h3>


		<ul class="opinion-category-list">
			
			<li>
				<a href="<?php bloginfo('url'); ?>/category/opinions/back-to-the-future/"><img class="avatar photo" alt="Author Thumbnail" src="<?php bloginfo('template_directory'); ?>/lib/img/avatars/Back-to-the-Future.jpg"></a>
				<h4><a href="<?php bloginfo('url'); ?>/category/opinions/back-to-the-future/">Back to the Future</a></h4>
				<p>Onyekachi Wambu</p>
			</li>
			<li>
				<a href="<?php bloginfo('url'); ?>/category/opinions/baffours-beefs/"><img class="avatar photo" alt="Author Thumbnail" src="<?php bloginfo('template_directory'); ?>/lib/img/avatars/Baffour-Beefs.jpg"></a>
				<h4><a href="<?php bloginfo('url'); ?>/category/opinions/baffours-beefs/">Baffour's Beefs</a></h4>
				<p>Baffour Ankomah</p>
			</li>
			<li>
				<a href="<?php bloginfo('url'); ?>/category/opinions/business-school/"><img class="avatar photo" alt="Author Thumbnail" src="<?php bloginfo('template_directory'); ?>/lib/img/avatars/Business-School.jpg"></a>
				<h4><a href="<?php bloginfo('url'); ?>/category/opinions/business-school/">Business School</a></h4>
				<p>Prof Atuahene-Gima</p>
			</li>
			<li>
				<a href="<?php bloginfo('url'); ?>/category/opinions/guest-columns/"><img class="avatar photo" alt="Author Thumbnail" src="<?php bloginfo('template_directory'); ?>/lib/img/avatars/Guest-Column.jpg"></a>
				<h4><a href="<?php bloginfo('url'); ?>/category/opinions/guest-columns/">Guest Columns</a></h4>
				<p>Various contributors</p>
			</li>
			<li>
				<a href="<?php bloginfo('url'); ?>/category/opinions/lest-we-forget/"><img class="avatar photo" alt="Author Thumbnail" src="<?php bloginfo('template_directory'); ?>/lib/img/avatars/Lest-We-Forget.jpg"></a>
				<h4><a href="<?php bloginfo('url'); ?>/category/opinions/lest-we-forget/">Lest We Forget</a></h4>
				<p>John Nagenda</p>
			</li>
			<li>
				<a href="<?php bloginfo('url'); ?>/category/opinions/money-talks/"><img class="avatar photo" alt="Author Thumbnail" src="<?php bloginfo('template_directory'); ?>/lib/img/avatars/Money-Talks.jpg"></a>
				<h4><a href="<?php bloginfo('url'); ?>/category/opinions/money-talks/">Money Talks</a></h4>
				<p>Anver Versi</p>
			</li>
			<li>
				<a href="<?php bloginfo('url'); ?>/category/opinions/open-letters/"><img class="avatar photo" alt="Author Thumbnail" src="<?php bloginfo('template_directory'); ?>/lib/img/avatars/Open-Letters.jpg"></a>
				<h4><a href="<?php bloginfo('url'); ?>/category/opinions/open-letters/">Open Letters</a></h4>
				<p>Various contributors</p>
			</li>
			<li>
				<a href="<?php bloginfo('url'); ?>/category/opinions/out-of-africa/"><img class="avatar photo" alt="Author Thumbnail" src="<?php bloginfo('template_directory'); ?>/lib/img/avatars/Out-of-Africa.jpg"></a>
				<h4><a href="<?php bloginfo('url'); ?>/category/opinions/out-of-africa/">Out of Africa</a></h4>
				<p>Joseph Ochieno</p>
			</li>
			<li>
				<a href="<?php bloginfo('url'); ?>/category/opinions/reflections-of-an-ordinary-woman/"><img class="avatar photo" alt="Author Thumbnail" src="<?php bloginfo('template_directory'); ?>/lib/img/avatars/Reflection-of-Ordinary.jpg"></a>
				<h4><a href="<?php bloginfo('url'); ?>/category/opinions/reflections-of-an-ordinary-woman/">Reflections of an Ordinary Woman</a></h4>
				<p>Akua Djane</p>
			</li>
			<li>
				<a href="<?php bloginfo('url'); ?>/category/opinions/under-the-neem-tree/"><img class="avatar photo" alt="Author Thumbnail" src="<?php bloginfo('template_directory'); ?>/lib/img/avatars/Under-the-Neem-Tree.jpg"></a>
				<h4><a href="<?php bloginfo('url'); ?>/category/opinions/under-the-neem-tree/">Under the Neem Tree</a></h4>
				<p>Cameron Duodu</p>
			</li>

			<?php

				//
				// This section of code is for querying the latest article for each category and gets the author image
				//

				/*

				// Query sub-categories of opinions category
				$categories = get_categories('parent=792');
				$author_avatar;
				
				foreach ($categories as $category) {

					// Query latest post for author avatar
					query_posts( array ( 'category_name' => $category->slug, 'posts_per_page' => 1 ) );

					if ( have_posts() ) : while( have_posts() ) : the_post();

						$author_avatar =  get_avatar( get_the_author_meta('email') );

					endwhile; endif;

					wp_reset_query();

					$output = '<li>';
					$output .= '<a href="' . bloginfo('url') . '/category/opinions/' . $category->slug . '">' . $author_avatar . '</a>';
					$output .= '<h4><a href="' . bloginfo('url') . '/category/opinions/' . $category->slug . '">' . $category->cat_name . '</a></h4>';
					$output .= '<p>' . $category->description . '</p>';
					$output .= '</li>';

					echo $output;
				}

				*/
			?>			


		</ul>

	</aside>

	<aside class="sidebar secondary site-links l-module">
		<h3 class="section-heading title-invert">Other websites of interest</h3>
		<?php dynamic_sidebar('Blog Sidebar'); ?>
	</aside>

	<aside class="sidebar secondary site-links">
		<h3 class="section-heading title-invert">From our Twitter feed</h3>
		<div class="twitter-widget-feed">
			<a class="twitter-timeline" href="https://twitter.com/NewAfricanMag" data-widget-id="481382922960642048">Tweets by @NewAfricanMag</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
	</aside>


	
</div><!-- /#sidebar -->