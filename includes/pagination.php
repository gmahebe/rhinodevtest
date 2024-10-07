<?php

function rhinoactive_pagination($total_pages=0, $additional_classes='') {
	if ($total_pages > 1) {
		$current_page = max(1, get_query_var('paged'));

		echo '<div class="pagination d-flex align-items-center gap-1 justify-content-center ' . $additional_classes . '">';
		
		echo paginate_links(array(
			'base'      => get_pagenum_link(1) . '%_%',
			'format'    => 'page/%#%',
			'current'   => $current_page,
			'total'     => $total_pages,
			'prev_text' => '<i style="font-size:16px;width:16px;height:16px;" class="dashicons dashicons-arrow-left-alt2 prev"></i>',
			'next_text' => '<i style="font-size:16px;width:16px;height:16px;" class="dashicons dashicons-arrow-right-alt2 next"></i>',
		));

		echo '</div>';
	}
}