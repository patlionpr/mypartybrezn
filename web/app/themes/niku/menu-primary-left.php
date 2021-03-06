<?php

/**
 * The Template for displaying menu primary left
 *
 * @author 		tokoo
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<nav class="main-navigation">

	<div class="desktop-navigation">

	<?php if ( has_nav_menu( 'primary-left' ) ) :

		$menu_args = array(
			'theme_location' => 'primary-left',
			'container'      => false
		);

		if ( class_exists( 'Tokoo_Megamenus_Walker' ) )
			$menu_args['walker'] = new Tokoo_Megamenus_Walker;

		wp_nav_menu( $menu_args );

	else : ?>

		<ul class="menu">
			<?php wp_list_pages( array( 'depth' => 1,'sort_column' => 'menu_order','title_li' => '', 'include'  => 2 ) ) ?>
		</ul>

	<?php endif; ?>
	</div>
</nav> <!-- .primary-left-navigation -->
