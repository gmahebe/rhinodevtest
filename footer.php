<!-- don't worry about the footer for this assignment -->

<footer id="footer" class="d-flex flex-column w-100 justify-content-center bg-primary" style="height: 200px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h4 class="text-white mb-0">we greatly appreciate all the time and effort spent completing this assignment</h4>
				<h5 class="text-light mb-0 mt-2 fw-normal">- rhinoactive</h5>
			</div>
		</div>
	</div>
</footer>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>

<script>
	function ready(callback){
		// in case the document is already rendered
		if (document.readyState!='loading') callback();
		// modern browsers
		else if (document.addEventListener) document.addEventListener('DOMContentLoaded', callback);
	
		else document.attachEvent('onreadystatechange', function(){
			if (document.readyState=='complete') callback();
		});
	}

	ready(function(){	
		const secondaryMenu = document.getElementById('secondary-menu-nav');
		const primaryMenuNav = document.getElementById('primary-menu-nav');
		
		window.addEventListener('scroll', function() => {
			const stickyOffset = primaryMenuNav.offsetTop;

			if (window.pageYOffset > stickyOffset) {
				secondaryMenu.classList.add('hidden');
			} else {
				secondaryMenu.classList.remove('hidden');
			}
		});
	});


	


	document.getElementById("select").addEventListener('change', (event) => {
		
		$('.cat-list_item').removeClass('active');
		$(this).addClass('active');

		$.ajax({
			type: 'GET',
			url: '/wp-admin/admin-ajax.php',
			dataType: 'html',
			async: true,
			data: {
				action: 'find_posts',
				category: $('#select').val()
			},
			beforeSend: function() {
				$(".load-spinner").show().after('<div class="load-spinner"><img src="http://redrhino.local/wp-content/themes/sr_web_aug_2024/src/img/spinner.gif" /></div>');
			},
			complete: function() {
				$('.load-spinner').hide();
			},
			success: function(data) {  
				$('.row.gy-24.gy-md-32').html(data);
			}
		})
	});

</script>
<?php wp_footer(); ?>

</body>
</html>