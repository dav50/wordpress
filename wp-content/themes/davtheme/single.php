<!-- 
Ici j'appel les partis de la page que je souhaite afficher, donc : header et footer.
Je n'appel pas sidebar car je ne souhaite pas l'afficher.
Je n'appel pas loop mais je l'écrie car je veux potentiellement le modifier pour différencier le visuel de mes pages articles par rapport au page index. 
Dans une page appelée single le loop va reconnaitre l'article unique que l'on souhaite afficher grâce à l'url.
-->

<?php get_header(); ?>


	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article link="<?php the_permalink(); ?>" class="listarticle">
				<a href="<?php the_permalink(); ?>">
					<h2><?php the_title(); ?></h2>
				</a>
				<small>Posté le <?php the_date(); ?> dans <?php the_category(', '); ?></small>
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
				</article>
			<?php endwhile;?>
		<?php else : ?>
			<article>
				<h2>Aucun article</h2>
			</article>
		<?php endif; ?>

<?php get_footer(); ?>