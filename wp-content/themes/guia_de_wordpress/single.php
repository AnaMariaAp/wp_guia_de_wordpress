<?php get_header(); ?>


<div class="container-sm">
	<?php get_template_part('nav','header'); ?>
	<main role="main">
		<div class="minh-350 bg-white box-shadow">
			<section class="content-items-list">
				<?php while ( have_posts() ) : the_post();?>
				<article class="content-item">
					<div class="content-item-title">
						<a href="" class="text-gray-darker text-hover-primary not-underline"><h3>	<?php the_title(); ?>	<small class="icon-arrow-right"></small></h3></a>
					</div>
					<div class="contet-item-meta">
						<nav class="mr-ch-14 light text-gray-light pv-7">
							<span> <?php the_author(); ?> </span>
							<span>Categoría</span>
							<span> <?php the_date(); ?>  </span>
						</nav>
					</div>
					<div class="content-item-content pt-14">
						<p> <?php the_content(); ?> </p>
					</div>
				</article>
				<?php endwhile;?>
				
			</section>
		</div>
	</main>
</div>

<?php get_footer(); ?>	