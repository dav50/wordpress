

<section id="article">

				<article class="articlez">
				<img src="wp-content/themes/davtheme/media/99.jpg" href="" alt="">
				</article>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="articleindex">
				<article link="<?php the_permalink(); ?>" class="listarticle">
					<a href="<?php the_permalink(); ?>">
						<!-- <h2><?php the_title(); ?></h2> -->
					</a>
						<!--<small>Posté le <?php the_date(); ?> dans <?php the_category(', '); ?></small>-->
						<?php the_post_thumbnail( 'full' ); ?>
						<!-- <?php the_content(array(100, 100) ); ?>-->
			</div>
				</article>
			<?php endwhile;?>
		<?php else : ?>
			<article>
				<h2>Aucun article</h2>
			</article>
		<?php endif; ?>
		
	</section>