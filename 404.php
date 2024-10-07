<?php // The template for displaying 404 pages (not found)

get_header(); ?>

<div class="page-wrap position-relative py-64" id="404-page">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-10 content-col py-64 d-flex flex-column align-items-center">
				<p class="page-title fw-bold px-24 rounded d-inline-flex justify-content-center overflow-hidden bg-primary mb-lg-24 text-light" style="font-size: 4.5rem;">404</p>
				<h1 class="page-description text-center h3 fw-semibold">Oops! Page not found</h1>
				<p class="error-details text-center mb-32">The requested URL <?php echo home_url().$_SERVER["REQUEST_URI"]; ?> cannot be found on this server.</p>
				<a href="<?php echo home_url(); ?>" class="btn btn-primary">Go Back Home</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer();