<?php get_header(); 

$event_dates = get_field('event_dates');
$event_location = get_field('event_location'); ?>

	<div class="container container-padding">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-10 filter-col mb-32">
				<div id="primary" class="content-area">
					
				<div>
					<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
						the_post();
						$author_id = get_the_author_meta( 'ID' );
						$author_url = get_author_posts_url( $author_id );
					?>
					<article <?php post_class( 'custom-blog-item' ); ?>>
						<div class="blog-item-inner">
							<h1 itemprop="name" class="bi-title entry-title">
								<?php the_title(); ?>
							</h1>
							<div class="content-above-image">
								<div class="bi-author">
									<div class="bi-author-avatar">
										<a itemprop="url" href="<?php echo esc_url( $author_url ); ?>">
											<?php echo get_avatar( $author_id, 60 ); ?>
										</a>
									</div>
									<div class="bi-author-name">
										<a itemprop="author" class="bi-author-link"
											href="<?php echo esc_url( $author_url ); ?>">
											<?php the_author_meta( 'display_name' ); ?>
										</a>
									</div>
								</div>
								<div class="bi-category">
									<?php the_category( ' / ' ); ?>
								</div>
							</div>
							<div class="image-wrapper">
								<?php if ( has_post_thumbnail() ) { ?>
									<div class="bi-media-image single-img">
										<?php the_post_thumbnail( 'full' ); ?>
									</div>
								<?php } ?>

								
								
								<div class="post-meta d-flex flex-column gap-2 mt-24">
									<div class="meta-item d-flex gap-2 align-items-center">
										<i class="dashicons dashicons-calendar-alt"></i>
										<div class="badge bg-secondary text-uppercase">
										<p class="meta-info mb-0"><?php the_time( get_option( 'date_format' ) ); ?></p>
										</div>
									</div>
									<?php
									if(!empty($event_location)) { ?>
										<div class="meta-item d-flex gap-2 align-items-center">
											<i class="dashicons dashicons-location"></i>
											<div class="badge bg-secondary text-uppercase">
											<p class="meta-info mb-0"><?php echo $event_location; ?></p>
											</div>
										</div>
									<?php } ?>
								</div>

							</div>
							<div class="content-below-image">
								<?php if ( get_the_tags() ) { ?>
									<div class="bi-tags">
										<h5 class="bi-tags-label"><?php esc_html_e( 'Tags: ', 'domain_name' ); ?></h5>
										<div class="bi-tags-wrapper">
											<?php the_tags( '', ', ', '' ); ?>
										</div>
									</div>
								<?php } ?>
							<div class="article-text">
								<?php
								// Include post content
								the_content();
								?>
							</div>
							<?php
							// Previous/next post navigation.
							the_post_navigation(
								array(
								'next_text' => '<span class="nav-label">' . esc_html__( 'Next article', 'domain_name' ) . '</span><p class="next-post-title">%title</p>',
								'prev_text' => '<span class="nav-label">' . esc_html__( 'Previous article', 'domain_name' ) . '</span><p class="previous-post-title">%title</p>'
								)
							);
							// Include comments
							if ( comments_open() ) { ?>
								<div class="comment-section">
									<?php comments_template(); ?>
								</div>
							<?php } ?>
							</div>
						</div>
					</article>
					<?php } // End of the loop.
					}
					wp_reset_postdata(); ?>
					</div>
			
				</div>				
			</div>
		</div>
	</div>
		

<?php get_footer();