<?php get_header(); ?>


<div class="container-sm">
	<?php get_template_part('nav','header'); ?>
	<main role="main">
		<div class="minh-350 bg-white box-shadow">
			<form class="flex-space-between ph-ch-0 clearfix">
				<div class="col-sm-6">
					<select class="form-control select-override">
						<option value="All categories">All categories</option>
					</select>
				</div>
				<div class="col-sm-6">
					<select class="form-control select-override">
						<option value="Sort by name">Sort by name</option>
					</select>
				</div>
			</form>
			<section class="content-items-list">
				<?php $query = new WP_Query('showposts=5') ?>
				<?php if( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : $query->the_post();?>
				<article class="content-item">
					<div class="content-item-title">
						<a href="<?php the_permalink(); ?>" class="text-gray-darker text-hover-primary not-underline"><h3>	<?php the_title(); ?>	<small class="icon-arrow-right"></small></h3></a>
					</div>
					<div class="content-item-meta">
						<nav class="mr-ch-14 light text-gray-light pv-7">
							<span> <?php the_author(); ?> </span>
							<span>Categoría</span>
							<span> <?php the_time('F j, Y'); ?> </span>
						</nav>
					</div>
					<div class="content-item-content pt-14">
						<p> <?php the_excerpt(); ?> </p>
					</div>
				</article>
				<?php endwhile;?>
				<?php endif; ?>

			</section>
		</div>

	</main>


</div>




<?php get_footer(); ?>	