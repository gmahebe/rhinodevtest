<header id="header" class="bg-light sticky">
	<div class="container">
		<div class="row">
			<div class="col-12 nav-col">
				<div class="navbar navbar-expand-lg navbar-light">
					<a href="#" class="navbar-brand"><img src="<?php echo get_template_directory_uri().'/redrhino.webp'; ?>" class="logo-img"></a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="nav-wrapper d-flex flex-column w-100">
						<?php

						wp_nav_menu([
							'theme_location' => WPMenus::SECONDARY_MENU,
							'menu' => WPMenus::SECONDARY_MENU,
							'container' => false,
							'menu_class' => 'navbar-nav ms-auto d-none d-lg-flex',
							'menu_id' => WPMenus::SECONDARY_MENU,
							'walker' => new RA_Basic_Nav_Walker(),
						]);

						wp_nav_menu([
							'theme_location' => WPMenus::PRIMARY_MENU,
							'menu' => WPMenus::PRIMARY_MENU,
							'container_class' => 'collapse navbar-collapse',
							'container_id' => 'navbar-collapse',
							'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
							'menu_id' => WPMenus::PRIMARY_MENU,
							'walker' => new RA_Basic_Nav_Walker(),
						]); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</header>