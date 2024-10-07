<?php // Template Name: Post Archive

get_header();

get_template_part('template-parts/hero', 'default');

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'=>'post', // Your post type name
    'posts_per_page' => 6,
    'paged' => $paged,
);

$query = !empty($args) ? new WP_Query($args) : []; //new WP_Query( $args );

?>
                 

<main>
	<div class="container container-padding">
		<div class="row justify-content-center">
        <div class="col-12 col-xl-10 filter-col mb-32">
				
				<?php /* You can also leave 'action' blank: action="" */ ?>
				<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="select-wrapper rounded-1 border border-1 border-black d-inline-flex">
				<select id="select" name="category" class="form-select py-2 ps-3 pe-48 rounded-1 border-0 text-black cat-list">
				<?php $categories = get_categories(); 
						echo '<option value="default">Filter by Category</option>';
						foreach($categories as $category){		
							echo '<option value="'.$category->slug.'" class="cat-list_item">'.$category->name.'</option>';
						}
				?>
				</select>
                
				</div>
				<!-- <input type="reset" value="Reset" /> -->
				</form>
				
				<div class="d-flex justify-content-center "  style="width:65px; height:120px; overflow:hidden; margin-top:-60px; margin-left:auto; margin-right:auto;">
					<span class="load-spinner"></span>
				</div>
				

			</div>
			<div class="col-12 col-xl-10 post-col">
				<div class="row gy-24 gy-md-32">
					<?php 
						if($query->have_posts()) {
							while($query->have_posts()): $query->the_post();
								setup_postdata($post); 
								get_template_part('template-parts/post-tile');
							endwhile;


						} else {
							get_template_part('content', 'none');
						} 

                        $total_pages = $query->max_num_pages;
                        rhinoactive_pagination($total_pages, 'mt-48');
                        wp_reset_postdata();
					?>
				</div>

			</div>
		</div>
	</div>
</main>



<?php get_footer(); ?>

















