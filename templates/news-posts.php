<?php
02	$catquery = new WP_Query( 'category_name=news&posts_per_page=5' );
03	while($catquery->have_posts()) : $catquery->the_post();
04	?>
05	<ul>
06	<li><h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
07	 
08	<ul><li><?php the_content(); ?></li>
09	</ul>
10	</li>
11	</ul>
12	<?php endwhile; ?>