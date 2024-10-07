<?php 
global $post;
$title = $post->post_title;
$categories = get_the_category();
$featured_image_url = get_the_post_thumbnail_url($post->ID, 'large');
$event_dates = get_field('event_dates');
$event_location = get_field('event_location'); ?>

<div class="col-12 col-sm-12 col-md-6 col-lg-4 post-tile">
	<a href="<?php echo get_permalink(); ?>" class="tile-link d-flex flex-column justify-content-between text-black text-decoration-none border border-1 border-dark rounded d-block overflow-hidden h-100 pb-3 pb-md-24">
		<div class="top-align-wrap">
			<?php if($featured_image_url) {
				$featured_image_id = get_post_thumbnail_id($post->ID);
				$featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true); ?>

				<div class="image-wrapper position-relative w-100 ratio ratio-16x9 overflow-hidden">
					<img src="<?php echo $featured_image_url; ?>" class="position-absolute h-100 w-100 top-0 start-0" alt="<?php echo $featured_image_alt; ?>">
				</div>
			<?php } ?>

			<div class="main-content-wrap px-3 px-md-24 pt-3 pt-md-24">
				<?php if(count($categories)) { ?>
					<div class="category-badge-wrapper d-flex gap-1 mb-3">
						<?php foreach($categories as $category) { ?>
							<div class="badge bg-secondary text-uppercase"><?php echo $category->name; ?></div>
						<?php } ?>
					</div>
				<?php } ?>
	
				<h3 class="post-title fs-4 mb-0 fw-normal"><?php echo $title; ?></h3>
	
				<?php if(!empty($event_dates) || !empty($event_location)) { ?>
					<div class="post-meta d-flex flex-column gap-2 mt-24">
						<?php if(!empty($event_dates)) { ?>
							<div class="meta-item d-flex gap-2 align-items-center">
								<i class="dashicons dashicons-calendar-alt"></i>
								<p class="meta-info mb-0"><?php echo $event_dates; ?></p>
							</div>
						<?php }
	
						if(!empty($event_location)) { ?>
							<div class="meta-item d-flex gap-2 align-items-center">
								<i class="dashicons dashicons-location"></i>
								<p class="meta-info mb-0"><?php echo $event_location; ?></p>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	
		<div class="fake-link mt-24 mt-md-40 d-inline-flex align-items-center text-black px-3 px-md-24">
			<span class="fw-bold">View Event</span>
			<i class="dashicons dashicons-arrow-right-alt"></i>
		</div>
	</a>
</div>