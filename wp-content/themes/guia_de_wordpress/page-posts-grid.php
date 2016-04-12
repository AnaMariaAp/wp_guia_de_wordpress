<?php 
/*
	Template Name: Posts grid
*/
?>
<?php get_header(); ?>
	
	<div class="container-sm">
		<?php get_template_part('nav', 'header'); ?>
		<main role="main" class="main-content">
			<div class="grid-list grid-list-2 grid-list-1-xs row" id="posts-grid">
				<?php $query = new WP_Query('showposts=5') ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<article class="bg-white grid-list-item normalize-text">
						<a href="<?php the_permalink(); ?>" class=" box-shadow minh-210 border-radius block">
							<h3 class="text-gray-darker mb-14"><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
						</a>
					</article>
				<?php endwhile; ?>
			</div>
		</main>
	</div>

<?php get_footer(); ?>