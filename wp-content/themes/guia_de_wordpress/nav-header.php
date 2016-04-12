<header class="header flex-row-space-between pv-21"> 
		<div class="header-left">
			
			<a href="<?php echo site_url(); ?>" class="text-gray-darker text-hover-primary not-underline"> 
				<h3>Guía de Wordpress</h3>
			</a>
		</div>
		<div class="header-right">
			<?php 
				$defaults = array (
					'container' => false,
					'theme_location' => 'main-menu',
					'menu_class' => 'nav-main-menu'
				);
				wp_nav_menu($defaults);
			?>
			<a href="#" class="btn btn-gray btn-outline">Login</a>
		</div>
</header>

