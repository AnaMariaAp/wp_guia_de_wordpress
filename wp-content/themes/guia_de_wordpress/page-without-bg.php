<?php 
/*
 Template Name: No background page
*/
?>

<?php get_header(); ?>

<div class="container-sm">
	<?php get_template_part('nav','header'); ?>
	<main role="main" class="main-container">
		<article class="normalize-text">
			<?php while ( have_posts() ) : the_post(); ?>
				<h3 class="text-gray-darker"><?php the_title(); ?></h3>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</article>
	</main>
</div>

<?php get_footer(); ?>	